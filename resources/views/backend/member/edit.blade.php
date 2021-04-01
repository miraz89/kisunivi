@extends('backend.layouts.master')
@section('title','Create Member')
{{--menu--}}
@section('member','side-menu--active')
@section('subOpen','menu__sub-open')
@section('memberCreate','side-menu--active')
{{--title header--}}
@section('link','Member')
@section('subLink','Edit')

@section('extraVendorCSS')
@endsection

@section('mainContent')
    @include('backend.layouts._alert')
    <div class="intro-y inbox box mt-5">
        <div class="px-5 sm:px-5 mt-5 pt-5 border-t border-gray-200">
            <form action="{{ route('member.update',$member->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-12 gap-4 row-gap-5 mt-5">
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <div class="mb-2">Name</div>
                        <input type="text" name="name" value="{{ old('name',isset($member->name)?$member->name:null) }}"class="input w-full border mt-2" placeholder="Name" required>
                        @error('name')
                        <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <div class="mb-2">Batch Name</div>
                        <input type="text" name="batch_name" value="{{ old('batch_name',isset($member->batch_name)?$member->batch_name:null) }}"class="input w-full border mt-2" placeholder="Batch No" required>
                        @error('batch_name')
                        <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <div class="mb-2">Company Name <sup class="text-theme-6"> * If any</sup></div>
                        <input type="text" name="company_name" value="{{ old('company_name',isset($member->company_name)?$member->company_name:null) }}"class="input w-full border mt-2" placeholder="Company Name">
                        @error('company_name')
                        <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="intro-y col-span-12 sm:col-span-6">
                        <div class="mb-2 mt-2" >Position</div>
                        <select class="input w-full border flex-1" name="position">
                            @if(old('position'))
                                <option @if(old('position')) selected @endif>{{ ucwords(old('position')) }}</option>
                            @else
                                <option value="{{ $member->position }}" selected>{{ ucwords($member->position) }}</option>
                            @endif
                            <option>Director</option>
                            <option>Proprietor</option>
                            <option>Founder & CEO</option>
                            <option>Manager</option>
                            <option>Employee</option>
                            <option>Other</option>
                        </select>
                        @error('position')
                        <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="intro-y col-span-12 sm:col-span-6">
                        <div class="mb-2 mt-2" >Employee Id</div>
                        <input type="text" name="no_of_employee" value="{{ old('no_of_employee',isset($member->no_of_employee)?$member->no_of_employee:null) }}"class="input w-full border mt-2" placeholder="Employee Id">
                        @error('no_of_employee')
                        <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <div class="mb-2 mt-2" >Blood Group</div>
                        <select class="input w-full border flex-1" name="blood">
                            @if(old('blood'))
                                <option @if(old('blood')) selected @endif>{{ ucwords(old('blood')) }}</option>
                            @else
                                <option value="{{ $member->blood }}" selected>{{ ucwords($member->blood) }}</option>
                            @endif
                            <option>A+</option>
                            <option>A-</option>
                            <option>B+</option>
                            <option>B-</option>
                            <option>AB+</option>
                            <option>AB-</option>
                            <option>O+</option>
                            <option>O-</option>
                        </select>
                        @error('blood')
                        <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <div class="mb-2 mt-2" >Blood Doner</div>
                        <select class="input w-full border flex-1" name="blood_donner">
                            @if(old('blood_donner'))
                                <option @if(old('blood_donner')) selected @endif>{{ ucwords(old('blood_donner')) }}</option>
                            @else
                                <option value="{{ $member->blood_donner }}" selected>{{ ucwords($member->blood_donner) }}</option>
                            @endif
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                        @error('blood_donner')
                        <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <div class="mb-2 mt-2" >Gender</div>
                        <select class="input w-full border flex-1" name="gender">
                            @if(old('gender'))
                                <option @if(old('gender')) selected @endif>{{ ucwords(old('gender')) }}</option>
                            @else
                                <option value="{{ $member->gender }}" selected>{{ ucwords($member->gender) }}</option>
                            @endif
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                        @error('gender')
                        <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <div class="mb-2">About You <sup class="text-theme-6"> * If any</sup></div>
                        <input type="text" name="about_you" value="{{ old('about_you',isset($member->about_you)?$member->about_you:null) }}"class="input w-full border mt-2" placeholder="About Your Self">
                        @error('about_you')
                        <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <div class="mb-2">About Your Business <sup class="text-theme-6"> * If any</sup></div>
                        <input type="text" name="about_your_business" value="{{ old('about_your_business',isset($member->about_your_business)?$member->about_your_business:null) }}"class="input w-full border mt-2" placeholder="About Your Business">
                        @error('about_your_business')
                        <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="intro-y col-span-12 sm:col-span-6">
                        <div class="mb-2">Address <sup class="text-theme-6">**</sup></div>
                        <input type="text" name="address" value="{{ old('address',isset($member->address)?$member->address:null) }}"class="input w-full border mt-2" placeholder="Address">
                        @error('address')
                        <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <div class="mb-2">Country <sup class="text-theme-6"> **</sup></div>
                        <input type="text" name="country" value="{{ old('country',isset($member->country)?$member->country:null) }}"class="input w-full border mt-2" placeholder="Country Name" required>
                        @error('country')
                        <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <div class="mb-2">Nationality <sup class="text-theme-6"> **</sup></div>
                        <input type="text" name="nationality" value="{{ old('nationality',isset($member->nationality)?$member->nationality:null) }}"class="input w-full border mt-2" placeholder="Category Title" required>
                        @error('nationality')
                        <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <div class="mb-2">Phone Number <sup class="text-theme-6"> **</sup></div>
                        <input type="text" name="phone" value="{{ old('phone',isset($member->phone)?$member->phone:null) }}"class="input w-full border mt-2" placeholder="Phone Number" required>
                        @error('phone')
                        <div class="text-danger mb-9">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <div class="mb-2">Email Address <sup class="text-theme-6"> **</sup></div>
                        <input type="email" name="email" value="{{ old('email',isset($member->email)?$member->email:null) }}"class="input w-full border mt-2" placeholder="Email Address" required>
                        @error('email')
                        <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <div class="mb-2">Facebook Profile Link <sup class="text-theme-6"> **</sup></div>
                        <input type="url" name="facebook" value="{{ old('facebook',isset($member->facebook)?$member->facebook:null) }}"class="input w-full border mt-2" placeholder="Facebook Profile Link">
                        @error('facebook')
                        <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <div class="mb-2">Password <sup class="text-theme-6"> **</sup></div>
                        <input type="password" name="password" minlength="6" maxlength="20" class="input w-full border mt-2" placeholder="Password">
                        @error('password')
                        <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6">
                        <div class="mb-2">Confirm Password <sup class="text-theme-6"> **</sup></div>
                        <input type="password" name="password_confirmation" minlength="6" maxlength="20" class="input w-full border mt-2" placeholder="Password">
                        @error('password_confirmation')
                        <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="intro-y col-span-12 sm:col-span-12">
                        <div class="mb-2 mt-2" >Status</div>
                        <select class="input w-full border flex-1" name="status">
                            @if(old('status'))
                                <option @if(old('status')) selected @endif>{{ ucwords(old('status')) }}</option>
                            @else
                                <option value="{{ $member->status }}" selected>{{ ucwords($member->status) }}</option>
                            @endif
                            <option value="{{ \App\Models\User::STATUS_ACTIVE }}">{{ \App\Models\User::STATUS_ACTIVE }}</option>
                            <option value="{{ \App\Models\User::STATUS_INACTIVE }}">{{ \App\Models\User::STATUS_INACTIVE}} </option>
                        </select>
                        @error('status')
                        <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="intro-y col-span-12 sm:col-span-6 fallback"> <input name="profile_photo_path" type="file" />
                        <div class="dz-message" data-dz-message>
                            <div class="text-lg font-medium">Profile Picture.</div>
                        </div>
                        @error('profile_photo_path')
                        <div class="text-danger mb-3 text-theme-6">{{ $message }}</div>
                        @enderror
                        <img src="{{ asset($member->profile_photo_path) }}" width="200px" height="200px">
                    </div>


                    <div class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5">
                        <button  type="submit" class="button w-50 justify-center block bg-theme-1 text-white ml-2">Update</button>
                        <br><br>
                    </div>

                </div>

            </form>
        </div>
    </div>
@endsection

@section('extraVendorJs')
@endsection
