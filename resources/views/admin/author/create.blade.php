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
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Author Email">
                    </div>
                    <div class="form-group">
                        <label for="about">About</label>
                        <textarea name="about" class="form-control" id="about" placeholder="Author Description"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Save</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection
