@extends('layouts.admin.master')
@section('title','Create New author')

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <a  class="float-right btn btn-sm btn-success" href="{{route('author.index')}}"><i class="ti-eye menu-icon"></i></a>
                <h4 class="card-title">Create new author</h4>
                <form class="forms-sample" action="{{route('author.store')}}" method="post">
                    @csrf
                    @include('admin.author._form')

                    <button type="submit" class="btn btn-primary mr-2">Save</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection
