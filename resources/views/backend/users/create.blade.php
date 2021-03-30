@extends('backend.layouts.master')
@section('title','User Create')
@section('users','side-menu--active')
@section('subOpen','menu__sub-open')
@section('usersCreate','side-menu--active')
@section('link','User')
@section('subLink','Create')

@section('extraVendorCSS')
@endsection

@include('backend.layouts._alert')

@section('mainContent')
    <div class="intro-y inbox box mt-5">
        <form action="{{ route('users.store') }}" method="post">
            @csrf
          <div class="p-5" id="vertical-form">
            <div class="preview">
                <div>
                    <label>User Name</label>
                    <input type="text" name="name" value="{{ old('name') }}"class="input w-full border mt-2" placeholder="Name Please">
                </div>
                @error('name')
                <div class="text-danger mb-3">{{ $message }}</div>
                @enderror

                <div class="mt-3">
                    <label>Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="input w-full border mt-2" placeholder="email">
                </div>
                @error('email')
                <div class="text-danger mb-3">{{ $message }}</div>
                @enderror
                <div class="mt-3">
                    <label>Password</label>
                    <input type="password" name="password" class="input w-full border mt-2" placeholder="secret">
                </div>
                @error('password')
                <div class="text-danger mb-3">{{ $message }}</div>
                @enderror
                <div class="mt-3">
                    <label>Confirm Password</label>
                    <input type="password" name="password_confirmation" class="input w-full border mt-2" placeholder="secret">
                </div>
                <div class="mt-3" id="multi-select">
                    <label>User Role</label>
                    <select name="roles[]" data-placeholder="Select your favorite actors" class="select2 w-full" multiple>
                        @foreach($roles as $role)
                            <option value="{{ $role->name }}">{{ ucwords($role->name) }}</option>
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


