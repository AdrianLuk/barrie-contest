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
    <div style="background-image: url( {{ asset('img/party.jpg') }} );" class="background-top">
    @include ('partials.countdown')
    </div>
    <div class="contest-cta jumbotron-fluid d-flex flex-column justify-content-center">
        <div class="contest-cta-content col-12 col-md-4 offset-md-7 ">
            <div class="contest-cta-heading text-center d-flex flex-column justify-content-around h-100">
                <h1 class="display-4 text-uppercase">Take your shot at</h1>
                <h2 class="contest-cta-capturing mb-4"><span class="sun-valley">Capturing</span>
                    <div class="barrie">BARRIE</div></h2>
                <h2 class="text-uppercase">Join our contest for a chance to have your photo featured on our website</h2>
                <a href="/enter-now" class="btn btn-outline-light rounded-0 text-uppercase mx-auto mt-4">Enter Now!</a>
            </div>
        </div>
    </div>
    <div class="contact">
        <h3 class="contact-heading text-uppercase text-center text-white">Getting In Touch</h3>
        <div class="contact-form container">
            <form class="needs-validation" action="/inquiries" method="POST" novalidate autocomplete="off">
                @csrf
                <div class="row my-5 mx-auto container p-0 pb-md-5">
                    <div class="bubble bubble-left col-12 col-md-4 offset-md-1">
                        <div class="form-group">
                            <label for="name">Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" value="{{Request::old('name')}}" autocomplete="nope" required>
                            <div class="invalid-feedback">The name field is required</div>
                            @if ($errors->has('name'))
                                <span class="form-text text-danger">{{$errors->first('name')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="email">Your Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" value="{{Request::old('email')}}" autocomplete="nope" required>
                            <div class="invalid-feedback">Please enter a valid email</div>
                            @if ($errors->has('email'))
                                <span class="form-text text-danger">{{$errors->first('email')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="phone">Your Phone Number</label>
                            <input type="tel" class="form-control" id="phone" name="phone" value="{{Request::old('phone')}}" autocomplete="nope">
                        </div>
                    </div>
                    <div class="bubble bubble-right col-12 col-md-4 offset-md-2">
                        <div class="form-group">
                            <label for="message">Question or Comment <span class="text-danger">*</span></label>
                            <textarea name="message" id="message" rows="5" class="form-control" value="{{Request::old('message')}}" required></textarea>
                            <div class="invalid-feedback">A question or comment is required</div>
                            @if ($errors->has('message'))
                                <span class="form-text text-danger">{{$errors->first('message')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" name="terms" id="terms" value="1" required>
                                <label class="custom-control-label" for="terms">
                                    I agree to receive BarrieING’s communications regarding BarrieING. You can withdraw your consent at any time. <span class="text-danger">*</span>
                                </label>
                                <div class="invalid-feedback">The terms must be accepted</div>
                                @if ($errors->has('terms'))
                                <span class="form-text text-danger">{{$errors->first('terms')}}</span>
                            @endif
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-light mx-auto text-uppercase d-block px-5 rounded-0">Send</button>
            </form>
        </div>
    </div>
    @endsection

