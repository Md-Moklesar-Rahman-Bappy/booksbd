@extends('layouts.app')

@section('content')
<div class="container">
    <div class="p-5 my-5 rounded-3 shadow div-custom-padding">
        <div class="row">
            <div class="col-md-6 p-0 m-0">
                    <img src="{{ asset('frontend/img/sign-up.jpg') }}" alt="sign up" class="img-fluid">
            </div>
            <div class="col-md-6">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <h3 class="text-center">
                            <span class="fw-bold ">
                                বুকস বিডিতে
                            </span> অ্যাকাউন্ট করুন
                        </h3>
                        <hr>
                        <div class="mx-auto text-start">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="cform-label">
                                {{ __('পুরো নাম') }}
                            </label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="number" class="form-label">
                                {{ __('মোবাইল') }}
                            </label>
                            <div class="col-md-6">
                                <input id="number" type="number" class="form-control @error('number') is-invalid @enderror" name="number" value="{{ old('number') }}" required autocomplete="number">
                                @error('number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="cform-label">
                                {{ __('ইমেইল ঠিকানা') }}
                            </label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="cform-label">
                                {{ __('Password') }}
                            </label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $message }}
                                        </strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="password-confirm" class="cform-label">
                                {{ __('Confirm Password') }}
                            </label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="d-flex my-3 align-items-center">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">আমি বুকস বিডির পরিষেবার
                                                শর্তাবলী, গোপনীয়তা নীতি এবং ফেরত নীতিতে সম্মত।</label>
                                        </div>
                        <div class="d-grid">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-lg rounded-0">
                                    {{ __('রেজিষ্টার') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                
                <span class="d-block my-4 text-muted text-center">অথবা সোশ্যাল মিডিয়া দিয়ে অ্যাকাউন্ট
                    করুন</span>
                <hr>
                <div class="social-sign-up-section d-grid">
                    <div class="d-flex justify-content-center gap-lg-3 gap-sm-3">
                        <a href="#" class="text-decoration-none text-dark">
                            <div class="social-login google">
                                <i class="fab fa-google"></i>
                            </div>
                        </a>
                        <a href="#" class="text-decoration-none text-dark">
                            <div class="social-login facebook">
                                <i class="fab fa-facebook-f"></i>
                            </div>
                        </a>
                        <a href="#" class="text-decoration-none text-dark">
                            <div class="social-login twitter">
                                <i class="fab fa-twitter"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
