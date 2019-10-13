<?php

namespace App\Http\Controllers;

use App\About;
use App\Category;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['abouts'] = About::all();
        return view('admin.about.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'mimes:jpeg,png',
        ]);
        $data['title']    = $request->title;
        $data['content']  = $request->content;

        if ($request->hasFile('image'))
        {
            $file   = $request->file('image');
            $path   = 'images/upload/about';
            $file_name = time().rand(00000,99999).'.'.$file->getClientOriginalName();
            $file->move($path,$file_name);
            $data['image'] = $path. '/' .$file_name;
        }
        About::create($data);
        session()->flash('success','About Content Created Successfully');
        return redirect()->route('about.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        $data['about']  = $about;
        return view('admin.about.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'mimes:jpeg,png',
        ]);
        $data['title']    = $request->title;
        $data['content']  = $request->content;

        if ($request->hasFile('image'))
        {
            $file   = $request->file('image');
            $path   = 'images/upload/about';
            $file_name = time().rand(00000,99999).'.'.$file->getClientOriginalName();
            $file->move($path,$file_name);
            $data['image'] = $path. '/' .$file_name;

            if (file_exists($about->image))
            {
                unlink($about->image);
            }
        }
        $about->update($data);
        session()->flash('success','About Content Updated Successfully');
        return redirect()->route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        if (file_exists($about->image))
        {
            unlink($about->image);
        }
        $about->delete();
        session()->flash('success','About Content Deleted Successfully');
        return redirect()->route('about.index');
    }
}
