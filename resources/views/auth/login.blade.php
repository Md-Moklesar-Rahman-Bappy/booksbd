@extends('layouts.app')

@section('content')
<div class="container">
    <div class="p-5 my-4 rounded-3 shadow div-custom-padding">
        <div class="row">
                <div class="col-md-6 p-0 m-0">
                    <img src="{{ asset('frontend/img/login.jpg') }}" alt="login" class="img-fluid">
                </div>
            <div class="col-md-6">
                            <h3 class="text-center">
                                <span class="fw-bold ">বুকস বিডিতে</span> সাইনইন করুন
                            </h3>
                            <hr>
                            <div class="mx-auto text-start">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">
                                            {{ __('ইমেইল ঠিকানা') }}
                                        </label>
                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control rounded-0 @error('email') is-invalid @enderror" id="exampleInputEmail1" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
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
                                        <label for="password" class="form-label">
                                            {{ __('পাসওয়ার্ড') }}
                                        </label>
                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>
                                                        {{ $message }}
                                                    </strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="d-flex mb-5 align-items-center">
                                        <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="remember">
                                                    {{ __('আমাকে মনে রাখুন') }}
                                                </label>
                                            </div>
                                        </div>
                            </div>
                                    <div class="form-group row mb-0">
                                        <div class="cd-grid">
                                            <button type="submit" class="btn btn-primary btn-lg rounded-0">
                                                {{ __('সাইন ইন') }}
                                            </button>
                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('পাসওয়ার্ড ভুলে গেছেন?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </form>
        </div>
    </div>
</div>

@endsection