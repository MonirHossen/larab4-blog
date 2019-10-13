@extends('layouts.admin.master')
@section('title','List of About Content')

@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">About Content</h4>

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>
                                Serial
                            </th>
                            <th>
                               Title
                            </th>
                            <th>
                               Action
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($abouts as $about)
                                <tr>
                                    <td>
                                        {{ $about->id }}
                                    </td>
                                    <td>
                                        {{ $about->title }}
                                    </td>
                                    <td>
                                        <a class="btn btn-warning btn-sm" href="{{route('about.edit',$about->id)}}"><i class="ti-pencil-alt"></i></a>
                                        <form class="d-inline-block" action="{{route('about.destroy',$about->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure Delete This?')"><i class="ti-trash"></i></button>
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
