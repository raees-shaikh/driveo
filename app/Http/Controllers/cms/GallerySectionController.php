<?php

namespace App\Http\Controllers\cms;

use App\Models\Media;
use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class GallerySectionController extends Controller
{
    public function index($id)
    {
        $gallery = Gallery::findOrFail($id);
        $medias = $gallery->medias()->latest()->paginate(10);
        return view('backend.gallery_section.index', compact('medias', 'gallery'));
    }

    public function create($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('backend.gallery_section.create', compact('gallery'));
    }

    public function store(Request $request, $id)
    {
        $request->validate([
            'image' => 'required|max:50',
            'image.*' => 'nullable|mimes:png,jpg,jpeg|max:5000',
        ]);
        $gallery = Gallery::findOrFail($id);
        $mediasCount = $gallery->medias()->latest()->count();
        if ($mediasCount + count($request->image) > 50) {
            return redirect()->back()->with(['alert-type' => 'info', 'message' => 'Maximum 50 Images allowed in gallery.']);
        }
        $files = $request->file('image');
        foreach ($files as $file) {
            $file_details = uploadFile($file, 'images/gallery');
            $media = new Media();
            $media->name = 'Gallery';
            $media->model_id = $id;
            $media->model_type = Gallery::class;
            $media->type = $file_details['type'];
            $media->filename = $file_details['filename'];
            $media->save();
        }
        return redirect()->route('backend.gallery.media.index', $id)->with(['alert-type' => 'success', 'message' => 'Media Stored Successfully']);
    }

    public function edit($gallery_id, $media_id)
    {
        $gallery = Gallery::findOrFail($gallery_id);
        $medias = $gallery->medias()->findOrFail($media_id);
        // dd($medias);
        return view('backend.gallery_section.edit', compact('gallery', 'medias'));
    }

    public function update(Request $request, $gallery_id, $media_id)
    {
        $gallery = Gallery::findOrFail($gallery_id);
        $media = $gallery->medias()->findOrFail($media_id);
        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg|max:5000',
        ]);

        $file = $request->file('image');
        if ($file) {
            if ($media->filename) {
                Storage::disk('public')->delete('images/gallery/' . $media->filename);
            }
            $file_details = uploadFile($file, 'images/gallery');
            $media->type = $file_details['type'];
            $media->filename = $file_details['filename'];
            $media->save();
        }

        return redirect()->route('backend.gallery.media.index', $gallery_id)->with(['alert-type' => 'success', 'message' => 'Media Updated Successfully']);
    }

    public function delete($gallery_id, $media_id)
    {
        $gallery = Gallery::findOrFail($gallery_id);
        $media = $gallery->medias()->findOrFail($media_id);
        if ($media->filename) {
            Storage::disk('public')->delete('images/gallery/' . $media->filename);
        }
        if ($media->delete()) {
            return redirect()->route('backend.gallery.media.index', $gallery_id)->with(['alert-type' => 'success', 'message' => 'Media Deleted Successfully']);
        }
        return redirect()->back()->with(['alert-type' => 'error', 'message' => 'Something Went Wrong']);
    }
}
