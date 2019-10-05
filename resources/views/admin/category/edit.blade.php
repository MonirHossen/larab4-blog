@extends('layouts.admin.master')
@section('title','Edit Post')

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit category</h4>

                <form class="forms-sample" action="{{route('category.update',$category->id)}}" method="post">
                    @csrf
                    @method('put')

                    @include('admin.category._form')

                    <button type="submit" class="btn btn-primary mr-2">Update</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection

