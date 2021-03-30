<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['events'] = Event::all();
        return view('backend.event.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $request->validate([
            'title' => ['required','min:3','max:40'],
            'description' => ['required'],
            'position' => ['required', 'numeric', 'digits_between:1,2'],
            'status' => ['required', Rule::in(User::STATUS_ACTIVE, User::STATUS_INACTIVE)],
//            'photo' => ['required', 'mimes:jpg,jpeg,png,gif','max:512','dimensions:width=635,height=960']
        ],[
            'photo.dimensions' => 'Width and Height Must be :width PX X :height PX',
        ]);
//        dd($request->all());
        $data['title'] = ucwords($request->title);
        $data['description'] = $request->description;
        $data['position'] = $request->position;
        $data['status'] = $request->status;

        $event_id = Event::create($data);
//        dd($event_id);

        $photos = $request->file('photos');

        foreach ($photos as $photo){

//                $file = $request->file('photo');
                $file = $photo;
                $path = 'backend/img/team';
                $file_name = 'team' .uniqid(). rand(0000, 9999) . '.' . $file->getClientOriginalExtension();
                $file->move(public_path($path), $file_name);
                $datas['photo'] = $path . '/' . $file_name;
//                dd($datas);
//            dd($event_id);

                $datas['event_id'] = $event_id->id;
                Gallery::create($datas);
        }

//        dd($data);

        session()->flash('success', 'Successfully Event Created');
        return redirect()->route('event.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['event'] = Event::findOrFail($id);
        return view('backend.event.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //        dd($request->all());
        $request->validate([
            'title' => ['required','min:3','max:40'],
            'description' => ['required'],
            'position' => ['required', 'numeric', 'digits_between:1,2'],
            'status' => ['required', Rule::in(User::STATUS_ACTIVE, User::STATUS_INACTIVE)],
        ],[
            'photo.dimensions' => 'Width and Height Must be :width PX X :height PX',
        ]);
//        dd($request->all());
        $data['title'] = ucwords($request->title);
        $data['description'] = $request->description;
        $data['position'] = $request->position;
        $data['status'] = $request->status;
        $event->update($data);

        session()->flash('success', 'Successfully Event Updated');
        return redirect()->route('event.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();
        session()->flash('success', 'Successfully Team Member Deleted');
        return redirect()->route('event.index');
    }
}
