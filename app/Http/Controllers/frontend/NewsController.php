<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Wink\WinkPost;

class NewsController extends Controller
{
    public function index()
    {
        $news = WinkPost::wherePublished(1)->latest()->paginate(10);
        $latestPosts = WinkPost::wherePublished(1)->latest()->limit(5)->get();
        // dd($news);
        return view('frontend.news-blogs.index', compact('news', 'latestPosts'));
    }

    public function show($slug)
    {
        $news = WinkPost::wherePublished(1)->whereSlug($slug)->firstOrFail();
        // dd($news);
        $latestPosts = WinkPost::wherePublished(1)->latest()->limit(5)->get();
        return view('frontend.news-blogs.show', compact('news', 'latestPosts'));
    }
}
