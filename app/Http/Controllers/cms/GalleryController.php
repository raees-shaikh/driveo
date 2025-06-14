<?php

namespace App\Http\Controllers\cms;

use App\Models\Gallery;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index(Request $request)
    {
        //$galleries = Gallery::latest()->Paginate(10);
        $galleries = Gallery::latest();
        $galleries = $this->filterResults($request, $galleries);
        $galleries = $galleries->paginate(10);
        return view('backend.gallery.index', compact('galleries'));
    }

    protected function filterResults($request, $galleries)
    {
        $request->validate([
            'q' => 'nullable|min:3|max:40'
        ]);

        if ($request !== null && $request->has('q') && $request['q'] !== '') {
            $search = $request['q'];

            $galleries = $galleries->where('title', 'LIKE', '%' . $search . '%');
        }
        return $galleries;
    }

    public function create()
    {
        return view('backend.gallery.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3|max:40|unique:galleries,title',
            'image' => 'required|mimes:jpeg,png,jpg|max:1000',
        ]);
        $fileWithExtension = $request->file('image');
        // dd($fileWithExtension);
        if ($fileWithExtension) {
            $filename = now()->format('dmy-his') . '-' . rand(1, 99) . '.' . $fileWithExtension->clientExtension();
            $destinationPath = storage_path('app/public/images/gallery/thumbnails/');
            $img = Image::make($fileWithExtension->getRealPath())->resize(null, 600, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upSize();
            });
            $img->save($destinationPath . $filename, 80);
        }

        $gallery = new Gallery();
        $gallery->title = $request->title;
        $gallery->slug = Str::slug($request->title);
        $gallery->image = $filename;
        if ($gallery->save()) {
            return redirect()->route('backend.gallery.index')->with(['alert-type' => 'success', 'message' => 'Gallery Stored Successfully']);
        }
        return redirect()->back()->with(['alert-type' => 'error', 'message' => 'Something Went Wrong']);
    }


    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('backend.gallery.edit', compact('gallery'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|min:3|max:40|unique:galleries,title,' . $id,
            'image' => 'nullable|mimes:jpeg,png,jpg,pdf|max:1000',
        ]);

        $fileWithExtension = $request->file('image');
        $gallery = Gallery::findOrFail($id);
        if ($request->has('image')) {
            $filename = now()->format('dmy-his') . '-' . rand(1, 99) . '.' . $fileWithExtension->clientExtension();
            $destinationPath = storage_path('app/public/images/gallery/thumbnails/');
            $img = Image::make($fileWithExtension->getRealPath())->resize(null, 600, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upSize();
            });
            $img->save($destinationPath . $filename, 80);
            if ($gallery->image) {
                Storage::disk('public')->delete('images/gallery/thumbnails/' . $gallery->image);
            }
            $gallery->image = $filename;
        }
        $gallery->title = $request->title;
        $gallery->slug = Str::slug($request->title);
        if ($gallery->save()) {
            return redirect()->route('backend.gallery.index')->with(['alert-type' => 'success', 'message' => 'Gallery Update Successfully']);
        }
        return redirect()->back()->with(['alert-type' => 'error', 'message' => 'Something Went Wrong']);
    }

    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        $medias = $gallery->medias()->get();

        foreach ($medias as $media) {
            if ($media->filename) {
                Storage::disk('public')->delete('images/gallery/' . $media->filename);
            }
            $media->delete();
        }

        if ($gallery->delete() && Storage::disk('public')->delete('images/gallery/thumbnails/' . $gallery->image)) {
            return redirect()->route('backend.gallery.index')->with(['alert-type' => 'success', 'message' => 'Gallery Deleted Successfully']);
        }
        return redirect()->back()->with(['alert-type' => 'error', 'message' => 'Something Went Wrong']);
    }
}
