<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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

        $request->validate([
            'name' => ['required','min:3','max:40'], //'regex:/^[a-zA-Z\s]+$/',
            'email' => ['nullable', 'unique:users'],
            'batch_name' => ['required'], //'regex:/^[a-zA-Z\s]+$/',
            'country' => ['required'],
            'nationality' => ['required'],
            'phone' => ['required','numeric', 'unique:users'],
            'occupation' => ['required'],
            'password' => ['required', 'confirmed', 'min:6']
        ]);
//        dd($request->all());
        $data['name'] = ucwords($request->name);
        $data['email'] = $request->email;
        $data['batch_name'] = ucwords($request->batch_name);
        $data['country'] = ucwords($request->country);
        $data['nationality'] = ucwords($request->nationality);
        $data['phone'] = $request->phone;
        $data['occupation'] = $request->occupation;
        $data['password'] = bcrypt($request->password);
//        dd($data);

        $user = User::create($data);

        $user->assignRole('guest');

        //assignRole
        session()->flash('success', 'User Create Successfully to Completed ');
        return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
