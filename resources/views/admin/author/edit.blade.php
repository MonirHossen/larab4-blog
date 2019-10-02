@extends('layouts.admin.master')
@section('title','Edit Author')

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Author</h4>

                <form class="forms-sample" action="{{route('author.update',$author->id)}}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="{{ $author->name }}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="author Email" value="{{ $author->email }}">
                    </div>
                    <div class="form-group">
                        <label for="about">About</label>
                        <textarea name="about" class="form-control" id="about" placeholder="Author Description">{{ $author->about }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Update</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection

