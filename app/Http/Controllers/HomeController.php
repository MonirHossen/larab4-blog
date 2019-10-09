<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['featured_posts']  = Post::where('is_featured',1)->where('status','published')->get();
        $data['posts']           = Post::where('status','published')->orderBY('id','desc')->get();
        return view('front.index',$data);
    }
}
