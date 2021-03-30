@extends('backend.layouts.master')
@section('title','User Edit')
@section('users','side-menu--active')
@section('subOpen','menu__sub-open')
@section('usersCreate','side-menu--active')
@section('link','User')
@section('subLink','Edit')

@section('extraVendorCSS')
@endsection

@include('backend.layouts._alert')

@section('mainContent')
    <div class="intro-y inbox box mt-5">
        <form action="{{ route('users.update',$user->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="p-5" id="vertical-form">
                <div class="preview">
                    <div>
                        <label>User Name</label>
                        <input type="text" name="name" value="{{ old('name',isset($user->name)?$user->name:null) }}" class="input w-full border mt-2" placeholder="Name Please">
                    </div>
                    @error('name')
                    <div class="text-danger mb-3">{{ $message }}</div>
                    @enderror

                    <div class="mt-3">
                        <label>Email</label>
                        <input type="email" name="email" value="{{ old('email',isset($user->email)?$user->email:null) }}" class="input w-full border mt-2" placeholder="email">
                    </div>
                    @error('email')
                    <div class="text-danger mb-3">{{ $message }}</div>
                    @enderror
                    <div class="mt-3">
                        <label>Password</label>
                        <input type="password" name="password" class="input w-full border mt-2" placeholder="***">
                    </div>
                    @error('password')
                    <div class="text-danger mb-3">{{ $message }}</div>
                    @enderror
                    <div class="mt-3">
                        <label>Confirm Password</label>
                        <input type="password" name="password_confirmation" class="input w-full border mt-2" placeholder="***">
                    </div>
                    <div class="mt-3" id="multi-select">
                        <label>User Role</label>
                        <select name="roles[]" data-placeholder="Select your favorite actors" class="select2 w-full" multiple>
                            @foreach($roles as $role)
                                <option value="{{ $role->name }}" {{ $user->hasRole($role->name)? 'selected':'' }}>{{ ucwords($role->name) }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="button bg-theme-1 text-white mt-5">Add</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('extraVendorJs')
@endsection
