@extends('backend.layouts.master')
@section('title','Team Edit')
{{--menu--}}
@section('team','side-menu--active')
@section('subOpen','menu__sub-open')
@section('teamCreate','side-menu--active')
{{--title header--}}
@section('link','Team')
@section('subLink','Edit')

@section('extraVendorCSS')
@endsection



@section('mainContent')
    @include('backend.layouts._alert')
    <div class="intro-y inbox box mt-5">
        <form action="{{ route('team.update',$team->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="p-5" id="vertical-form">
                <div class="preview">
                    <div>
                        <label>Name</label>
                        <input type="text" name="title" value="{{ old('title',isset($team->title)?$team->title:null) }}"class="input w-full border mt-2" placeholder="Name" required>
                    </div>
                    @error('title')
                    <div class="text-danger mb-3  text-theme-6">{{ $message }}</div>
                    @enderror

                    <div>
                        <label>Photo Title</label>
                        <input type="text" name="img_title" value="{{ old('img_title',isset($team->img_title)?$team->img_title:null) }}"class="input w-full border mt-2" placeholder="Designation" required>
                    </div>
                    @error('img_title')
                    <div class="text-danger mb-3  text-theme-6">{{ $message }}</div>
                    @enderror

                    <div>
                        <label>Position</label>
                        <input type="number" name="position" value="{{ old('position',isset($team->position)?$team->position:null) }}"class="input w-full border mt-2" placeholder="Testimonial Position" required>
                    </div>
                    @error('position')
                    <div class="text-danger mb-3  text-theme-6">{{ $message }}</div>
                    @enderror

                    <div>
                        <label>Status</label>
                        <select class="input w-full border flex-1" name="status">
                            @if(old('status'))
                                <option @if(old('status')) selected @endif>{{ ucwords(old('status')) }}</option>
                            @else
                                <option value="{{ $team->status }}" selected>{{ ucwords($team->status) }}</option>
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
                    </div>
                    <img src="{{ asset($team->photo) }}" width="200px" height="200px">

                    <button type="submit" class="button bg-theme-1 text-white mt-5">Add</button>
                </div>
            </div>
        </form>
    </div>

@endsection

@section('extraVendorJs')
@endsection


