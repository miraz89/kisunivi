<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function bangla()
    {
        if (!Auth::user()->can('about.all')){
            abort(403,'Unauthorized Action');
        }
        $data['about'] = About::where('id',1)->first();
        return view('backend.about.editBangla',$data);
    }
    public function english()
    {
        if (!Auth::user()->can('about.all')){
            abort(403,'Unauthorized Action');
        }
        $data['about'] = About::where('id',2)->first();
        return view('backend.about.editEnglish',$data);
    }
    public function choose_us()
    {
        if (!Auth::user()->can('about.all')){
            abort(403,'Unauthorized Action');
        }
        $data['about'] = About::where('id',3)->first();
        return view('backend.about.choose_us',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Auth::user()->can('about.create')){
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
        if (!Auth::user()->can('about.store')){
            abort(403,'Unauthorized Action');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        if (!Auth::user()->can('about.show')){
            abort(403,'Unauthorized Action');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        if (!Auth::user()->can('about.update')){
            abort(403,'Unauthorized Action');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function updateBangla(Request $request, $id)
    {
        if (!Auth::user()->can('about.update')){
            abort(403,'Unauthorized Action');
        }
//        dd($request->all());
        $request->validate([
//            'title' => ['required', 'regex:/^[a-zA-Z\s]+$/', 'min:3', 'max:50'],
            'title' => ['required'],
            'description' => ['required'],
            'button_text' => ['required'],
            'link' => ['required'],
            'photo' => ['nullable', 'mimes:jpg,jpeg,png,gif','max:512','dimensions:width=700,height=960']

        ],[
            'photo.dimensions' => 'Width and Height Must be :width px X :height px',
        ]);
//        dd($request->all());
        $data['title'] = $request->title;
        $data['description'] = $request->description;
        $data['button_text'] = $request->button_text;
        $data['link'] = $request->link;

        // Photo
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $path = 'backend/img/abouts';
            $file_name = 'about-' .uniqid(). rand(0000, 9999) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path($path), $file_name);
            $data['photo'] = $path . '/' . $file_name;
        }

//        dd($id);
        DB::table('abouts')
            ->where('id', $id)
            ->update($data);
        session()->flash('success', 'Successfully About Bangla Updated');
        return redirect()->route('bangla');
    }

    public function updateEnglish(Request $request, $id)
    {
        if (!Auth::user()->can('about.update')){
            abort(403,'Unauthorized Action');
        }
//        dd($request->all());
        $request->validate([
//            'title' => ['required', 'regex:/^[a-zA-Z\s]+$/', 'min:3', 'max:50'],
            'title' => ['required'],
            'description' => ['required'],
            'button_text' => ['required'],
            'link' => ['required'],
            'photo' => ['nullable', 'mimes:jpg,jpeg,png,gif','max:512','dimensions:width=700,height=960']

        ],[
            'photo.dimensions' => 'Width and Height Must be :width px X :height px',
        ]);

        $data['title'] = $request->title;
        $data['description'] = $request->description;
        $data['button_text'] = $request->button_text;
        $data['link'] = $request->link;

        // Photo
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $path = 'backend/img/abouts';
            $file_name = 'about-' .uniqid(). rand(0000, 9999) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path($path), $file_name);
            $data['photo'] = $path . '/' . $file_name;
        }

        DB::table('abouts')
            ->where('id', $id)
            ->update($data);
        session()->flash('success', 'Successfully About English Updated');
        return redirect()->route('english');
    }
    public function updateChoose_us(Request $request, $id)
    {
        if (!Auth::user()->can('about.update')){
            abort(403,'Unauthorized Action');
        }
//        dd($request->all());
        $request->validate([
//            'title' => ['required', 'regex:/^[a-zA-Z\s]+$/', 'min:3', 'max:50'],
            'title' => ['required'],
            'description' => ['required'],
            'button_text' => ['required'],
            'link' => ['required'],
            'photo' => ['nullable', 'mimes:jpg,jpeg,png,gif','max:512','dimensions:width=460,height=560']

        ],[
            'photo.dimensions' => 'Width and Height Must be :width px X :height px',
        ]);

        $data['title'] = $request->title;
        $data['description'] = $request->description;
        $data['button_text'] = $request->button_text;
        $data['link'] = $request->link;

        // Photo
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $path = 'backend/img/abouts';
            $file_name = 'about-' .uniqid(). rand(0000, 9999) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path($path), $file_name);
            $data['photo'] = $path . '/' . $file_name;
        }

        DB::table('abouts')
            ->where('id', $id)
            ->update($data);
        session()->flash('success', 'Successfully Choose Us Updated');
        return redirect()->route('choose_us');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        if (!Auth::user()->can('about.delete')){
            abort(403,'Unauthorized Action');
        }
    }
}
