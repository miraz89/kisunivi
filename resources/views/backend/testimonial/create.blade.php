@extends('backend.layouts.master')
@section('title','Testimonial Create')
{{--menu--}}
@section('testimonial','side-menu--active')
@section('subOpen','menu__sub-open')
@section('testimonialCreate','side-menu--active')
{{--title header--}}
@section('link','Testimonial')
@section('subLink','Create')

@section('extraVendorCSS')
@endsection



@section('mainContent')
    @include('backend.layouts._alert')
    <div class="intro-y inbox box mt-5">
        <form action="{{ route('testimonial.store') }}" method="post" enctype="multipart/form-data">
            @csrf
          <div class="p-5" id="vertical-form">
            <div class="preview">
                <div>
                    <label>Name</label>
                    <input type="text" name="name" value="{{ old('name') }}"class="input w-full border mt-2" placeholder="Name" required>
                </div>
                @error('name')
                <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                @enderror

                <div>
                    <label>Designation</label>
                    <input type="text" name="designation" value="{{ old('designation') }}"class="input w-full border mt-2" placeholder="Designation" required>
                </div>
                @error('designation')
                <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                @enderror

                <div>
                    <label>Company Name</label>
                    <input type="text" name="company" value="{{ old('company') }}"class="input w-full border mt-2" placeholder="Company/Office Name" required>
                </div>
                @error('company')
                <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                @enderror
                <div>
                    <label>Address</label>
                    <input type="text" name="address" value="{{ old('address') }}"class="input w-full border mt-2" placeholder="Company/Office Address">
                </div>
                @error('address')
                <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                @enderror

                <div class="mt-3">
                    <label class="flex flex-col sm:flex-row"> Details <span class="sm:ml-auto mt-1 sm:mt-0 text-xs text-gray-600">Required, at least 10 characters</span> </label>
                    <textarea class="input w-full border mt-3" name="details" placeholder="Type your details" minlength="10" required>{{ old('details') }}</textarea>
                </div>
                @error('details')
                <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                @enderror

                <div>
                    <label>Position</label>
                    <input type="number" name="position" value="{{ old('position') }}"class="input w-full border mt-2" placeholder="Testimonial Position" required>
                </div>
                @error('position')
                <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                @enderror

                <div>
                    <label>Status</label>
                    <select class="input w-full border flex-1" name="status">
                        @if(old('status'))
                            <option @if(old('status')) selected @endif value="{{ old('status') }}">{{ ucwords(old('status')) }}</option>
                        @else
                            <option value="">--Choose--</option>
                        @endif
                        <option value="{{ \App\Models\User::STATUS_ACTIVE }}">{{ \App\Models\User::STATUS_ACTIVE }}</option>
                        <option value="{{ \App\Models\User::STATUS_INACTIVE }}">{{ \App\Models\User::STATUS_INACTIVE }}</option>
                    </select>
                    @error('status')
                    <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                    @enderror
                </div>


                <div class="mt-3">
                    <input name="photo" type="file" multiple />
                    <div class="dz-message" data-dz-message>
                        <div class="text-lg font-medium">Drop files here or click to upload.</div>
                    </div>
                    @error('photo')
                    <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="button bg-theme-1 text-white mt-5">Add Testimonial</button>
            </div>
        </div>
        </form>
    </div>

@endsection

@section('extraVendorJs')

@endsection


