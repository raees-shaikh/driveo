<?php

namespace App\Http\Controllers\cms;

use Wink\WinkPost;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StatisticsController extends Controller
{
    public function index()
    {
        $galleriesCount = Gallery::count();
        $newsCount = WinkPost::wherePublished(1)->count();
        return view('backend.statistics.index', compact('galleriesCount','newsCount'));
    }
}
