<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

use Orhanerday\OpenAi\OpenAi;

class TestController extends Controller
{
    public function index(Request $request)
    {
        $client = new Client([
            'headers' => [
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . env('OPENAI_API_KEY'),
            ]
        ]);

        $response = $client->post('https://api.openai.com/v1/engines/davinci-codex/completions', [
            'json' => [
                'prompt' => $request->input('prompt'),
                'max_tokens' => 150,
                'n' => 1,
                'stop' => '\n',
            ],
        ]);

        $result = json_decode((string) $response->getBody(), true);
        $message = $result['choices'][0]['text'];

        dd($message);

        // return view('chat', ['message' => $message]);
    }

    public function testGet()
    {
        $response = Http::get('http://jsonplacehorder.typicode.com.posts');
        $jsonData = $response ->json();
        dd($jsonData);
    }
}
