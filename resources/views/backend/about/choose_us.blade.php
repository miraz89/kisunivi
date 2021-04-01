@extends('backend.layouts.master')
@section('title','Choose Us Edit')
{{--menu--}}
@section('about','side-menu--active')
@section('subOpen','menu__sub-open')
@section('choose_us','side-menu--active')
{{--title header--}}
@section('link','About')
@section('subLink','Choose Us Edit')

@section('extraVendorCSS')
@endsection



@section('mainContent')
    @include('backend.layouts._alert')
    <div class="intro-y inbox box mt-5">
        <form action="{{ route('choose_us.update',$about->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="p-5" id="vertical-form">
                <div class="preview">
                    <div>
                        <label>Title</label>
                        <input type="text" name="title" value="{{ old('title',isset($about->title)?$about->title:null) }}"class="input w-full border mt-2">
                    </div>
                    @error('title')
                    <div class="text-danger mb-3">{{ $message }}</div>
                    @enderror

                    <div class="mt-3">
                        <label class="flex flex-col sm:flex-row"> Description <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Required, at least 10 characters</span> </label>
{{--                        <textarea class="input w-full border mt-3" name="description" placeholder="Type your details" minlength="10" required>{{ old('description',isset($about->description)?$about->description:null) }}</textarea>--}}
                        <textarea name="description" data-feature="all" class="summernote" required> {!! old('description',isset($about->description)?$about->description:null) !!}</textarea>
                    </div>
                    @error('description')
                    <div class="text-danger mb-3">{{ $message }}</div>
                    @enderror

                    <div class="mt-3">
                        <label>Button Text</label>
                        <input type="text" name="button_text" value="{{ old('button_text',isset($about->button_text)?$about->button_text:null) }}" class="input w-full border mt-2">
                    </div>
                    @error('button_text')
                    <div class="text-danger mb-3">{{ $message }}</div>
                    @enderror

                    <div class="mt-3">
                        <label>Page Link</label>
                        <input type="text" name="link" value="{{ old('link',isset($about->link)?$about->link:null) }}" class="input w-full border mt-2">
                    </div>
                    @error('link')
                    <div class="text-danger mb-3">{{ $message }}</div>
                    @enderror


                    <div class="mt-3">
                        <input name="photo" type="file" multiple />
                        <div class="dz-message" data-dz-message>
                            <div class="text-lg font-medium">Drop files here or click to upload.</div>
                        </div>
                        @error('photo')
                        <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                        @enderror
                    </div>
                    <img src="{{ asset($about->photo) }}" width="200px">

                    <button type="submit" class="button bg-theme-1 text-white mt-5">Update</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('extraVendorJs')

@endsection
