<?php

namespace App\Http\Controllers;

use App\Models\CvReview;
use Illuminate\Http\Request;
use App\Services\CvAiReviewService;
use Smalot\PdfParser\Parser as PdfParser;
use PhpOffice\PhpWord\IOFactory as WordIO;

class CvReviewController extends Controller
{
    public function index()
    {
        $cv = CvReview::where('user_id', auth()->id())->latest()->get();
        return view('cv.index', compact('cv'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'cv' => 'required|mimes:pdf,doc,docx|max:2048',
        ]);

        $filePath = $request->file('cv')->store('cvs', 'public');
        $text = $this->extractText($filePath);
        $aiFeedback = CvAiReviewService::generateFeedback($text);

            CvReview::create([
                'user_id' => auth()->id(),
                'cv_file_path' => $filePath,
                'feedback' => $aiFeedback,
                'status' => 'reviewed',
            ]);

        return redirect()->route('cv.index')->with('success', 'CV re-submitted and reviewed.');
    }


    protected function extractText($path)
    {
        $fullPath = storage_path("app/public/{$path}");
        $ext = pathinfo($fullPath, PATHINFO_EXTENSION);

        if ($ext === 'pdf') {
            $parser = new PdfParser();
            return $parser->parseFile($fullPath)->getText();
        }

        if (in_array($ext, ['doc', 'docx'])) {
            $phpWord = WordIO::load($fullPath);
            $text = '';
            foreach ($phpWord->getSections() as $section) {
                foreach ($section->getElements() as $element) {
                    $text .= method_exists($element, 'getText') ? $element->getText() . "\n" : '';
                }
            }
            return $text;
        }

        return '';
    }
}
