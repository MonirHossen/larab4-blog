<?php

namespace App\Http\Controllers;

use App\About;
use App\Category;
use App\Contact;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['featured_posts']  = Post::with(['category','author'])->published()->where('is_featured',1)->orderBY('id','desc')->get();
        $data['latest_posts']    = Post::with(['category','author'])->published()->orderBY('id','desc')->paginate(8);
//        $data['popular_posts']   = Post::published()->orderBY('total_hit','desc')->limit(3)->get();
//        $data['categories']      = Category:: all();
        return view('front.index',$data);
    }
    public function details($id)
    {
//        $data['popular_posts']   = Post::published()->orderBY('total_hit','desc')->limit(3)->get();
//        $data['categories']      = Category::all();
        $post                    = Post::with(['category','author'])->findOrFail($id);
        $post->increment('total_hit');
        $data['post']            = $post;
        $data['related_posts']   = Post::published()->orderBY('id','desc')->where('category_id',$post->category_id)->limit(3)->get();

        return view('front.details',$data);
    }

    public function aboutUs()
    {
//        $data['popular_posts']   = Post::published()->orderBY('total_hit','desc')->limit(3)->get();
        $data['latest_posts']    = Post::with(['category','author'])->published()->orderBY('id','desc')->paginate(6);
//        $data['categories']      = Category::all();
        $data['abouts']          = About::all();

        return view('front.about',$data);
    }

    public function category($id)
    {
        $data['posts']           = Post::where('category_id',$id)->published()->orderBy('id','desc')->paginate(8);
//        $data['popular_posts']   = Post::published()->orderBY('total_hit','desc')->limit(3)->get();
//        $data['categories']      = Category::all();
        return view('front.category_posts',$data);
    }

    public function contactUs()
    {
//        $data['categories']      = Category::all();
//        $data['popular_posts']   = Post::published()->orderBY('total_hit','desc')->limit(3)->get();
       return view('front.contact');
    }
    public function contactMessageSend(Request $request)
    {
        $request->validate([
            'name'           => 'required',
            'phone'          => 'required',
            'email'          => 'required|unique:contacts',
            'message'        => 'required'
        ]);
      Contact::create($request->except('_token'));
      session()->flash('success','Message Send Successfully!');
      return redirect()->route('contact_us');
    }
    public function messageRead()
    {
        $data['messages']   = Contact::all();
        return view('admin.contact.index',$data);
    }

//    public function footer()
//    {
//        //        $data['popular_posts']   = Post::published()->orderBY('total_hit','desc')->limit(3)->get();
//        $data['latest_posts']    = Post::with(['category','author'])->published()->orderBY('id','desc')->paginate(6);
////        $data['categories']      = Category::all();
//        $data['abouts']          = About::all();
//
//        return view('layouts.front._footer',$data);
//    }

}
