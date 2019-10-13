<div class="form-group">
    <label for="title">Title</label>
    <input value="{{old('title',isset($about->title) ? $about->title : null)}}" name="title" type="text" class="form-control" id="title" placeholder="Title">
    @error('title')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="content">Content</label>
    <textarea name="content" placeholder="Content" class="form-control" id="editor" rows="4">{{ old('content',isset($about->content) ? $about->content : null ) }}</textarea>
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
    @if(old('image',isset($about->image)?$about->image:null)) <img src="{{ asset($about->image) }}" width="30%" alt="">@endif
    @error('image')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

