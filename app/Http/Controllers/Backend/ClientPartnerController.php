<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ClientPartner;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ClientPartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['clients'] = ClientPartner::all();
        return view('backend.client_partner.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.client_partner.create');
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
//            'title' => ['required', 'regex:/^[a-zA-Z\s]+$/', 'min:3', 'max:50'],
            'title' => ['required'],
            'position' => ['required', 'numeric', 'digits_between:1,2'],
            'status' => ['required', Rule::in(User::STATUS_ACTIVE, User::STATUS_INACTIVE)],
            'photo' => ['required', 'mimes:jpg,jpeg,png,gif','max:512','dimensions:width=635,height=960']

        ],[
            'photo.dimensions' => 'Width and Height Must be :width px X :height px',
        ]);
//        dd($request->all());

        $data['title'] = $request->title;
        $data['position'] = $request->position;
        $data['status'] = $request->status;

        // Photo
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $path = 'backend/img/client';
            $file_name = 'client-' .uniqid(). rand(0000, 9999) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path($path), $file_name);
            $data['photo'] = $path . '/' . $file_name;
        }
        ClientPartner::create($data);
        session()->flash('success', 'Successfully Slider Added');
        return redirect()->route('client.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClientPartner  $clientPartner
     * @return \Illuminate\Http\Response
     */
    public function show(ClientPartner $clientPartner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClientPartner  $clientPartner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['client'] = ClientPartner::findOrFail($id);
        return view('backend.client_partner.edit',$data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClientPartner  $clientPartner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClientPartner $client)
    {
        $request->validate([
//            'title' => ['required', 'regex:/^[a-zA-Z\s]+$/', 'min:3', 'max:50'],
            'title' => ['required'],
            'position' => ['required', 'numeric', 'digits_between:1,2'],
            'status' => ['required', Rule::in(User::STATUS_ACTIVE, User::STATUS_INACTIVE)],
            'photo' => ['nullable','mimes:jpg,jpeg,png,gif','max:512','dimensions:width=635,height=960']
        ],[
            'photo.dimensions' => 'Width and Height Must be :width px X :height px',
        ]);
//        dd($request->all());

        $data['title'] = $request->title;
        $data['position'] = $request->position;
        $data['status'] = $request->status;

        // Photo
        if ($request->hasFile('photo')) {
            $uid = uniqid();
            $file = $request->file('photo');
            $path = 'backend/img/client';
            $file_name = 'client-' . uniqid() .'-'. rand(0000, 9999) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path($path), $file_name);
            $data['photo'] = $path . '/' . $file_name;
        }
        $client->update($data);
        session()->flash('success', 'Successfully Client Updated');
        return redirect()->route('client.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClientPartner  $clientPartner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        dd($id);
        $client = ClientPartner::findOrFail($id);
        $client->delete();
        session()->flash('success', 'Successfully Client Deleted');
        return redirect()->route('client.index');
;    }
}
