@extends('layouts.admin.master')
@section('title','Create about content')

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Create About Content</h4>

                <form class="forms-sample" action="{{route('about.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @include('admin.about._form')
                    <button type="submit" class="btn btn-primary mr-2">Save</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
    @endsection
