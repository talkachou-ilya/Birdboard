@extends('layouts.app')

@section('content')
    <form
        method="POST"
        action="{{ route('register') }}"
        class="form"
    >
        @csrf

        <h2 class="text-2xl mb-10 text-center">Register</h2>

        <div class="mb-6">
            <label for="name" class="tex-sm mb-2 block">Name</label>

            <input
                type="text" name="name" id="name"
                class="input w-full" value="{{ old('name') }}" required autofocus>
        </div>

        <div class="mb-6">
            <label for="email" class="tex-sm mb-2 block">E-Mail Address</label>

            <input
                type="email" name="email" id="email"
                class="input w-full" value="{{ old('email') }}" required>
        </div>

        <div class="mb-6">
            <label for="password" class="tex-sm mb-2 block">Password</label>

            <input
                type="password" name="password" id="password"
                class="input w-full" required>
        </div>

        <div class="mb-6">
            <label for="password-confirm" class="tex-sm mb-2 block">Confirm Password</label>

            <input
                type="password" name="password_confirmation" id="password-confirm"
                class="input w-full" required>
        </div>

        <div class="mb-3">
            <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

            <label class="tex-sm" for="remember">Remember Me</label>
        </div>

        <div class="">
            <button class="button mr-2" type="submit">Register</button>
        </div>

        @if ($errors->any())
            <div class="mt-6 bg-red-200 p-3 rounded-lg grid gap-3">
                @foreach($errors->all() as $error)
                    <p class="text-sm">{{ $error }}</p>
                @endforeach
            </div>
        @endif
    </form>
    {{--<div class="container">--}}
    {{--    <div class="row justify-content-center">--}}
    {{--        <div class="col-md-8">--}}
    {{--            <div class="card">--}}
    {{--                <div class="card-header">{{ __('Register') }}</div>--}}

    {{--                <div class="card-body">--}}
    {{--                    <form method="POST" action="{{ route('register') }}">--}}
    {{--                        @csrf--}}

    {{--                        <div class="form-group row">--}}
    {{--                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

    {{--                            <div class="col-md-6">--}}
    {{--                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

    {{--                                @error('name')--}}
    {{--                                    <span class="invalid-feedback" role="alert">--}}
    {{--                                        <strong>{{ $message }}</strong>--}}
    {{--                                    </span>--}}
    {{--                                @enderror--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="form-group row">--}}
    {{--                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

    {{--                            <div class="col-md-6">--}}
    {{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

    {{--                                @error('email')--}}
    {{--                                    <span class="invalid-feedback" role="alert">--}}
    {{--                                        <strong>{{ $message }}</strong>--}}
    {{--                                    </span>--}}
    {{--                                @enderror--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="form-group row">--}}
    {{--                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

    {{--                            <div class="col-md-6">--}}
    {{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

    {{--                                @error('password')--}}
    {{--                                    <span class="invalid-feedback" role="alert">--}}
    {{--                                        <strong>{{ $message }}</strong>--}}
    {{--                                    </span>--}}
    {{--                                @enderror--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="form-group row">--}}
    {{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

    {{--                            <div class="col-md-6">--}}
    {{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
    {{--                            </div>--}}
    {{--                        </div>--}}

    {{--                        <div class="form-group row mb-0">--}}
    {{--                            <div class="col-md-6 offset-md-4">--}}
    {{--                                <button type="submit" class="btn btn-primary">--}}
    {{--                                    {{ __('Register') }}--}}
    {{--                                </button>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </form>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</div>--}}
@endsection
