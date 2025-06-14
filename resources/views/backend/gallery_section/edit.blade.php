@extends('backend.layouts.app')
@section('title', 'Gallery Media')
@section('content')
    <div class="row layout-top-spacing pspacing">
        <div id="tableDropdown" class="col-lg-12 col-12 layout-spacing">

            <div class="statbox widget box box-shadow my-1">
                <div class="widget-header">
                    <div class="row justify-content-between align-items-center cm-p">
                        <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
                            <legend class="h4">
                                Edit Gallery Media
                            </legend>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 mb-2 d-flex justify-content-end align-it mt-2">
                            <nav class="breadcrumb-two" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a
                                            href="javascript:void(0);">Edit Gallery Media</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>


            <div class="row">
                <div class="col-12 col-md-8 col-lg-7 mb-2 box box-shadow">
                    <div class="statbox widget box box-shadow px-4">
                        <form id="mt-3"
                            action="{{ route('backend.gallery.media.update', ['gallery_id' => $gallery->id, 'media_id' => $medias->id]) }}"
                            method="post" class="section work-experience" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-12">
                                <label for="degree2">Title</label>
                                <input type="text" name="title" class="form-control mb-4" id="degree2"
                                    placeholder="Enter Title" value="{{ $gallery->title }}" minlength="3" maxlength="40"
                                    required readonly>
                                @if ($errors->has('title'))
                                    <div class="text-danger" role="alert">{{ $errors->first('title') }}
                                    </div>
                                @endif
                            </div>
                            {{-- @dd($medias->type) --}}
                            <div class="col-md-12">
                                <label for="degree2"> Upload Image</label><br>
                                @if ($medias->filename)
                                    <img src="{{ asset('/storage/images/gallery/' . $medias->filename) }}" width="150px"
                                        height="150px">
                                    <br>
                                @endif
                                <input class="form-control" name="image" value="{{ $medias->filname ?? null }}"
                                    type="file" id="image" />
                                @if ($errors->has('image'))
                                    <div class="text-danger" role="alert">{{ $errors->first('image') }}
                                    </div>
                                @endif
                                @if ($errors->has('image.*'))
                                    <div class="text-danger" role="alert">{{ $errors->first('image.*') }}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group row justify-content-between m-2">
                                <input type="submit" value="Submit" class="btn btn-primary mt-2 float-left">
                                <a href="{{ route('backend.gallery.media.index', $gallery->id) }}"
                                    class="btn btn-info mt-2 float-right">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')

@endsection
