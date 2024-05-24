<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShortUrl;
use Illuminate\Support\Str;

class UrlShortenerController extends Controller
{
    public function index()
    {
        return view('url_shortener');
    }

    public function shorten(Request $request)
    {
        $request->validate([
            'url' => 'required|url'
        ]);

        $originalUrl = $request->input('url');
        $existing = ShortUrl::where('original_url', $originalUrl)->first();

        if ($existing) {
            return view('url_shortener')->with('shortUrl', $existing->short_url);
        }

        $shortUrl = $this->generateRandomString(12);
        ShortUrl::create([
            'original_url' => $originalUrl,
            'short_url' => $shortUrl
        ]);

        return view('url_shortener')->with('shortUrl', $shortUrl);
    }

    public function redirect($shortUrl)
    {
        $shortUrl = ShortUrl::where('short_url', $shortUrl)->firstOrFail();
        return redirect($shortUrl->original_url);
    }

    private function generateRandomString($length = 12)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-_';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
