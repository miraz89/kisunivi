<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;


class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::user()->can('slider.all')){
            abort(403,'Unauthorized Action');
        }
        $data['sliders'] = Slider::all();
        return view('backend.slider.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Auth::user()->can('slider.create')){
            abort(403,'Unauthorized Action');
        }
        return view('backend.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!Auth::user()->can('slider.create')){
            abort(403,'Unauthorized Action');
        }
//        dd($request->all());
        $request->validate([
//            'title' => ['required', 'regex:/^[a-zA-Z\s]+$/', 'min:3', 'max:50'],
            'title' => ['required'],
            'description' => ['required'],
            'button_text' => ['required'],
            'link' => ['required'],
            'position' => ['required', 'numeric', 'digits_between:1,2'],
            'status' => ['required', Rule::in(User::STATUS_ACTIVE, User::STATUS_INACTIVE)],
            'photo' => ['required', 'mimes:jpg,jpeg,png,gif','max:512','dimensions:width=635,height=960']
        ],[
            'photo.dimensions' => 'Width and Height Must be :width PX X :height PX',
        ]);
//        dd($request->all());

        $data['title'] = $request->title;
        $data['description'] = $request->description;
        $data['button_text'] = $request->button_text;
        $data['link'] = $request->link;
        $data['position'] = $request->position;
        $data['status'] = $request->status;

        // Photo
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $path = 'backend/img/sliders';
            $file_name = 'slider-' .uniqid(). rand(0000, 9999) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path($path), $file_name);
            $data['photo'] = $path . '/' . $file_name;
        }
        Slider::create($data);
        session()->flash('success', 'Successfully Slider Added');
        return redirect()->route('slider.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        if (!Auth::user()->can('slider.show')){
            abort(403,'Unauthorized Action');
        }
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!Auth::user()->can('slider.update')){
            abort(403,'Unauthorized Action');
        }
        $data['slider'] = Slider::findOrFail($id);
        return view('backend.slider.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        if (!Auth::user()->can('slider.update')){
            abort(403,'Unauthorized Action');
        }
//        dd($request->all());
        $request->validate([
//            'title' => ['required', 'regex:/^[a-zA-Z\s]+$/', 'min:3', 'max:50'],
            'title' => ['required'],
            'description' => ['required'],
            'button_text' => ['required'],
            'link' => ['required'],
            'position' => ['required', 'numeric', 'digits_between:1,2'],
            'status' => ['required', Rule::in(User::STATUS_ACTIVE, User::STATUS_INACTIVE)],
            'photo' => ['nullable', 'mimes:jpg,jpeg,png,gif','max:512','dimensions:width=635,height=960']

        ],[
            'photo.dimensions' => 'Width and Height Must be :width px X :height px',
        ]);

        $data['title'] = $request->title;
        $data['description'] = $request->description;
        $data['button_text'] = $request->button_text;
        $data['link'] = $request->link;
        $data['position'] = $request->position;
        $data['status'] = $request->status;

        // Photo
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $path = 'backend/img/sliders';
            $file_name = 'slider-' .uniqid(). rand(0000, 9999) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path($path), $file_name);
            $data['photo'] = $path . '/' . $file_name;
        }
        $slider->update($data);
        session()->flash('success', 'Successfully Slider Updated');
        return redirect()->route('slider.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        if (!Auth::user()->can('slider.delete')){
            abort(403,'Unauthorized Action');
        }
        $slider->delete();
        session()->flash('success', 'Successfully Slider Deleted');
        return redirect()->route('slider.index');

    }
}
