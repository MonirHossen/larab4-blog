<div class="form-group">
    <label for="name">Name</label>
    <input value="{{ old('name',isset($author->name) ? $author->name : null ) }}" type="text" name="name" class="form-control" id="name" placeholder="Name">
    @error('name')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input value="{{ old('email',isset($author->email) ? $author->email : null ) }}" type="email" name="email" class="form-control" id="email" placeholder="Author Email">
    @error('email')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="about">About</label>
    <textarea name="about" class="form-control" id="about" placeholder="Author Description">{{ old('about',isset($author->about) ? $author->about : null ) }}</textarea>
    @error('about')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
