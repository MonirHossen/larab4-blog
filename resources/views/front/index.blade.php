@extends('layouts.front.master')
@section('title','Home')
@section('content')
    <section class="site-section pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="owl-carousel owl-theme home-slider">
                     @foreach($featured_posts as $post)
                            <div>
                                <a href="#" class="a-block d-flex align-items-center height-lg" style="background-image: url({{ asset($post->image) }}); ">
                                    <div class="text half-to-full">
                                        <span class="category mb-5">{{ $post->category->name }}</span>
                                        <div class="post-meta">

                                            <span class="author mr-2"><img src="{{ $post->image }}" alt="Colorlib"> {{ $post->author->name }}</span>&bullet;
                                            <span class="mr-2">{{ date('M d, Y',strtotime($post->published_at)) }} </span> &bullet;
                                            <span class="ml-2"><span class="fa fa-comments"></span> 3</span>

                                        </div>
                                        <h3>{{ $post->title }}</h3>
                                        <p>{{ \Illuminate\Support\Str::limit($post->content,100) }}</p>
                                    </div>
                                </a>
                            </div>
                     @endforeach
                    </div>

                </div>
            </div>

        </div>


    </section>
    <!-- END section -->

    <section class="site-section py-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="mb-4">Latest Posts</h2>
                </div>
            </div>
            <div class="row blog-entries">
                <div class="col-md-12 col-lg-8 main-content">
                    <div class="row">
                       @foreach($latest_posts as $post)
                            <div class="col-md-6">
                                <a href="#" class="blog-entry element-animate" data-animate-effect="fadeIn">
                                    <img src="{{$post->image}}" width="100%" alt="Image placeholder">
                                    <div class="blog-content-body">
                                        <div class="post-meta">
                                            <span class="author mr-2">{{ $post->author->name }}</span>&bullet;
                                            <span class="mr-2">{{ date('M d, Y',strtotime($post->published_at)) }} </span> &bullet;
                                            <span class="ml-2"><span class="fa fa-comments"></span> {{ $post->category->name }}</span>
                                        </div>
                                        <h2>{{ $post->title }}</h2>
                                    </div>
                                </a>
                            </div>
                           @endforeach
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-12 text-center">
                           {{ $latest_posts->render() }}
                        </div>
                    </div>






                </div>

                <!-- END main-content -->

                <div class="col-md-12 col-lg-4 sidebar">

                    <!-- END sidebar-box -->
                    <div class="sidebar-box">
                        <h3 class="heading">Popular Posts</h3>
                        <div class="post-entry-sidebar">
                            <ul>
                                @foreach($popular_posts as $post)
                                    <li>
                                        <a href="">
                                            <img src="{{ $post->image }}" alt="Image placeholder" class="mr-4">
                                            <div class="text">
                                                <h4>{{ $post->title }}</h4>
                                                <div class="post-meta">
                                                    <span class="mr-2">{{ date('M d, Y',strtotime($post->published_at)) }}</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="sidebar-box">
                        <h3 class="heading">Categories</h3>
                        <ul class="categories">
                            @foreach($categories as $category)
                            <li><a href="#">{{ $category->name }} <span>(12)</span></a></li>
                                @endforeach
                        </ul>
                    </div>
                    <!-- END sidebar-box -->

                        <div class="sidebar-box">
                            <h3 class="heading">Tags</h3>
                            <ul class="tags">
                                <li><a href="#">Travel</a></li>
                                <li><a href="#">Adventure</a></li>
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Lifestyle</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Freelancing</a></li>
                                <li><a href="#">Travel</a></li>
                                <li><a href="#">Adventure</a></li>
                                <li><a href="#">Food</a></li>
                                <li><a href="#">Lifestyle</a></li>
                                <li><a href="#">Business</a></li>
                                <li><a href="#">Freelancing</a></li>
                            </ul>
                        </div>
                </div>
                    <!-- END sidebar-box -->

                    <!-- END sidebar-box -->

                </div>
                <!-- END sidebar -->

            </div>


    </section>
    @endsection
