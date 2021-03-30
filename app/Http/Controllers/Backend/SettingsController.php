<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::user()->can('settings.all')){
            abort(403,'Unauthorized Action');
        }
        $data['settings'] = Settings::where('id',1)->first();
        return view('backend.settings.edit',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Auth::user()->can('settings.create')){
            abort(403,'Unauthorized Action');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!Auth::user()->can('settings.store')){
            abort(403,'Unauthorized Action');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function show(Settings $settings)
    {
        if (!Auth::user()->can('settings.show')){
            abort(403,'Unauthorized Action');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function edit(Settings $settings)
    {
        if (!Auth::user()->can('settings.edit')){
            abort(403,'Unauthorized Action');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (!Auth::user()->can('settings.update')){
            abort(403,'Unauthorized Action');
        }
//        dd($request->all());

        $request->validate([
//            'title' => ['required', 'regex:/^[a-zA-Z\s]+$/', 'min:3', 'max:50'],
            'title' => ['required'],

//            'favicon' => ['nullable', 'mimes:jpg,jpeg,png,gif','max:512','dimensions:width=635,height=960']
//            'logo' => ['nullable', 'mimes:jpg,jpeg,png,gif','max:512','dimensions:width=635,height=960']

        ],[
            'favicon.dimensions' => 'Width and Height Must be :width px X :height px',
            'logo.dimensions' => 'Width and Height Must be :width px X :height px',
        ]);
//        dd($request->all());
        $data['title'] = $request->title;

        // favicon
        if ($request->hasFile('favicon')) {
            $file = $request->file('favicon');
            $path = 'backend/img/settings';
            $file_name = 'settings-' .uniqid(). rand(0000, 9999) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path($path), $file_name);
            $data['favicon'] = $path . '/' . $file_name;
        }
        // logo
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $path = 'backend/img/settings';
            $file_name = 'settings-' .uniqid(). rand(0000, 9999) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path($path), $file_name);
            $data['logo'] = $path . '/' . $file_name;
        }
//        dd($data);
        DB::table('settings')
            ->where('id', $id)
            ->update($data);
        session()->flash('success', 'Successfully Settings Updated');
        return redirect()->route('settings.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function destroy(Settings $settings)
    {
        if (!Auth::user()->can('settings.delete')){
            abort(403,'Unauthorized Action');
        }
    }
}
