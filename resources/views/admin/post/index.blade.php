@extends('layouts.admin.master')
@section('title','List of Post')

@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Posts</h4>

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
                                Category
                            </th>
                            <th>
                                Featured
                            </th>
                            <th>
                                Status
                            </th>
                            <th>
                               Action
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>
                                        {{$serial++}}
                                    </td>
                                    <td>
                                        {{ $post->title }}
                                    </td>
                                    <td>
                                        @foreach($categories as $category)
                                            @if($category->id == $post->category_id)
                                                {{ $category->name }}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        @if($post->is_featured)
                                         <i class="ti-check text-success"></i>Yes
                                        @endif
                                    </td>
                                    <td>
                                        {{ ucfirst($post->status ) }}
                                    </td>
                                    <td>
                                        <a class="btn btn-primary btn-sm" href="{{route('post.show',$post->id)}}"><i class="ti-eye"></i></a>
                                        <a class="btn btn-warning btn-sm" href="{{route('post.edit',$post->id)}}"><i class="ti-pencil-alt"></i></a>
                                        <form class="d-inline-block" action="{{route('post.destroy',$post->id)}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure Delete This Post?')"><i class="ti-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                    {{ $posts->render() }}
                </div>
            </div>
        </div>
    </div>

@endsection
