@extends('backend.layouts.master')
@section('title','All Event')
{{--menu--}}
@section('event','side-menu--active')
@section('subOpen','menu__sub-open')
@section('eventAll','side-menu--active')
{{--title header--}}
@section('link','Event')
@section('subLink','All')

@section('extraVendorCSS')
@endsection



@section('mainContent')
    @include('backend.layouts._alert')

    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Datatable
        </h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            @canany(['event.create'])
                <a class="button text-white bg-theme-1 shadow-md mr-2" href="{{ route('event.create') }}">Add New Event</a>
            @endcanany
        </div>
    </div>
    <!-- BEGIN: Datatable -->
    <div class="intro-y datatable-wrapper box p-5 mt-5">
        <table class="table table-report table-report--bordered display datatable w-full">
            <thead>
            <tr>
                <th class="border-b-2 whitespace-no-wrap">Title</th>
                <th class="border-b-2 whitespace-no-wrap">Photo</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Description</th>
                <th class="border-b-2 text-center whitespace-no-wrap">STATUS</th>
                <th class="border-b-2 text-center whitespace-no-wrap">ACTIONS</th>
            </tr>
            </thead>
            <tbody>
            @foreach($events as $key => $event)
             <tr>
                <td class="border-b">
                    <div class="font-medium whitespace-no-wrap">{{ $event->title }}</div>
                </td>
                 <td class="text-center border-b">
                     <div class="flex sm:justify-center">
                         @php

                         $photos = \App\Models\Gallery::where('event_id',$event->id)->get();
                         foreach($photos as $photo){
                         @endphp
                             <div class="intro-x w-10 h-10 image-fit">
                                 <img alt="{{ $photo->name }}" class="rounded-full" src="{{ $photo->photo }}">
                             </div>
                         @php
                           }
                         @endphp
                     </div>
                 </td>
                <td class="text-center border-b">{!! $event->description !!}</td>
                <td class="w-40 border-b">
                    @if($event->status == 'Active')
                        <div class="flex items-center sm:justify-center text-theme-9"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                    @else
                        <div class="flex items-center sm:justify-center text-theme-6"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Inactive </div>
                    @endif
                </td>
                <td class="border-b w-5">
                    <div class="flex sm:justify-center items-center">
                        @canany(['event.update'])
                          <a class="flex items-center mr-3" href="{{ route('event.edit',$event->id) }}"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                        @endcanany
                        @canany(['event.update'])
                        <form action="{{ route('event.destroy',$event->id) }}" id="delete-form-{{ $event->id }}" method="post" style="display: inline">
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
