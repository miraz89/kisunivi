<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\NewsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // check authentication
        if (!Auth::user()->can('news_category.all')){
            abort(403,'Unauthorized Action');
        }
        $data['categories'] = NewsCategory::all();
        return view('backend.newscategory.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // check authentication
        if (!Auth::user()->can('news_category.create')){
            abort(403,'Unauthorized Action');
        }
        return redirect()->route('news_category.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // check authentication
        if (!Auth::user()->can('news_category.create')){
            abort(403,'Unauthorized Action');
        }
        $request->validate([
            'title' => ['required'],
            'status' => ['required']
        ]);
        $data['title'] = $request->title;
        $data['slug'] = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $data['title']) ));
        $data['status'] = $request->status;

        NewsCategory::create($data);
        session()->flash('success', 'Successfully Category Added');
        return redirect()->route('news_category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NewsCategory  $newsCategory
     * @return \Illuminate\Http\Response
     */
    public function show(NewsCategory $newsCategory)
    {
        // check authentication
        if (!Auth::user()->can('news_category.show')){
            abort(403,'Unauthorized Action');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NewsCategory  $newsCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // check authentication
        if (!Auth::user()->can('news_category.update')){
            abort(403,'Unauthorized Action');
        }
        $data['category'] = NewsCategory::findOrFail($id);
        return view('backend.newscategory.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NewsCategory  $newsCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewsCategory $newsCategory)
    {
        // check authentication
        if (!Auth::user()->can('news_category.update')){
            abort(403,'Unauthorized Action');
        }
        $request->validate([
            'title' => ['required']
        ]);
        $data['title'] = $request->title;
        $data['slug'] = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $data['title']) ));
        $data['status'] = $request->status;

        $newsCategory->update($data);
        session()->flash('success', 'Successfully Category Update');
        return redirect()->route('news_category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewsCategory  $newsCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsCategory $newsCategory)
    {
        // check authentication
        if (!Auth::user()->can('news_category.delete')){
            abort(403,'Unauthorized Action');
        }
        $newsCategory->delete();
        session()->flash('success', 'Successfully Category Deleted');
        return redirect()->route('news_category.index');
    }
}
