<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\NewsCategory;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Null_;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::user()->can('news.all')){
            abort(403,'Unauthorized Action');
        }
        $data['news'] = News::all();
        return view('backend.news.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (!Auth::user()->can('news.create')){
            abort(403,'Unauthorized Action');
        }
        $data['categories'] = NewsCategory::all();
        return view('backend.news.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!Auth::user()->can('news.create')){
            abort(403,'Unauthorized Action');
        }
//        dd($request->all());
        $request->validate([
            'news_category_id' => ['required'],
            'title' => ['required'],
            'description' => ['required'],
            'date' => ['required'],
            'photo' => ['required'],
//            'photo' => ['nullable', 'mimes:jpg,jpeg,png,gif','max:512','dimensions:width=635,height=960']
        ]);
//        dd($request->all());
        $data['news_category_id'] = $request->news_category_id;
        $data['title'] = $request->title;
//        $data['slug'] = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $data['title']) ));
        $data['slug'] = strtolower(trim( $data['title'] ));
        $data['description'] = $request->description;
        $data['date'] = date('Y-m-d', strtotime($request->date));

        if (!empty($request->status)){
            $data['status'] = User::STATUS_ACTIVE;
        }
        else{
            $data['status'] = User::STATUS_INACTIVE;
        }


        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $path = 'backend/img/news';
            $file_name = 'news-' .uniqid(). rand(0000, 9999) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path($path), $file_name);
            $data['photo'] = $path . '/' . $file_name;
        }
//        dd($data);

        News::create($data);
        session()->flash('success', 'Successfully News Added');
        return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        if (!Auth::user()->can('news.show')){
            abort(403,'Unauthorized Action');
        }
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (!Auth::user()->can('news.update')){
            abort(403,'Unauthorized Action');
        }
        $data['news'] = News::findOrFail($id);
        $data['categories'] = NewsCategory::all();
        return view('backend.news.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        if (!Auth::user()->can('post.update')){
            abort(403,'Unauthorized Action');
        }
        $request->validate([
            'news_category_id' => ['required'],
            'title' => ['required'],
            'description' => ['required'],
            'date' => ['required'],
        ]);
//        dd($request->all());
        $data['news_category_id'] = $request->news_category_id;
        $data['title'] = $request->title;
        $data['slug'] = strtolower(trim ($data['title'] ));
        $data['description'] = $request->description;

        $data['date'] = date('Y-m-d', strtotime($request->date));
        if (!empty($request->status)){
            $data['status'] = User::STATUS_ACTIVE;
        }
        else{
            $data['status'] = User::STATUS_INACTIVE;
        }

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $path = 'backend/img/news';
            $file_name = 'news-' .uniqid(). rand(0000, 9999) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path($path), $file_name);
            $data['photo'] = $path . '/' . $file_name;
        }


        $news->update($data);
        session()->flash('success', 'Successfully News Added');
        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        if (!Auth::user()->can('news.delete')){
            abort(403,'Unauthorized Action');
        }
        $news->delete();
        session()->flash('success', 'Successfully News Deleted');
        return redirect()->route('news.index');
    }
}
