<?php

namespace App\Http\Controllers;

use Orhanerday\OpenAi\OpenAi;
use Illuminate\Http\Request;
use Throwable;

class OpenAiController extends Controller
{
    public function index()
    {
        return view('projects.openai');
    }

    public function result(Request $request)
    {
        set_time_limit(120);
        $text = $request->text;
        $open_ai = new OpenAi(env('OPEN_AI_API_KEY'));

        if (empty($text)) {
            $text = "Your input can't be empty.";
            return view('projects.openai', [
                'result' => $text
            ]);
        }

        try {
            $result = $open_ai->completion([
                'model' => 'text-davinci-003',
                'prompt' => $text . '?',
                'temperature' => 0.9,
                'max_tokens' => 2048,
                'frequency_penalty' => 0,
                'presence_penalty' => 0.6,
            ]);

            $output = json_decode($result, true);
            $result_ai = $output['choices'][0]['text'];

            return view('projects.openai', [
                'result' => $result_ai,
                'text' => $text
            ]);
        } catch (Throwable $e) {
            $text = "There is a problem from the results of OpenAI.";
            return view('projects.openai', [
                'result' => $text
            ]);
        }
    }
}
