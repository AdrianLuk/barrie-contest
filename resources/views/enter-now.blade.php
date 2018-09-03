@extends('layouts.app')

@section('content')
@if (session()->has('flash.message'))
            <div id="form-{{ session('flash.class') }}" class="alert alert-dismissible alert-{{ session('flash.class') }} text-center" role="alert">
            {{ session('flash.message') }}
            <button id="close-btn" type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
@endif
    <div style="background-image: url( {{ asset('img/camera_blur.jpg') }} );" class="enter background-top row align-items-center">
        <div class="col-12 col-lg-5 offset-lg-6">
            <div class="enter-content">
                <div class="enter-heading text-center d-flex flex-column justify-content-around h-100">
                    <h1 class="text-uppercase">Take your shot at</h1>
                    <h2 class="enter-capturing"><span class="sun-valley">Capturing</span>
                        <div class="barrie">BARRIE</div></h2>
                    <h2 class="text-uppercase">Join our contest for a chance to have your photo featured on our website</h2>
                    <a href="javascript:void(0);" class="btn btn-outline-light rounded-0 text-uppercase mx-auto mt-3">Enter Now!</a>
                </div>
            </div>
        </div>
    </div>
    <section class="contest bg-white">
        <h2 class="contest-heading text-center text-uppercase p-3">Capturing Barrie</h2>
        <article class="contest-form container-fluid">
            <form class="my-3 needs-validation" action="/entries" method="POST" enctype="multipart/form-data" novalidate>
                @csrf
                <div class="form-group">
                    <label class="form-control-label" for="name">Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-lg" id="name" name="name" value="{{Request::old('name')}}" autocomplete="nope" required>
                    <div class="invalid-feedback">The name field is required.</div>
                    @if ($errors->has('name'))
                        <span class="form-text text-danger">{{$errors->first('name')}}</span>
                    @endif
                </div>
                <div class="form-row">
                    <div class="form-group col-12 col-md-6">
                        <label class="form-control-label" for="email">Your Email <span class="text-danger">*</span></label>
                        <input type="email" class="form-control form-control-lg" id="email" name="email" value="{{Request::old('email')}}" autocomplete="nope" required>
                        <div class="invalid-feedback">Please enter a valid email.</div>
                            @if ($errors->has('email'))
                                <span class="form-text text-danger">{{$errors->first('email')}}</span>
                            @endif
                    </div>
                    <div class="form-group col-12 col-md-6">
                        <label class="form-control-label" for="phone">Phone Number <span class="text-danger">*</span></label>
                        <input type="tel" class="form-control form-control-lg" id="phone" name="phone" value="{{Request::old('phone')}}" autocomplete="nope" required>
                        <div class="invalid-feedback">The phone number field is required.</div>
                        @if ($errors->has('phone'))
                            <span class="form-text text-danger">
                            {{$errors->first('phone')}}</span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-control-label" for="category">Category <span class="text-danger">*</span></label>
                    <select name="category" class="custom-select custom-select-lg" id="category">
                        <option value="day">DAYTIME IN BARRIE</option>
                        <option value="night">NIGHTTIME IN BARRIE</option>
                        <option value="outdoor">OUTDOOR ACTIVITIES</option>
                    </select>
                </div>
                <div class="form-group">
                    <div class="mb-2 form-control-label">Your Photo <span class="text-danger">*</span></div>
                    <div class="custom-file" id="customFile">
                        <input class="custom-file-input" type="file" name="photo" id="photo" required>
                        <label for="customFile" class="form-control-file form-control-lg custom-file-label">Select Photo...</label>
                        <div class="invalid-feedback mt-3">You must upload a photo.</div>
                    </div>
                    @if ($errors->has('photo'))
                        <span class="mt-3 form-text text-danger">
                        {{$errors->first('photo')}}</span>
                    @endif
                </div>
                <div class="form-group pt-2">
                    <label for="description" class="form-control-label">Photo Description</label>
                    <textarea class="form-control" name="photo_description" id="description" rows="5"></textarea>
                </div>
                <button class="btn-submit d-block mx-auto text-uppercase btn btn-outline-success btn-lg rounded-0" type="submit">Submit</button>
            </form>
        </article>
    </section>

@endsection
