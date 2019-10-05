@extends('layouts.admin.master')
@section('title','Create New User')

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <a  class="float-right btn btn-sm btn-success" href="{{route('user.index')}}"><i class="ti-eye menu-icon"></i></a>
                <h4 class="card-title">Create New User</h4>
                <form class="forms-sample" action="{{route('user.store')}}" method="post">
                    @csrf
                   @include('admin.user._form')
                    <button type="submit" class="btn btn-primary mr-2">Save</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection
