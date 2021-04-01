<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::user()->can('post.all')){
            abort(403,'Unauthorized Action');
        }
        $data['posts'] = Post::all();
        return view('backend.post.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Auth::user()->can('post.create')){
            abort(403,'Unauthorized Action');
        }
        $data['categories'] = Category::where('status', User::USER_ACTIVE)->get();
        return view('backend.post.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!Auth::user()->can('post.create')){
            abort(403,'Unauthorized Action');
        }
//      dd($request->all());
        $request->validate([
            'category_id' => ['required'],
//            'user_id' => ['required'],
            'title' => ['required', 'min:3', 'max:50'],
//            'title' => ['required', 'regex:/^[a-zA-Z\s]+$/', 'min:3', 'max:50'],
            'description' => ['required'],
            'date' => ['required'],
//            'photo' => ['required'],
            'photo' => ['required', 'mimes:jpg,jpeg,png,gif','max:512','dimensions:width=960,height=540']
        ],[
            'photo.dimensions' => 'Width and Height Must be :width px X :height px',
        ]);
//        dd($request->all());
        $data['category_id'] = $request->category_id;
//        $data['user_id'] = Auth::user()->id;
        $data['title'] = $request->title;
//        $data['slug'] = strtolower(trim( $data['title']));
        $data['slug'] = $data['title'];
        $data['description'] = $request->description;
        $data['date'] = date('Y-m-d', strtotime($request->date));

        if (!empty($request->status)){  //post publish or un publish
            $data['status'] = User::STATUS_ACTIVE;
        }
        else{
            $data['status'] = User::STATUS_INACTIVE;
        }

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $path = 'backend/img/post';
            $file_name = 'post-' .uniqid(). rand(0000, 9999) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path($path), $file_name);
            $data['photo'] = $path . '/' . $file_name;
        }
//        dd($data);

        Post::create($data);
        session()->flash('success', 'Successfully Post Added');
        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        if (!Auth::user()->can('post.show')){
            abort(403,'Unauthorized Action');
        }

        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!Auth::user()->can('post.update')){
            abort(403,'Unauthorized Action');
        }

        $data['post'] = Post::findOrFail($id);
        $data['categories'] = Category::all();

       // dd($data);
        return view('backend.post.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        if (!Auth::user()->can('post.update')){
            abort(403,'Unauthorized Action');
        }
//        dd($request->all());
        $request->validate([
            'category_id' => ['required'],
            'user_id' => ['required'],
            'title' => ['required'],
//            'title' => ['required', 'regex:/^[a-zA-Z\s]+$/', 'min:3', 'max:50'],
            'description' => ['required'],
            'date' => ['required'],
            'photo' => ['nullable', 'mimes:jpg,jpeg,png,gif','max:512','dimensions:width=960,height=540']
        ],[
            'photo.dimensions' => 'Width and Height Must be :width px X :height px',
        ]);

//        dd($request->all());
        $data['category_id'] = $request->category_id;
//        $data['user_id'] = Auth::user()->id;
        $data['title'] = $request->title;
//        $data['slug'] = strtolower(trim( $data['title'] ));
        $data['slug'] =  $data['title'] ;
        $data['description'] = $request->description;
        $data['date'] = date('Y-m-d', strtotime($request->date));

        //dd($data['date']);
        if (!empty($request->status)){
            $data['status'] = User::STATUS_ACTIVE;
        }
        else{
            $data['status'] = User::STATUS_INACTIVE;
        }

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $path = 'backend/img/post';
            $file_name = 'post-' .uniqid(). rand(0000, 9999) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path($path), $file_name);
            $data['photo'] = $path . '/' . $file_name;
        }

        $post->update($data);
        session()->flash('success', 'Successfully Post Updated');
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if (!Auth::user()->can('post.delete')){
            abort(403,'Unauthorized Action');
        }
        $post->delete();
        session()->flash('success', 'Successfully Post Deleted');
        return redirect()->route('post.index');
    }
}
