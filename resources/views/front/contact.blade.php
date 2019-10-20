@extends('layouts.front.master')
@section('title','Contact Us')

@section('content')
    <section class="site-section">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-6">
                    @include('layouts.admin._alert')
                    <h1>Contact Us</h1>
                </div>
            </div>
            <div class="row blog-entries">
                <div class="col-md-12 col-lg-8 main-content">

                    <form action="{{ route('admin.message') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" value="{{ old('name') }}" id="name" class="form-control ">
                            </div>
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="col-md-12 form-group">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" value="{{ old('phone') }}" id="phone" class="form-control ">
                            </div>
                            @error('phone')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="col-md-12 form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" value="{{ old('email') }}" id="email" class="form-control ">
                            </div>
                            @error('email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <label for="message">Write Message</label>
                                <textarea name="message" name="message" id="message" class="form-control " cols="30" rows="8">{{ old('message') }}</textarea>
                            </div>
                        </div>
                        @error('message')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <button class="btn btn-primary">Send Message</button>
                            </div>
                        </div>
                    </form>


                </div>

                <!-- END main-content -->

                <div class="col-md-12 col-lg-4 sidebar">
                   @include('front._right_sidebar')
                </div>
                <!-- END sidebar -->

            </div>
        </div>
    </section>
@endsection
