@extends('layouts.admin.master')
@section('title','Edit Post')

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Post</h4>

                <form class="forms-sample" action="{{route('post.update',1)}}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="category_id">Category</label>
                        <select class="form-control" id="category">
                            <option value="sports">Sports</option>
                            <option value="news" selected>News</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Title" value="Title">
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea name="content" placeholder="Content" class="form-control" id="content" rows="4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, perspiciatis!</textarea>
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                            <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="#">Status</label>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" checked class="form-check-input" name="optionsRadios" id="published" value="">
                                Published
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="optionsRadios" id="unpublished" value="">
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

