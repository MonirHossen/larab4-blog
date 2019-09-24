@extends('layouts.admin.master')
@section('title','Post Details')

@section('content')
    <div class="row">
        <div class="col-12 col-md-10">
            <div class="col-12 grid-margin" id="doc-intro">
                <div class="card">
                    <div class="card-body">
                        <h3 class="mb-4 mt-4">Title</h3>
                        <p class="card-subtitle">
                            News, <b>Published</b>
                            <br>
                            22 Dec, 2019
                        </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, harum, illo! Amet cum delectus, inventore natus non omnis voluptatem! Vitae.</p>
                    <div class="text-right">
                        <a href="{{route('post.index')}}" class="btn btn-primary btn-sm">Back</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
