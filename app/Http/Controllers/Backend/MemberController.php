<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use phpDocumentor\Reflection\Utils;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::user()->can('member.all')){
            abort(403,'Unauthorized Action');
        }
        $data['members'] = User::all();
        return view('backend.member.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Auth::user()->can('member.create')){
            abort(403,'Unauthorized Action');
        }
        return view('backend.member.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
        if (!Auth::user()->can('member.create')){
            abort(403,'Unauthorized Action');
        }
        $request->validate([
            'name' => ['required','min:3','max:40'], //'regex:/^[a-zA-Z\s]+$/',
            'email' => ['nullable', 'unique:users'],
            'phone' => ['required','numeric', 'unique:users'],
            'country' => ['required'],
            'password' => ['required', 'confirmed', 'min:6'],
            'profile_photo_path' => ['nullable', 'mimes:jpg,jpeg,png,gif','max:512','dimensions:width=635,height=960']
        ], [
            'name.required' => 'Name is required',
            'name.regex' => 'Name Must be letter',
            'email.required' => 'Email is required',
            'phone.required' => 'Phone is required',
            'password.required' => 'Password is required',
            'photo.dimensions' => 'Width and Height Must be :width px X :height px',
        ]);

        $data['name'] = ucwords($request->name);
        $data['batch_name'] = ucwords($request->batch_name);
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
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;

        $data['status'] = User::STATUS_ACTIVE;
        $data['password'] = bcrypt($request->name);

        // profile photo
        if ($request->hasFile('profile_photo_path')) {
            $file = $request->file('profile_photo_path');
            $path = 'backend/img/users';
            $file_name = 'user_' .uniqid(). rand(000000, 999999) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path($path), $file_name);
            $data['profile_photo_path'] = $path . '/' . $file_name;
        }

        $user = User::create($data);

        $user->assignRole('guest');

        //assignRole
        session()->flash('success', 'User Create to Successfully Completed ');
        return redirect()->route('member.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!Auth::user()->can('member.show')){
            abort(403,'Unauthorized Action');
        }
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!Auth::user()->can('member.update')){
            abort(403,'Unauthorized Action');
        }
        $data['member'] = User::findOrFail($id);
        return view('backend.member.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
//        dd($request->all());
        if (!Auth::user()->can('member.update')){
            abort(403,'Unauthorized Action');
        }
        $request->validate([
            'name' => ['required','min:3','max:40'], //'regex:/^[a-zA-Z\s]+$/',
            'country' => ['required'],
            'password' => ['confirmed'],
            'status' => ['required', Rule::in(User::STATUS_ACTIVE, User::STATUS_INACTIVE)],
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

        session()->flash('success', 'Member Updated Successfully to Completed ');
        return redirect()->route('member.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Auth::user()->can('member.delete')){
            abort(403,'Unauthorized Action');
        }
        $delete_id = User::findOrFail($id);
        $delete_id->delete();
        session()->flash('success', 'Member Updated Successfully to Completed ');
        return redirect()->route('member.index');
    }
}
