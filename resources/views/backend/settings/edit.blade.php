@extends('backend.layouts.master')
@section('title','Settings')
{{--menu--}}
@section('settings','side-menu--active')
@section('subOpen','menu__sub-open')
@section('settingsCreate','side-menu--active')
{{--title header--}}
@section('link','Settings')
@section('subLink','All')

@section('extraVendorCSS')
@endsection



@section('mainContent')
    @include('backend.layouts._alert')
    <div class="intro-y inbox box mt-5">
        <form action="{{ route('settings.update',$settings->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="p-5" id="vertical-form">
                <div class="preview">
                    <div>
                        <label>Title</label>
                        <input type="text" name="title" value="{{ old('title',isset($settings->title)?$settings->title:null) }}"class="input w-full border mt-2">
                    </div>
                    @error('title')
                    <div class="text-danger mb-3">{{ $message }}</div>
                    @enderror


                    <div class="mt-3">
                        <input name="logo" type="file" multiple />
                        <div class="dz-message" data-dz-message>
                            <div class="text-lg font-medium">Drop files here or click to upload.</div>
                        </div>
                        @error('logo')
                        <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                        @enderror
                    </div>
                    <img src="{{ asset($settings->logo) }}" width="200px">

                    <div class="mt-3">
                        <input name="favicon" type="file" multiple />
                        <div class="dz-message" data-dz-message>
                            <div class="text-lg font-medium">Drop files here or click to upload.</div>
                        </div>
                        @error('favicon')
                        <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                        @enderror
                    </div>
                    <img src="{{ asset($settings->favicon) }}" width="200px">

                    <button type="submit" class="button bg-theme-1 text-white mt-5">Update</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('extraVendorJs')

@endsection
