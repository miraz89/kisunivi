<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::user()->can('guest.all')){
            abort(403,'Unauthorized Action');
        }
//        $active = User::where('id', auth()->user()->id)
//            ->where('status',User::STATUS_ACTIVE)->count();
//        if($active > 0)
//        {
//        dd(auth()->user()->id);
            $data['profile'] = User::where('id', auth()->user()->id)
//                ->where('status', User::STATUS_ACTIVE)
                ->first();
//        dd($data);

            return view('backend.profile.index', $data);
//        }
//        else{
//            return redirect()->route('login');
//        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

//        dd($request->all());
        if (!Auth::user()->can('guest.update')){
            abort(403,'Unauthorized Action');
        }
        $request->validate([
            'name' => ['required','min:3','max:40'], //'regex:/^[a-zA-Z\s]+$/',
            'country' => ['required'],
            'password' => ['confirmed'],

            'profile_photo_path' => ['nullable', 'mimes:jpg,jpeg,png,gif','max:512','dimensions:width=635,height=960']
        ], [
            'name.required' => 'Name is required',
            'phone.required' => 'Phone is required',
            'password.required' => 'Password is required',
            'photo.dimensions' => 'Width and Height Must be :width px X :height px',
        ]);
//        dd($request->all());
        $data['name'] = ucwords($request->name);
        $data['batch_name'] = $request->batch_name;
        $data['company_name'] = ucwords($request->company_name);
        $data['position'] = ucwords($request->position);
        $data['no_of_employee'] = ucwords($request->no_of_employee);
        $data['blood'] = ucwords($request->blood);
        $data['blood_donner'] = ucwords($request->blood_donner);
        $data['gender'] = ucwords($request->gender);
        $data['about_you'] = ucwords($request->about_you);
        $data['about_your_business'] = ucwords($request->about_your_business);
        $data['address'] = ucwords($request->address);
        $data['country'] = ucwords($request->country);
        $data['nationality'] = ucwords($request->nationality);
        $data['facebook'] = ucwords($request->facebook);

        $check = User::where('id', $id)->first();

        if($check->phone != $request->phone){
            $data['phone'] = $request->phone;
        }
        if($check->email != $request->email){
            $data['email'] = $request->email;
        }

        $data['status'] = $request->status;

        if (!empty($request->password)){
            $data['password'] = bcrypt($request->password);
        }

        // profile photo
        if ($request->hasFile('profile_photo_path')) {
            $file = $request->file('profile_photo_path');
            $path = 'backend/img/users';
            $file_name = 'user_' .uniqid(). rand(000000, 999999) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path($path), $file_name);
            $data['profile_photo_path'] = $path . '/' . $file_name;
        }
//        dd($data);

        DB::table('users')
            ->where('id', $id)
            ->update($data);

        session()->flash('success', 'Your Profile/ Personal Information Updated Successfully to Completed ');
        return redirect()->route('profile.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
