@extends('layouts.app')

@section('content')
<div class="container" style="display: flex; justify-content: center; align-items: center; height: 100vh; background-color: black;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background-color: #333; color: #fc6203; border-color: #fc6203; width: 600px; padding: 0px;">
                <div class="card-header" style="background-color: #fc6203; color: black; text-align: center; font-size: 24px;">{{ __('Login') }}</div>

                <div class="card-body">

                    {{-- Success Message --}}
                    @if (session('status'))
                        <div class="alert alert-success" style="color: black; background-color: #fc6203;">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- Error Message --}}
                    @if ($errors->any())
                        <div class="alert alert-danger" style="color: #fc6203; background-color: black;">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end" style="color: #fc6203; width:200px;">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus style="background-color: black; width:80%; color: #fc6203; border-color: #fc6203;">

                                @error('email')
                                    <span class="invalid-feedback" role="alert" style="color: #fc6203;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end" style="color: #fc6203;">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" style="background-color: black; width:80%; color: #fc6203; border-color: #fc6203;">

                                @error('password')
                                    <span class="invalid-feedback" role="alert" style="color: #fc6203;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember" style="color: #fc6203;">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="background-color: #fc6203; width:40%; color: black; border-color: #fc6203;">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="color: #fc6203;">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
