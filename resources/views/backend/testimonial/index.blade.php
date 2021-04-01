@extends('backend.layouts.master')
@section('title','All Testimonial')
{{--menu--}}
@section('testimonial','side-menu--active')
@section('subOpen','menu__sub-open')
@section('testimonialAll','side-menu--active')
{{--title header--}}
@section('link','Testimonial')
@section('subLink','All')

@section('extraVendorCSS')
@endsection



@section('mainContent')
    @include('backend.layouts._alert')

    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
        <h2 class="text-lg font-medium mr-auto">
            Testimonial
        </h2>
        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
            @canany(['testimonial.create'])
                <a class="button text-white bg-theme-1 shadow-md mr-2" href="{{ route('testimonial.create') }}">Add New Testimonial</a>
                @endcanany
        </div>
    </div>
    <!-- BEGIN: Datatable -->
    <div class="intro-y datatable-wrapper box p-5 mt-5">
        <table class="table table-report table-report--bordered display datatable w-full">
            <thead>
            <tr>
                <th class="border-b-2 whitespace-no-wrap">NAME and Details</th>
                <th class="border-b-2 text-center whitespace-no-wrap">IMAGES</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Description</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Position</th>
                <th class="border-b-2 text-center whitespace-no-wrap">STATUS</th>
                <th class="border-b-2 text-center whitespace-no-wrap">ACTIONS</th>
            </tr>
            </thead>
            <tbody>
            @foreach($testimonials as $key => $testimonial)
             <tr>
                <td class="border-b">
                    <div class="font-medium whitespace-no-wrap">{{ $testimonial->name }}</div>
                    <div class="text-gray-600 text-xs whitespace-no-wrap">{{ $testimonial->designation }}</div>
                    <div class="text-gray-600 text-xs whitespace-no-wrap">{{ $testimonial->address }}</div>
                </td>
                <td class="text-center border-b">
                    <div class="flex sm:justify-center">
                        <div class="intro-x w-10 h-10 image-fit">
                            <img alt="{{ $testimonial->name }}" class="rounded-full" src="{{ asset($testimonial->photo) }}">
                        </div>
                    </div>
                </td>
                <td class="text-center border-b">{{ $testimonial->details }}</td>
                <td class="text-center border-b">{{ $testimonial->position }}</td>
                <td class="w-40 border-b">
                    @if($testimonial->status == 'Active')
                        <div class="flex items-center sm:justify-center text-theme-9"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                    @else
                        <div class="flex items-center sm:justify-center text-theme-6"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Inactive </div>
                    @endif
                </td>
                <td class="border-b w-5">
                    <div class="flex sm:justify-center items-center">
                        @canany(['testimonial.update'])
                          <a class="flex items-center mr-3" href="{{ route('testimonial.edit',$testimonial->id) }}"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                        @endcanany
                        @canany(['testimonial.delete'])
                        <form action="{{ route('testimonial.destroy',$testimonial->id) }}" id="delete-form-{{ $testimonial->id }}" method="post" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <a class="flex items-center text-theme-6" href=""> <i data-feather="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.form-control-select2').select2();
        });
    </script>
@endsection
