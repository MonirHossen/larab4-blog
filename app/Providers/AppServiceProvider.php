<?php

namespace App\Providers;

use App\About;
use App\Category;
use App\Post;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength('191');

        view()->composer('front._right_sidebar',function ($view){
            $data['categories'] = Category::all();
            $data['popular_posts']   = Post::published()->orderBY('total_hit','desc')->limit(3)->get();
            $view->with($data);
        });
        view()->composer('layouts.front._navbar',function ($view){
            $data['categories'] = Category::all();
            $view->with($data);
        });

        view()->composer('layouts.front._footer',function ($view){
            $data['abouts']          = About::all();
            $data['latest_posts']    = Post::with(['category','author'])->published()->orderBY('id','desc')->paginate(3);
            $view->with($data);
        });


    }
}
