<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Lecture;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class LectureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::user()->can('lecture.all')){
            abort(403,'Unauthorized Action');
        }
        $data['lectures'] = Lecture::all();
        return view('backend.lecture.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Auth::user()->can('lecture.create')){
            abort(403,'Unauthorized Action');
        }
        return view('backend.lecture.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!Auth::user()->can('lecture.create')){
            abort(403,'Unauthorized Action');
        }
//        dd($request->all());
        $request->validate([
//            'title' => ['required', 'regex:/^[a-zA-Z\s]+$/', 'min:3', 'max:50'],
            'title' => ['required'],
            'description' => ['required'],
            'position' => ['required', 'numeric', 'digits_between:1,2'],
            'status' => ['required', Rule::in(User::STATUS_ACTIVE, User::STATUS_INACTIVE)],
            'photo' => ['nullable', 'mimes:jpg,jpeg,png,gif','max:512','dimensions:width=635,height=960']
        ],[
            'photo.dimensions' => 'Width and Height Must be :width PX X :height PX',
        ]);
//        dd($request->all());

        $data['title'] = $request->title;
        $data['description'] = $request->description;
        $data['position'] = $request->position;
        $data['status'] = $request->status;

        // Photo
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $path = 'backend/img/lectures';
            $file_name = 'lecture-' .uniqid(). rand(0000, 9999) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path($path), $file_name);
            $data['photo'] = $path . '/' . $file_name;
        }
        // Video
        if ($request->hasFile('video')) {
            $file = $request->file('video');
            $path = 'backend/img/lectures';
            $file_name = 'lecture-' .uniqid(). rand(0000, 9999) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path($path), $file_name);
            $data['video'] = $path . '/' . $file_name;
        }
        Lecture::create($data);
        session()->flash('success', 'Successfully Session Added');
        return redirect()->route('session.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function show(Lecture $lecture)
    {
        if (!Auth::user()->can('lecture.show')){
            abort(403,'Unauthorized Action');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!Auth::user()->can('lecture.update')){
            abort(403,'Unauthorized Action');
        }
        $data['lecture'] = Lecture::findOrFail($id);
        return view('backend.lecture.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lecture $lecture)
    {
        if (!Auth::user()->can('lecture.update')){
            abort(403,'Unauthorized Action');
        }
//        dd($request->all());
        $request->validate([
//            'title' => ['required', 'regex:/^[a-zA-Z\s]+$/', 'min:3', 'max:50'],
            'title' => ['required'],
            'description' => ['required'],
            'position' => ['required', 'numeric', 'digits_between:1,2'],
            'status' => ['required', Rule::in(User::STATUS_ACTIVE, User::STATUS_INACTIVE)],
//            'photo' => ['nullable', 'mimes:jpg,jpeg,png,gif','max:512','dimensions:width=635,height=960']

        ],[
            'photo.dimensions' => 'Width and Height Must be :width px X :height px',
        ]);

        $data['title'] = $request->title;
        $data['description'] = $request->description;
        $data['position'] = $request->position;
        $data['status'] = $request->status;

        // Photo
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $path = 'backend/img/lectures';
            $file_name = 'lecture-' .uniqid(). rand(0000, 9999) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path($path), $file_name);
            $data['photo'] = $path . '/' . $file_name;
        }
        // Video
        if ($request->hasFile('video')) {
            $file = $request->file('video');
            $path = 'backend/img/lectures';
            $file_name = 'lecture-' .uniqid(). rand(0000, 9999) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path($path), $file_name);
            $data['video'] = $path . '/' . $file_name;
        }
//        dd($data);
        $lecture->update($data);
        session()->flash('success', 'Successfully Session Updated');
        return redirect()->route('session.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        dd($id);
        if (!Auth::user()->can('lecture.delete')){
            abort(403,'Unauthorized Action');
        }
        $delete_id = Lecture::findOrFail($id);
        $delete_id->delete();
        session()->flash('success', 'Successfully Session Deleted');
        return redirect()->route('session.index');
    }
}
