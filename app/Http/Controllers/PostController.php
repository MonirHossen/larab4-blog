<?php

namespace App\Http\Controllers;

use App\Author;
use App\Category;
use App\Post;
use DemeterChain\C;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['posts'] = Post::all();
        $data['categories']  = Category::orderBy('name')->get();
        $data['serial'] = 1;
        return view('admin.post.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categories']  = Category::orderBy('name')->get();
        $data['authors']     = Author::orderBy('name')->get();
        return view('admin.post.create',$data);
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
            'category_id' => 'required',
            'author_id' => 'required',
            'title' => 'required',
            'content' => 'required',
            'status' => 'required',
            'image' => 'mimes:jpeg,png',
        ]);

        if ($request->hasFile('image'))
        {
            $file   = $request->file('image');
            $path   = 'images/upload/posts';
            $file_name = time().rand(00000,99999).'.'.$file->getClientOriginalName();
            $file->move($path,$file_name);
            $data['image'] = $path. '/' .$file_name;
        }

        $data['category_id'] = $request->category_id;
        $data['author_id']   = $request->author_id;
        $data['title']       = $request->title;
        $data['content']     = $request->content;

        if ($request->has('is_featured'))
        {
            $data['is_featured'] = $request->is_featured;
        }

        $data['status']      = $request->status;

        if ($request->status == 'published')
        {
            $data['published_at'] = date('y-m-d');
        }
        Post::create($data);
        session()->flash('success','Post Created Successfully');
        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $data['post'] = $post;
        $data['categories']  = Category::orderBy('name')->get();
        $data['authors']     = Author::orderBy('name')->get();
        return view('admin.post.show',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post,Category $category,Author $author)
    {
        $data['post']       = $post;
        $data['categories'] = $category->orderBy('name')->get();
        $data['authors']    = $author->orderBy('name')->get();
        return view('admin.post.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)

    {
        $request->validate([
            'category_id' => 'required',
            'author_id' => 'required',
            'title' => 'required',
            'content' => 'required',
            'status' => 'required',
            'image' => 'mimes:jpeg,png',
        ]);

        if ($request->hasFile('image'))
        {
            $file   = $request->file('image');
            $path   = 'images/upload/posts';
            $file_name = time().rand(00000,99999).'.'.$file->getClientOriginalName();
            $file->move($path,$file_name);
            $data['image'] = $path. '/' .$file_name;
            if (file_exists($post->image))
            {
                unlink($post->image);
            }
        }


        $data['category_id'] = $request->category_id;
        $data['author_id']   = $request->author_id;
        $data['title']       = $request->title;
        $data['content']     = $request->content;
        $data['status']      = $request->status;

        $post->update($data);
        session()->flash('warning','Post Updated Successfully');
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if (file_exists($post->image))
        {
            unlink($post->image);
        }
        $post->delete();
        session()->flash('success','Post Deleted Successfully');
        return redirect()->route('post.index');
    }
}
