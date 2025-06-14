@extends('backend.layouts.app')
@section('title', 'Gallery')
@section('content')
    <div class="row layout-top-spacing pspacing">
        <div id="tableDropdown" class="col-lg-12 col-12 layout-spacing">

            <div class="statbox widget box box-shadow my-1">
                <div class="widget-header">
                    <div class="row justify-content-between align-items-center cm-p">
                        <div class="col-lg-6 col-md-6 col-sm-6 mt-2">
                            <legend class="h4">
                                Galleries
                            </legend>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 mb-2 d-flex justify-content-end align-it mt-2">
                            <nav class="breadcrumb-two" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a
                                            href="javascript:void(0);">Galleries</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-sm-12 mt-2 mb-2">
                            <form class="form-inline row app_form px-4" action="{{ route('backend.gallery.index') }}"
                                method="GET">
                                <input class="form-control form-control-sm app_form_input" type="text" placeholder="Name"
                                    name="q" value="{{ request('q') ?? '' }}" minlength="3" maxlength="40">
                                <input type="submit" value="Search"
                                    class="btn btn-success  mx-3  search_btn  search_btn_size mTop">
                            </form>
                            @if ($errors->has('q'))
                                <div class="text-danger" role="alert">{{ $errors->first('q') }}
                                </div>
                            @endif
                        </div>
                        <div class="align-items-center col-lg-5 col-md-5 col-sm-12 d-flex justify-content-end row">
                            <a href="{{ route('backend.gallery.create') }}" name="txt"
                                class="btn btn-primary mt-2 mb-2">
                                Add Gallery
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="statbox widget box box-shadow my-3">
                <div class="statbox box box-shadow">
                    <div class="widget-content widget-content-area">
                        <div class="table-responsive min-height-20em">
                            <table class="table table-bordered mb-4">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($galleries as $gallery)
                                        <tr>
                                            <td>{{ tableRowSrNo($loop->index, $galleries) }}</td>
                                            <td>{{ $gallery->title }}</td>
                                            <td class="text-center">
                                                <div class="dropdown custom-dropdown">
                                                    <a class="dropdown-toggle" href="#" role="button"
                                                        id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-more-horizontal">
                                                            <circle cx="12" cy="12" r="1"></circle>
                                                            <circle cx="19" cy="12" r="1"></circle>
                                                            <circle cx="5" cy="12" r="1"></circle>
                                                        </svg>
                                                    </a>

                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                                        <a class="dropdown-item"
                                                            href="{{ route('backend.gallery.media.index', $gallery->id) }}">Media</a>
                                                        <a class="dropdown-item"
                                                            href="{{ route('backend.gallery.edit', $gallery->id) }}">Edit</a>
                                                        <a class="dropdown-item"
                                                            href="{{ route('backend.gallery.destroy', $gallery->id) }}"
                                                            onclick="return confirm('Are you sure, you want to delete.')">Delete</a>
                                                    </div>
                                                </div>

                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3" style="text-align : center">No Gallery Found</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="pagination col-lg-12">
                            <div class="col-md-12 text-center align-self-center">
                                <ul class="pagination text-center">
                                    {{ $galleries->appends(Request::all())->links('pagination::bootstrap-4') }}
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        @endsection
        @section('js')

        @endsection
