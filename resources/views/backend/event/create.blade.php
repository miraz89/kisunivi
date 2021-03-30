@extends('backend.layouts.master')
@section('title','Event Create')
{{--menu--}}
@section('event','side-menu--active')
@section('subOpen','menu__sub-open')
@section('eventCreate','side-menu--active')
{{--title header--}}
@section('link','Event')
@section('subLink','Create')

@section('extraVendorCSS')
@endsection



@section('mainContent')
    @include('backend.layouts._alert')
    <div class="intro-y inbox box mt-5">
        <form action="{{ route('event.store') }}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="p-5" id="vertical-form">
            <div class="preview">
                <div>
                    <label>Title</label>
                    <input type="text" name="title" value="{{ old('title') }}"class="input w-full border mt-2" placeholder="Name" required>
                </div>
                @error('title')
                <div class="text-danger mb-3">{{ $message }}</div>
                @enderror

                <div>
                    <label>Description</label>
                    <input type="text" name="description" value="{{ old('description') }}"class="input w-full border mt-2" placeholder="Designation" required>
                </div>
                @error('description')
                <div class="text-danger mb-3">{{ $message }}</div>
                @enderror

                <div>
                    <label>Position</label>
                    <input type="number" name="position" value="{{ old('position') }}"class="input w-full border mt-2" placeholder="Testimonial Position" required>
                </div>
                @error('position')
                <div class="text-danger mb-3">{{ $message }}</div>
                @enderror

                <div>
                    <label>Status</label>
                    <select class="input w-full border flex-1" name="status">
                        @if(old('status'))
                            <option @if(old('status')) selected @endif value="{{ old('status') }}">{{ ucwords(old('status')) }}</option>
                        @else
                            <option value="">--Choose--</option>
                        @endif
                        <option>Active</option>
                        <option>Inactive</option>
                    </select>
                </div>
                    @error('status')
                    <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                    @enderror

                <div class="mt-3">
                    <input name="photos[]" type="file" multiple />
                    <div class="dz-message" data-dz-message>
                        <div class="text-lg font-medium">Drop files here or click to upload.</div>
                    </div>
                </div>

                <button type="submit" class="button bg-theme-1 text-white mt-5">Add</button>
            </div>
        </div>
        </form>
    </div>

@endsection

@section('extraVendorJs')

@endsection


