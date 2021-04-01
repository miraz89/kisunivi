@extends('backend.layouts.master')
@section('title','Event Edit')
{{--menu--}}
@section('event','side-menu--active')
@section('subOpen','menu__sub-open')
@section('eventCreate','side-menu--active')
{{--title header--}}
@section('link','Event')
@section('subLink','Edit')

@section('extraVendorCSS')
@endsection



@section('mainContent')
    @include('backend.layouts._alert')
    <div class="intro-y inbox box mt-5">
        <form action="{{ route('event.update',$event->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="p-5" id="vertical-form">
                <div class="preview">
                    <div>
                        <label>Title</label>
                        <input type="text" name="title" value="{{ old('title',isset($event->title)?$event->title:null) }}"class="input w-full border mt-2" required>
                    </div>
                    @error('title')
                    <div class="text-danger mb-3">{{ $message }}</div>
                    @enderror

                    <div>
                        <label>Description</label>
{{--                        <input type="text" name="description" value="{{ old('description',isset($event->description)?$event->description:null) }}"class="input w-full border mt-2" required>--}}
                        <textarea name="description" data-feature="all" class="summernote" required>{{ old('description',isset($event->description)?$event->description:null) }}</textarea>
                    </div>
                    @error('description')
                    <div class="text-danger mb-3">{{ $message }}</div>
                    @enderror

                    <div>
                        <label>Position</label>
                        <input type="number" name="position" value="{{ old('position',isset($event->position)?$event->position:null) }}"class="input w-full border mt-2" required>
                    </div>
                    @error('position')
                    <div class="text-danger mb-3">{{ $message }}</div>
                    @enderror

                    <div>
                        <label>Status</label>
                        <select class="input w-full border flex-1" name="status">
                            @if(old('status'))
                                <option @if(old('status')) selected @endif>{{ ucwords(old('status')) }}</option>
                            @else
                                <option value="{{ $event->status }}" selected>{{ ucwords($event->status) }}</option>
                            @endif
                            <option>Active</option>
                            <option>Inactive</option>
                        </select>
                    </div>
                    @error('status')
                    <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                    @enderror


                    <button type="submit" class="button bg-theme-1 text-white mt-5">Update</button>
                </div>
            </div>
        </form>
    </div>

@endsection

@section('extraVendorJs')
@endsection


