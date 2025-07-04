<?php

namespace App\Http\Controllers;

use App\Models\CvReview;
use Illuminate\Http\Request;

class CvReviewController extends Controller
{
    public function index()
    {
        $cv = auth()->user()->cvReview;
        return view('cv.index', compact('cv'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'cv' => 'required|mimes:pdf,doc,docx|max:2048',
        ]);

        $filePath = $request->file('cv')->store('cvs', 'public');

        $cvReview = CvReview::create([
            'user_id' => auth()->id(),
            'cv_file_path' => $filePath,
            'status' => 'pending',
        ]);

        return redirect()->route('cv.index')->with('success', 'CV uploaded for review.');
    }
}
