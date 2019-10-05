<div class="form-group">
    <label for="name">Name</label>
    <input value="{{ old('name',isset($user->name) ? $user->name : null ) }}" type="text" name="name" class="form-control" id="name" placeholder="Name">
    @error('name')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input value="{{ old('email',isset($user->email) ? $user->email : null ) }}" type="email" name="email" class="form-control" id="email" placeholder="User Email">
    @error('email')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="password">Password</label>
    <input value="{{ old('password',isset($user->password) ? $user->password : null)  }}" type="password" name="password" class="form-control" id="password" placeholder="User Password">
    @error('password')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
