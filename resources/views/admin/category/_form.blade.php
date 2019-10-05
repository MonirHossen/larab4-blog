<div class="form-group">
    <label for="name">Name</label>
    <input value="{{old('name',isset($category->name) ? $category->name : null )}}" type="text" name="name" class="form-control" id="name" placeholder="Category Name">
    @error('name')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="description">Description</label>
    <textarea name="description" class="form-control" id="description" placeholder="Category Description">{{old('description',isset($category->description) ? $category->description : null )}}</textarea>
    @error('description')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
