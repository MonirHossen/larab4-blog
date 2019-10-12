<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['featured_posts']  = Post::with(['category','author'])->published()->where('is_featured',1)->orderBY('id','desc')->get();
        $data['latest_posts']    = Post::with(['category','author'])->published()->orderBY('id','desc')->paginate(8);
        return view('front.index',$data);
    }
}
