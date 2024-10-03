@extends('layouts.app')

@section('content')
<div class="container" style="display: flex; justify-content: center; align-items: center; height: 100vh; background-color: black;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background-color: #333; color: #fc6203; border-color: #fc6203; width: 600px; padding: 20px;">
                <div class="card-header" style="background-color: #fc6203; color: black; text-align: center; font-size: 24px;">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end" style="color: #fc6203; width:200px;">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus style="background-color: black; width:100%; color: #fc6203; border-color: #fc6203;">

                                @error('name')
                                    <span class="invalid-feedback" role="alert" style="color: #fc6203;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end" style="color: #fc6203; width:200px;">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" style="background-color: black; width:100%; color: #fc6203; border-color: #fc6203;">

                                @error('email')
                                    <span class="invalid-feedback" role="alert" style="color: #fc6203;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end" style="color: #fc6203; width:200px;">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" style="background-color: black; width:100%; color: #fc6203; border-color: #fc6203;">

                                @error('password')
                                    <span class="invalid-feedback" role="alert" style="color: #fc6203;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end" style="color: #fc6203; width:200px;">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" style="background-color: black; width:100%; color: #fc6203; border-color: #fc6203;">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="background-color: #fc6203; width:80%; color: black; border-color: #fc6203;">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
