<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::user()->can('team.all')){
        abort(403,'Unauthorized Action');
        }
        $data['teams'] = Team::all();
        return view('backend.team.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Auth::user()->can('team.create')){
            abort(403,'Unauthorized Action');
        }
        return view('backend.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!Auth::user()->can('team.create')){
            abort(403,'Unauthorized Action');
        }

//        dd($request->all());
        $request->validate([
            'title' => ['required','min:3','max:40'],
            'img_title' => ['required'],
            'position' => ['required', 'numeric', 'digits_between:1,2'],
            'status' => ['required', Rule::in(User::STATUS_ACTIVE, User::STATUS_INACTIVE)],
            'photo' => ['required', 'mimes:jpg,jpeg,png,gif','max:512','dimensions:width=635,height=960']
        ],[
            'photo.dimensions' => 'Width and Height Must be :width PX X :height PX',
        ]);
//        dd($request->all());
        $data['title'] = ucwords($request->title);
        $data['img_title'] = $request->img_title;
        $data['position'] = $request->position;
        $data['status'] = ucwords($request->status);


        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $path = 'backend/img/team';
            $file_name = 'team' .uniqid(). rand(0000, 9999) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path($path), $file_name);
            $data['photo'] = $path . '/' . $file_name;
        }
//        dd($data);

        Team::create($data);
        session()->flash('success', 'Successfully Team Member Created');
        return redirect()->route('team.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        if (!Auth::user()->can('team.show')){
            abort(403,'Unauthorized Action');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!Auth::user()->can('team.update')){
            abort(403,'Unauthorized Action');
        }
        $data['team'] = Team::findOrFail($id);
        return view('backend.team.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        if (!Auth::user()->can('team.update')){
            abort(403,'Unauthorized Action');
        }

        $request->validate([
            'title' => ['required','min:3','max:40'],
            'img_title' => ['required'],
            'position' => ['required', 'numeric', 'digits_between:1,2'],
            'status' => ['required', Rule::in(User::STATUS_ACTIVE, User::STATUS_INACTIVE)],
            'photo' => ['nullable', 'mimes:jpg,jpeg,png,gif','max:512','dimensions:width=635,height=960']
        ],[
            'photo.dimensions' => 'Width and Height Must be :width PX X :height PX',
        ]);
//        dd($request->all());
        $data['title'] = $request->title;
        $data['img_title'] = $request->img_title;
        $data['position'] = $request->position;
        $data['status'] = $request->status;

        if($request->hasFile('photo')) {
            $file = $request->file('photo');
            $path = 'backend/img/team';
            $file_name = 'team' . rand(0000, 9999) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path($path), $file_name);
            $data['photo'] = $path . '/' . $file_name;
        }

        $team->update($data);
        session()->flash('success', 'Successfully Team Member Updated');
        return redirect()->route('team.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Auth::user()->can('team.delete')){
            abort(403,'Unauthorized Action');
        }
        $data = Team::findOrFail($id);
        $data->delete();
        session()->flash('success', 'Successfully Team Member Deleted');
        return redirect()->route('team.index');
    }
}
