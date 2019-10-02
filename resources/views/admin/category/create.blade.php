@extends('layouts.admin.master')
@section('title','Create new category')

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <a  class="float-right btn btn-sm btn-success" href="{{route('category.index')}}"><i class="ti-eye menu-icon"></i></a>
                <h4 class="card-title">Create new category</h4>
                <form class="forms-sample" action="{{route('category.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Category Name">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" id="description" placeholder="Category Description"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Save</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection
