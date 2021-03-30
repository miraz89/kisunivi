@extends('backend.layouts.master')
@section('title','Category Edit')
{{--menu--}}
@section('category','side-menu--active')
@section('subOpenCategory','menu__sub-open')
@section('categoryCreate','side-menu--active')
{{--title header--}}
@section('link','Category')
@section('subLink','Edit')

@section('extraVendorCSS')
@endsection



@section('mainContent')
    @include('backend.layouts._alert')
        <div class="intro-y inbox box mt-5">
        <div class="px-5 sm:px-5 mt-5 pt-5 border-t border-gray-200">
            <form action="{{ route('category.update',$category->id) }}" method="post" enctype="multipart/form-data">
                 @csrf
                @method('PUT')
        <div class="grid grid-cols-12 gap-4 row-gap-5 mt-5">
            <div class="intro-y col-span-12 sm:col-span-9">
                <div class="mb-2">Category Name</div>
                <input type="text" name="title" value="{{ old('title',isset($category->title)?$category->title:null) }}"class="input w-full border mt-2" placeholder="Category Title" required>
                @error('title')
                <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                @enderror
            </div>

            <div class="intro-y col-span-12 sm:col-span-3">
                <div class="mb-2 mt-2" >Status</div>
                <select class="input w-full border flex-1" name="status">
                    @if($category->status)
                        <option value="{{ old('status',isset($category->status)?ucfirst($category->status):null) }}" selected>{{ old('status',isset($category->status)?ucfirst($category->status):null) }}</option>
                    @else
                        <option value="" selected>Choose...</option>
                    @endif
                        <option value="{{ \App\Models\User::STATUS_ACTIVE }}">{{ \App\Models\User::STATUS_ACTIVE }}</option>
                        <option value="{{ \App\Models\User::STATUS_INACTIVE }}">{{ \App\Models\User::STATUS_INACTIVE }}</option>
                </select>
                @error('status')
                <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                @enderror
            </div>

            <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
                <button type="submit" class="button w-50 justify-center block bg-theme-1 text-white ml-2">Update Category</button>
                <br><br>
            </div>
        </div>

    </form>
</div>
</div>
@endsection

@section('extraVendorJs')

@endsection
