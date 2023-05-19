@extends('layouts.app')
@section('title','Тіркелу')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5 mb-5">
                <h2 class="text-center">{{ __('Тіркелу') }}</h2>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <div class="form-group mt-2 col-6 mx-auto">
                            <label for="name" class="col-form-label ">{{ __('Есімі:') }}</label>
                             <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="form-group mt-2 col-6 mx-auto">
                            <label for="email" class="col-form-label ">{{ __('Электронды мекен-жайы:') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="form-group mt-2 col-6 mx-auto">
                            <label for="password" class="col-form-label">{{ __('Құпия сөз:') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="form-group mt-2 col-6 mx-auto">
                            <label for="password-confirm" class=" col-form-label ">{{ __('Құпия сөзді қайталаңыз:') }}</label>
                             <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4 mx-auto">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Тіркелу') }}
                                </button>
                            </div>
                        </div>
                    </form>
\        </div>
    </div>
</div>
@endsection
