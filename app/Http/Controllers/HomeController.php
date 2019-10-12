<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['featured_posts']  = Post::with(['category','author'])->published()->where('is_featured',1)->orderBY('id','desc')->get();
        $data['latest_posts']    = Post::with(['category','author'])->published()->orderBY('id','desc')->paginate(8);
        $data['popular_posts']   = Post::published()->orderBY('total_hit','desc')->limit(3)->get();
        $data['categories']      = Category::all();
        return view('front.index',$data);
    }
    public function details()
    {
        return view('front.details');
    }
}
