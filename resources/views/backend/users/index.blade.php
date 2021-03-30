@extends('backend.layouts.master')
@section('title','User All')
@section('users','side-menu--active')
@section('subOpen','menu__sub-open')
@section('usersCreate','side-menu--active')
@section('link','User')
@section('subLink','All')

@section('extraVendorCSS')
@endsection

@include('backend.layouts._alert')

@section('mainContent')
    <h2 class="intro-y text-lg font-medium mt-10">
    Data List Layout
    </h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-no-wrap items-center mt-2">
            @canany(['user.create'])
                <a class="button text-white bg-theme-1 shadow-md mr-2" href="{{ route('users.create') }}">Add New User</a>
            @endcanany
        </div>
    </div>

    <!-- BEGIN: Datatable -->
    <div class="intro-y datatable-wrapper box p-5 mt-5">
        <table class="table table-report table-report--bordered display datatable w-full">
            <thead>
            <tr>
                <th class="border-b-2 whitespace-no-wrap">Photo</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Name</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Email</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Role</th>
                <th class="border-b-2 text-center whitespace-no-wrap">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $key => $user)
                <tr>
                    <td class="text-center border-b">
                        <div class="flex sm:justify-center">
                            <div class="intro-x w-10 h-10 image-fit">
                                <img alt="{{ $user->name }}" class="rounded-full" src="{{ asset($user->profile_photo_path) }}">
                            </div>
                        </div>
                    </td>
                    <td class="text-center border-b">{{ $user->name }}</td>
                    <td class="text-center border-b">{{ $user->email }}</td>
                    <td class="w-40 border-b">
                        @foreach($user->roles as $role)
                            {{--  to hide super admin role name from others--}}
                            @cannot(['role.show'])
                                @if($role->name == \App\Models\User::ROLE_SUPER_ADMIN)
                                    <span class="badge badge-info mr-2">
                                            Admin
                                            </span>
                                @else
                                    <span class="badge badge-info mr-2">
                                            {{ ucwords($role->name) }}
                                            </span>
                                @endif
                            @endcannot
                            {{--  generally sow for super admin --}}
                            @canany(['role.show'])
                                <span class="badge badge-info mr-2">
                                            {{ ucwords($role->name) }},
                                            </span>
                            @endcanany

                        @endforeach
                    </td>
                    <td class="border-b w-5">
                        <div class="flex sm:justify-center items-center">
                            @canany(['user.update'])
                                <a class="flex items-center mr-3" href="{{ route('users.edit',$user->id) }}"> <i data-feather="check-square" class="w-4 h-4 mr-1"></i> Edit </a>
                            @endcanany
                            @canany(['user.delete'])
                                <form action="{{ route('users.destroy',$user->id) }}"  method="post" style="display: inline">
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
