@extends('backend.layouts.master')
@section('title','Post Create')
{{--menu--}}
@section('post','side-menu--active')
@section('subOpenPost','menu__sub-open')
@section('postCreate','side-menu--active')
{{--title header--}}
@section('link','Post')
@section('subLink','Create')

@section('extraVendorCSS')
@endsection

@section('mainContent')
    @include('backend.layouts._alert')

    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Add New Post
        </h2>
    </div>
    <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="pos intro-y grid grid-cols-12 gap-5 mt-5">
        <!-- BEGIN: Post Content -->
        <div class="intro-y col-span-12 lg:col-span-8">
            <input type="text" name="title" value="{{ old('title') }}" class="intro-y input input--lg w-full box pr-10 placeholder-theme-13" placeholder="Title">
            @error('title')
            <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
            @enderror
            <div class="post intro-y overflow-hidden box mt-5">

                <div class="post__content tab-content">
                    <div class="tab-content__pane p-5 active" id="content">
                        <div class="border border-gray-200 rounded-md p-5">
                            <div class="mt-5">
                                <textarea name="description" data-feature="all" class="summernote" data-height="250" name="editor">{{ old('description') }}</textarea>
                            </div>
                            @error('description')
                            <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="border border-gray-200 rounded-md p-5 mt-5">
                            <div class="mt-5">
                                <div class="mt-3">
                                    <label>Upload Image</label>
                                    <div class="border-2 border-dashed rounded-md mt-3 pt-4">
                                        <div class="px-4 pb-4 flex items-center cursor-pointer relative">
                                            <i data-feather="image" class="w-4 h-4 mr-2"></i> <span class="text-theme-1 mr-1">Upload a file</span> or drag and drop
                                            <input type="file" name="photo" class="w-full h-full top-0 left-0 absolute opacity-0">
                                        </div>
                                        @error('photo')
                                        <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Post Content -->
        <!-- BEGIN: Post Info -->
        <div class="col-span-12 lg:col-span-4">
            <div class="intro-y box p-5">
                <div class="mt-3">
                    <label>Post Date</label>
{{--                    <input data-timepicker="true" name="date" class="datepicker input w-full border mt-2">--}}
                    <input name="date" class="datepicker input w-56 border block mx-auto">
                </div>
                @error('date')
                <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                @enderror
                <div class="mt-3">
                    <label>Post Category</label>
                    <div class="mt-2">
{{--                        <select data-placeholder="Select categories" class="select2 w-full" multiple name="category_id">--}}
                        <select data-placeholder="Select categories" class="select2 w-full" name="category_id">
                            @if(old('category'))
                                <option @if(old('category')) selected @endif value="{{ old('category') }}">{{ ucwords(old('category')) }}</option>
                            @else
                                <option value="">--Choose--</option>
                            @endif
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ ucfirst($category->title) }}</option>
                                @endforeach
                        </select>
                        @error('category_id')
                        <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mt-3">
                    <label>Published</label>
                    <div class="mt-2">
                        <input name="status" class="input input--switch border" type="checkbox">
                    </div>
                    @error('status')
                    <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
                <button type="submit" class="button w-50 justify-center block bg-theme-1 text-white ml-2">Add Post</button>
                <br><br>
            </div>
        </div>
        <!-- END: Post Info -->
    </div>
    </form>
@endsection

@section('extraVendorJs')

@endsection


