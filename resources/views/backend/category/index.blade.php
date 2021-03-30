@extends('backend.layouts.master')
@section('title','All Category')
{{--menu--}}
@section('post','side-menu--active')
@section('subOpenCategory','menu__sub-open')
@section('categoryAll','side-menu--active')
{{--title header--}}
@section('link','Category')
@section('subLink','All Categories')

@section('extraVendorCSS')
@endsection

@section('mainContent')
    @include('backend.layouts._alert')
<div class="intro-y inbox box mt-5">
        <div class="px-5 sm:px-5 mt-5 pt-5 border-t border-gray-200">
        <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
            @csrf
              <div class="grid grid-cols-12 gap-4 row-gap-5 mt-5">
                    <div class="intro-y col-span-12 sm:col-span-9">
                        <div class="mb-2">Category Name</div>
                        <input type="text" name="title" value="{{ old('title') }}" class="input w-full border mt-2" placeholder="Category Title" required>
                        @error('title')
                        <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                        @enderror
                    </div>

                  <div class="intro-y col-span-12 sm:col-span-3">
                      <div class="mb-2 mt-2" >Status</div>
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

                <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
                    <button type="submit" class="button w-50 justify-center block bg-theme-1 text-white ml-2">Add Category</button>
                    <br><br>
                </div>
            </div>

            </form>
        </div>
    </div>


        <!-- END: Data List -->
    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            All Category
        </h2>

    </div>
    <!-- BEGIN: Datatable -->
    <div class="intro-y datatable-wrapper box p-5 mt-5">
        <table class="table table-report table-report--bordered display datatable w-full">
            <thead>
            <tr>
                <th class="border-b-2 whitespace-no-wrap">SL</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Category Name</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Slug</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Status</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $key => $category)
                <tr>
                    <td class="border-b">
                        <div class="font-medium whitespace-no-wrap">{{ $key+1 }}</div>
                    </td>

                    <td class="text-center border-b">{{ $category->title }}</td>
                    <td class="text-center border-b">{{ $category->slug }}</td>
                    <td class="w-40 border-b">
                        @if($category->status == \App\Models\User::STATUS_ACTIVE)
                            <div class="flex items-center sm:justify-center text-theme-9"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                        @else
                            <div class="flex items-center sm:justify-center text-theme-6"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Inactive </div>
                        @endif
                    </td>
                    <td class="border-b w-5">
                        <div class="flex sm:justify-center items-center">
                            @canany(['category.update'])
                            <a class="flex items-center mr-3" href="{{ route('category.edit',$category->id) }}"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                            @endcanany
                            @canany(['category.delete'])
                            <form action="{{ route('category.destroy',$category->id) }}"  method="post" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button class="flex items-center text-theme-6" type="submit" title="Click for Delete" onclick="return confirm('Are you sure?')"><i data-feather="check-square" class="w-4 h-4 mr-2"></i>Delete</button>
                            </form>
                            @endcanany
                        </div>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
    <!-- END: Datatable -->

@endsection

@section('extraVendorJs')

@endsection
