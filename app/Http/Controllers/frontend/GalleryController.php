<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->paginate(10);
        // dd($news);
        return view('frontend.gallery.index', compact('galleries'));
    }

    public function show($slug)
    {
        $gallery = Gallery::whereSlug($slug)->firstOrFail();
        $medias = $gallery->medias()->latest()->paginate(10);
        return view('frontend.gallery.show-gallery', compact('gallery', 'medias'));
    }
}
