<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Wink\WinkPost;


class SitemapXmlController extends Controller
{
    public function index()
    {
        // Artisan::call('view:clear');
        $posts = WinkPost::all();

        return response()->view('sitemap', [
            'posts' => $posts
        ])->header('Content-Type', 'text/xml');
    }

    public function displayImage($filename)
    {
        $path = 'storage/app/public/wink/images/'.$filename;
        
        if (!File::exists($path)) {
            abort(404);
        }

        $file = File::get($path);
        $type = File::mimeType($path);
        $response = Response::make($file, 200);
        $response->header("Content-Type", $type);

        return $response;
    }

    public function displayCertificates() {
        return view('certificates', [
            'url' => "certificates"
        ]);
    }
}
