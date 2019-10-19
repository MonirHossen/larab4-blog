@extends('layouts.front.master')
@section('title','Category Related Post')
@section('content')
    <section class="site-section py-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="mb-4">Category Related Posts</h2>
                </div>
            </div>
            <div class="row blog-entries">
                <div class="col-md-12 col-lg-8 main-content">
                    <div class="row">
                        @foreach($posts as $post)
                            <div class="col-md-6">
                                <a href="{{ route('post.details',$post->id) }}" class="blog-entry element-animate" data-animate-effect="fadeIn">
                                    <img src="{{asset($post->image)}}" width="100%" alt="Image placeholder">
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
                            {{ $posts->render() }}
                        </div>
                    </div>






                </div>

                <!-- END main-content -->

                <div class="col-md-12 col-lg-4 sidebar">

                    <!-- END sidebar-box -->
                    @include('front._right_sidebar')
                </div>




            </div>
            <!-- END sidebar -->
        </div>


    </section>
    @endsection
