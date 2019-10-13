@extends('layouts.admin.master')
@section('title','About Content Edit')

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit About Content</h4>

                <form class="forms-sample" action="{{route('about.update',$about->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    @include('admin.about._form')

                    <button type="submit" class="btn btn-primary mr-2">Update</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection

