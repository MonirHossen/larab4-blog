@extends('layouts.admin.master')
@section('title','List of Post')

@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Categories</h4>
                <a  class="float-right btn btn-sm btn-success" href="{{route('category.create')}}"><i class="ti-plus menu-icon"></i></a>

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>
                                Serial
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>
                                    {{ $category->id }}
                                </td>
                                <td>
                                    {{ $category->name }}
                                </td>
                                <td>
                                   {{ $category->description }}
                                </td>
                                <td>
                                    <a class="btn btn-warning btn-sm" href="{{route('category.edit',$category->id)}}">Edit</a>
                                    <form class="d-inline-block" action="{{route('category.destroy',$category->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure Delete This Post?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

