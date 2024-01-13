<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI;

class ImgaeController extends Controller
{
    public function index ()
    {
        return view('image_ai');
    }

    public function search (Request $request)
    {
        $request->validate([
            'search' => 'required|string|max:1000',
        ]);

        $search = $request->search;

        switch($request->size){
            case 'lg':
                $size = '1024x1024';
                break;
            case 'md':
                $size = '512x512';
                break;
            default:
                $size = '256x256';
                break;
        }

        $client = OpenAI::client(env('OPEN_AI_KEY'));

        $response = $client->images()->create([
            'prompt' => $search,
            'n' => 1,
            'size' => $size,
            'response_format' => 'url'
        ]);

        dd($response);
    }
}
