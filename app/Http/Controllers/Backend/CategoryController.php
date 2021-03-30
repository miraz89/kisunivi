<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // check authentication
        if (!Auth::user()->can('category.all')){
            abort(403,'Unauthorized Action');
        }
        $data['categories'] = Category::all();
        return view('backend.category.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // check authentication
        if (!Auth::user()->can('category.create')){
            abort(403,'Unauthorized Action');
        }
        return redirect()->route('category.index');
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
        if (!Auth::user()->can('category.create')){
            abort(403,'Unauthorized Action');
        }
        $request->validate([
            'title' => ['required'],
            'status' => ['required', Rule::in(User::STATUS_ACTIVE, User::STATUS_INACTIVE)],
        ]);
        $data['title'] = $request->title;
        $data['slug'] = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $data['title']) ));
        $data['status'] = $request->status;

        Category::create($data);
        session()->flash('success', 'Successfully Category Added');
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        // check authentication
        if (!Auth::user()->can('category.show')){
            abort(403,'Unauthorized Action');
        }
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // check authentication
        if (!Auth::user()->can('category.update')){
            abort(403,'Unauthorized Action');
        }
        $data['category'] = Category::findOrFail($id);
        return view('backend.category.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        // check authentication
        if (!Auth::user()->can('category.update')){
            abort(403,'Unauthorized Action');
        }
        $request->validate([
            'title' => ['required'],
            'status' => ['required', Rule::in(User::STATUS_ACTIVE, User::STATUS_INACTIVE)],
        ]);
        $data['title'] = $request->title;
        $data['slug'] = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $data['title']) ));
        $data['status'] = $request->status;

        $category->update($data);
        session()->flash('success', 'Successfully Category Update');
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        // check authentication
        if (!Auth::user()->can('category.delete')){
            abort(403,'Unauthorized Action');
        }
        $category->delete();
        session()->flash('success', 'Successfully Category Deleted');
        return redirect()->route('category.index');
    }
}
