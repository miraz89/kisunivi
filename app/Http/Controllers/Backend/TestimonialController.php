<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::user()->can('testimonial.all')){
            abort(403,'Unauthorized Action');
        }
        $data['testimonials'] = Testimonial::all();
        return view('backend.testimonial.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Auth::user()->can('testimonial.create')){
            abort(403,'Unauthorized Action');
        }
        return view('backend.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!Auth::user()->can('testimonial.create')){
            abort(403,'Unauthorized Action');
        }
//        dd($request->all());
        $request->validate([
            'name' => ['required','min:3','max:40'],
            'designation' => ['required'],
            'company' => ['required'],
            'address' => ['required'],
            'details' => ['required'],
            'position' => ['required', 'numeric', 'digits_between:1,2'],
            'status' => ['required', Rule::in(User::STATUS_ACTIVE, User::STATUS_INACTIVE)],
            'photo' => ['nullable', 'mimes:jpg,jpeg,png,gif','max:512','dimensions:width=635,height=960']
        ],[
            'photo.dimensions' => 'Width and Height Must be :width px X :height px',
        ]);
//        dd($request->all());
        $data['name'] = ucwords($request->name);
        $data['designation'] = $request->designation;
        $data['company'] = ucwords($request->company);
        $data['address'] = $request->address;
        $data['details'] = $request->details;
        $data['position'] = $request->position;
        $data['status'] = ucwords($request->status);

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $path = 'backend/img/testimonial';
            $file_name = 'testimonial' .uniqid(). rand(0000, 9999) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path($path), $file_name);
            $data['photo'] = $path . '/' . $file_name;
        }
//        dd($data);

        Testimonial::create($data);
        session()->flash('success', 'Successfully Testimonial Created');
        return redirect()->route('testimonial.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        if (!Auth::user()->can('testimonial.show')){
            abort(403,'Unauthorized Action');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!Auth::user()->can('testimonial.update')){
            abort(403,'Unauthorized Action');
        }
        $data['testimonial'] = Testimonial::findOrFail($id);
        return view('backend.testimonial.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        if (!Auth::user()->can('testimonial.update')){
            abort(403,'Unauthorized Action');
        }
        $request->validate([
            'name' => ['required','min:3','max:40'],
            'designation' => ['required'],
            'company' => ['required'],
            'address' => ['required'],
            'details' => ['required'],
            'position' => ['required', 'numeric', 'digits_between:1,2'],
            'status' => ['required', Rule::in(User::STATUS_ACTIVE, User::STATUS_INACTIVE)],
            'photo' => ['nullable', 'mimes:jpg,jpeg,png,gif','max:512','dimensions:width=635,height=960']
        ],[
            'photo.dimensions' => 'Width and Height Must be :width px X :height px',
        ]);
//        dd($request->all());
        $data['name'] = ucwords($request->name);
        $data['designation'] = $request->designation;
        $data['company'] = ucwords($request->company);
        $data['address'] = $request->address;
        $data['details'] = $request->details;
        $data['status'] = ucwords($request->status);
        $data['position'] = $request->position;

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $path = 'backend/img/testimonial';
            $file_name = 'testimonial' .uniqid(). rand(0000, 9999) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path($path), $file_name);
            $data['photo'] = $path . '/' . $file_name;
        }

        $testimonial->update($data);
        session()->flash('success', 'Successfully Testimonial Updated');
        return redirect()->route('testimonial.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        if (!Auth::user()->can('testimonial.delete')){
            abort(403,'Unauthorized Action');
        }
        $testimonial->delete();
        session()->flash('success', 'Successfully Testimonial Deleted');
        return redirect()->route('testimonial.index');
    }
}
