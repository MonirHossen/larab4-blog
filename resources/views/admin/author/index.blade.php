@extends('layouts.admin.master')
@section('title','List of author')

@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Authors</h4>
                <a  class="float-right btn btn-sm btn-success" href="{{route('author.create')}}"><i class="ti-plus menu-icon"></i></a>

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
                                About
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($authors as $author)
                            <tr>
                                <td>
                                    {{ $author->id }}
                                </td>
                                <td>
                                    {{ $author->name }}
                                </td>
                                <td>
                                   {{ $author->email }}
                                </td>
                                <td>
                                   {{ $author->about }}
                                </td>
                                <td>
                                    <a class="btn btn-warning btn-sm" href="{{route('author.edit',$author->id)}}">Edit</a>
                                    <form class="d-inline-block" action="{{route('author.destroy',$author->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure Delete This Author?')">Delete</button>
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

