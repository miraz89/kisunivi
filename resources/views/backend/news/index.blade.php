@extends('backend.layouts.master')
@section('title','All News')
{{--menu--}}
@section('news','side-menu--active')
@section('subOpenNews','menu__sub-open')
@section('newsAll','side-menu--active')
{{--title header--}}
@section('link','News')
@section('subLink','All News')

@section('extraVendorCSS')
@endsection

@section('mainContent')
    @include('backend.layouts._alert')

    <h2 class="intro-y text-lg font-medium mt-10">
    All News
    </h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-no-wrap items-center mt-2">
            @canany(['news.create'])
                <a class="button text-white bg-theme-1 shadow-md mr-2" href="{{ route('news.create') }}">Add News</a>
            @endcanany
        </div>
    </div>
    <!-- BEGIN: Datatable -->
    <div class="intro-y datatable-wrapper box p-5 mt-5">
        <table class="table table-report table-report--bordered display datatable w-full">
            <thead>
            <tr>
                <th class="border-b-2 whitespace-no-wrap">Title</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Photo</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Description</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Status</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($news as $key => $news)
                <tr>
                    <td class="border-b">
                        <div class="font-medium whitespace-no-wrap">{{ $news->title }}</div>
                    </td>
                    <td class="text-center border-b">
                        <div class="flex sm:justify-center">
                            <div class="intro-x w-10 h-10 image-fit">
                                <img alt="{{ $news->title }}" class="rounded-full" src="{{ asset($news->photo) }}">
                            </div>
                        </div>
                    </td>
                    <td class="text-center border-b">{!! substr($news->description,0,50) !!}...  </td>

                    <td class="w-40 border-b">
                        @if($news->status == \App\Models\User::STATUS_ACTIVE)
                            <div class="flex items-center sm:justify-center text-theme-9"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                        @else
                            <div class="flex items-center sm:justify-center text-theme-6"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Inactive </div>
                        @endif
                    </td>
                    <td class="border-b w-5">
                        <div class="flex sm:justify-center items-center">
                            @canany(['news.update'])
                                <a class="flex items-center mr-3" href="{{ route('news.edit',$news->id) }}"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                            @endcanany
                            @canany(['news.delete'])
                                <form action="{{ route('news.destroy',$news->id) }}"  method="post" style="display: inline">
                                    @csrf
                                    @method('DELETE')
                                    {{--                                <a class="flex items-center text-theme-6" href=""> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>--}}
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
