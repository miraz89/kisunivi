@extends('backend.layouts.master')
@section('title','Slider Edit')
{{--menu--}}
@section('slider','side-menu--active')
@section('subOpen','menu__sub-open')
@section('sliderCreate','side-menu--active')
{{--title header--}}
@section('link','Slider')
@section('subLink','Edit')

@section('extraVendorCSS')
@endsection



@section('mainContent')
    @include('backend.layouts._alert')
    <div class="intro-y inbox box mt-5">
        <form action="{{ route('slider.update',$slider->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="p-5" id="vertical-form">
                <div class="preview">
                    <div>
                        <label>Slider Title</label>
                        <input type="text" name="title" value="{{ old('title',isset($slider->title)?$slider->title:null) }}"class="input w-full border mt-2">
                    </div>
                    @error('title')
                    <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                    @enderror

                    <div class="mt-3">
                        <label class="flex flex-col sm:flex-row"> Description <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Required, at least 10 characters</span> </label>
                        <textarea name="description" data-feature="all" class="summernote" required> {!! old('description',isset($slider->description)?$slider->description:null) !!} </textarea></div>
                    @error('description')
                    <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                    @enderror

                    <div class="mt-3">
                        <label>Button Text</label>
                        <input type="text" name="button_text" value="{{ old('button_text',isset($slider->button_text)?$slider->button_text:null) }}" class="input w-full border mt-2">
                    </div>
                    @error('button_text')
                    <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                    @enderror

                    <div class="mt-3">
                        <label>Page Link</label>
                        <input type="text" name="link" value="{{ old('link',isset($slider->link)?$slider->link:null) }}" class="input w-full border mt-2">
                    </div>
                    @error('link')
                    <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                    @enderror

                    <div class="mt-3">
                        <label>Position</label>
                        <input type="number" name="position" value="{{ old('position',isset($slider->position)?$slider->position:null) }}" class="input w-full border mt-2">
                    </div>
                    @error('position')
                    <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                    @enderror

                    <div>
                        <label>Status</label>
                        <select class="input w-full border flex-1" name="status">
                            @if(old('status'))
                                <option @if(old('status')) selected @endif>{{ ucwords(old('status')) }}</option>
                            @else
                                <option value="{{ $slider->status }}" selected>{{ ucwords($slider->status) }}</option>
                            @endif
                            <option value="{{ \App\Models\User::STATUS_ACTIVE }}">{{ \App\Models\User::STATUS_ACTIVE }}</option>
                            <option value="{{ \App\Models\User::STATUS_INACTIVE }}">{{ \App\Models\User::STATUS_INACTIVE }}</option>
                        </select>
                    </div>
                    @error('status')
                    <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
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
                    <img src="{{ asset($slider->photo) }}" width="200px">

                    <button type="submit" class="button bg-theme-1 text-white mt-5">Update</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('extraVendorJs')

@endsection
