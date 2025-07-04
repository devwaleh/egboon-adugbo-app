<?php

namespace App\Services;

use OpenAI;

class CvAiReviewService
{
    public static function generateFeedback($cvText)
    {
        $client = OpenAI::client(env('OPENAI_API_KEY'));

        $prompt = "Review this CV text and provide feedback on formatting, keyword relevance, and achievement clarity:\n\n{$cvText}";

        $response = $client->chat()->create([
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                ['role' => 'user', 'content' => $prompt],
            ],
        ]);

        return $response->choices[0]->message->content ?? 'No feedback generated.';
    }
}
