@extends('backend.layouts.master')
@section('title','All Team')
{{--menu--}}
@section('team','side-menu--active')
@section('subOpen','menu__sub-open')
@section('teamAll','side-menu--active')
{{--title header--}}
@section('link','Team')
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
{{--            @canany(['team.create'])--}}
                <a class="button text-white bg-theme-1 shadow-md mr-2" href="{{ route('team.create') }}">Add New User</a>
{{--                @endcanany--}}
        </div>
    </div>
    <!-- BEGIN: Datatable -->
    <div class="intro-y datatable-wrapper box p-5 mt-5">
        <table class="table table-report table-report--bordered display datatable w-full">
            <thead>
            <tr>
                <th class="border-b-2 whitespace-no-wrap">Title</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Photo</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Photo Title</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Position</th>
                <th class="border-b-2 text-center whitespace-no-wrap">STATUS</th>
                <th class="border-b-2 text-center whitespace-no-wrap">ACTIONS</th>
            </tr>
            </thead>
            <tbody>
            @foreach($teams as $key => $team)
             <tr>
                <td class="border-b">
                    <div class="font-medium whitespace-no-wrap">{{ $team->title }}</div>
                </td>
                <td class="text-center border-b">
                    <div class="flex sm:justify-center">
                        <div class="intro-x w-10 h-10 image-fit">
                            <img alt="{{ $team->name }}" class="rounded-full" src="{{ $team->photo }}">
                        </div>
                    </div>
                </td>
                <td class="text-center border-b">{{ $team->img_title }}</td>
                <td class="text-center border-b">{{ $team->position }}</td>
                <td class="w-40 border-b">
                    @if($team->status == 'Active')
                        <div class="flex items-center sm:justify-center text-theme-9"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Active </div>
                    @else
                        <div class="flex items-center sm:justify-center text-theme-6"> <i data-feather="check-square" class="w-4 h-4 mr-2"></i> Inactive </div>
                    @endif
                </td>
                <td class="border-b w-5">
                    <div class="flex sm:justify-center items-center">
                        @canany(['team.update'])
                          <a class="flex items-center mr-3" href="{{ route('team.edit',$team->id) }}"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                        @endcanany
                        @canany(['team.delete'])
                        <form action="{{ route('team.destroy',$team->id) }}"  method="post" style="display: inline">
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
