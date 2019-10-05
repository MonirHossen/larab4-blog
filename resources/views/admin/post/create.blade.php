@extends('layouts.admin.master')
@section('title','Create New Post')

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Create New Post</h4>

                <form class="forms-sample" action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="category_id">Category</label>
                        <select name="category_id" class="form-control" id="category">
                            <option value="">Select Category</option>
                            @foreach($categories as $category)
                                <option @if(old('category_id') == $category->id) selected @endif value="{{$category->id}}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="author_id">Author</label>
                        <select name="author_id" class="form-control" id="author">
                            <option value="">Select Author</option>
                            @foreach($authors as $author)
                                <option @if(old('author_id') == $author->id) selected @endif value="{{$author->id}}">{{ $author->name }}</option>
                            @endforeach
                        </select>
                        @error('author_id')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input value="{{old('title')}}" name="title" type="text" class="form-control" id="title" placeholder="Title">
                        @error('title')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea name="content" placeholder="Content" class="form-control" id="content" rows="4">{{ old('content') }}</textarea>
                        @error('content')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
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
                        @error('image')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="#">Status</label>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input @if(old('status') == 'published') checked @endif type="radio"  class="form-check-input" name="status" id="published" value="published">
                                Published
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input @if(old('status') == 'unpublished') selected @endif type="radio"  class="form-check-input" name="status" id="unpublished" value="unpublished">
                                Unpublished
                            </label>
                        </div>
                        @error('status')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Save</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
    @endsection
