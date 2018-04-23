@extends('layouts.access')

@section('content')
<div class="container">

    <div class="row">

        <div class="col s12 m6 push-xl3">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="card purple">

                    <div class="card-content white-text">

                        <span class="card-title center-align">{{ __('LOCADORA LOGIN') }}</span>

                        <div class="row">
                            <input id="email" type="email" class="validate{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                            <label for="email" class="white-text">{{ __('E-Mail Address') }}</label>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="row">
                            <input id="password" type="password" class="validate{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                            <label for="password" class="white-text">{{ __('Password') }}</label>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="row">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <span class="white-text">LEMBRAR</span>
                            </label>
                        </div>
                        <div class="row s6">
                            <div class="col s6">
                                <button type="submit" class="btn btn-small">
                                    {{ __('Login') }}
                                </button>
                            </div>
                            <div class="col s6">
                                <a class="btn btn-small yellow red-text text" href="{{ route('password.request') }}">
                                    {{ __('senha?') }}
                                </a>
                            </div>
                        </div>

                    </div><!--card-content-->
                </div><!--card-->
            </form><!--form-->
        </div><!--col-->
    </div><!--row-->
</div><!--container-->
@endsection
