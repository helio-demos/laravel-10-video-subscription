<?php

namespace App\Http\Controllers;

class SitemapController extends Controller
{
    /**
     * Provision a new web server.
     */
    public function sitemap()
    {
        return view('dash.sitemap',['items'=>config('video-streaming.sitemap')]);
    }
}
