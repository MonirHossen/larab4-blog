@extends('layouts.admin.master')
@section('title','Edit Post')

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Post</h4>

                <form class="forms-sample" action="{{route('post.update',$post->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="category_id">Category</label>
                        <select name="category_id" class="form-control" id="category">
                            @foreach($categories as $category)
                                <option @if($category->id == $post->category_id) selected @endif value="{{$category->id}}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="author_id">Author</label>
                        <select name="author_id" class="form-control" id="author">
                            @foreach($authors as $author)
                                <option @if($author->id == $post->author_id) selected @endif value="{{$author->id}}">{{ $author->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input name="title" type="text" class="form-control" id="title" placeholder="Title" value="{{ $post->title }}">
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea name="content" placeholder="Content" class="form-control" id="content" rows="4">{{ $post->content }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input name="image" type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                            <span class="input-group-append">
                                 <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                        </div>
                        @if($post->image !=null)
                            <img src="{{asset($post->image)}}" alt="" width="30%">
                            @endif
                    </div>
                    <div class="form-group">
                        <label for="#">Status</label>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input @if($post->status == 'published') checked @endif type="radio"  class="form-check-input" name="status" id="published" value="published">
                                Published
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input @if($post->status == 'unpublished') checked @endif type="radio"  class="form-check-input" name="status" id="unpublished" value="unpublished">
                                Unpublished
                            </label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Update</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection

