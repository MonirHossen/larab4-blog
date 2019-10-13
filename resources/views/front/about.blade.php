@extends('layouts.front.master')
@section('title','About Me')
@section('content')
    <section class="site-section pt-5">
        <div class="container">

            <div class="row blog-entries">
                <div class="col-md-12 col-lg-8 main-content">
                    @foreach($abouts as $about)
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="mb-4">{{ $about->title }}</h2>
                            <p class="mb-5"><img src="{{ asset($about->image) }}" alt="Image placeholder" class="img-fluid"></p>
                            <p>{!! $about->content !!}</p>
                        </div>
                    </div>
                    @endforeach

                    <div class="row mb-5 mt-5">
                        <div class="col-md-12 mb-5">
                            <h2>My Latest Posts</h2>
                        </div>
                           @foreach($latest_posts as $post)
                            <div class="col-md-12">
                                <div class="post-entry-horzontal">
                                    <a href="{{ route('post.details',$post->id) }}">
                                        <div class="image" style="background-image: url({{ asset($post->image) }});"></div>
                                        <span class="text">
                                              <div class="post-meta">
                                                 <span class="author mr-2">{{ $post->author->name }}</span>&bullet;
                                                  <span class="mr-2">{{ date('M d, Y',strtotime($post->published_at)) }} </span> &bullet;
                                                  <span class="ml-2"><span class="fa fa-comments"></span>{{ $post->category->name }} </span>
                                            </div>
                                            <h2>{{ $post->title }}</h2>
                                        </span>
                                    </a>
                                </div>
                                <!-- END post -->
                            </div>
                               @endforeach
                    </div>

                    <div class="row">
                        <div class="col-md-12 text-center">
                            {{ $latest_posts->render()}}
                        </div>
                    </div>



                </div>

                <!-- END main-content -->

                <div class="col-md-12 col-lg-4 sidebar">
                   @include('front._right_sidebar')
                </div>
                <!-- END sidebar -->

            </div>
        </div>
    </section>

    @endsection
