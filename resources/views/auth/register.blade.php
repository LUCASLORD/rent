@extends('layouts.access')

@section('content')
<div class="container">
    <div class="row">

        <div class="col s12 m6">

            <form method="POST" action="{{ route('register') }}">

                @csrf

                <div class="card blue-grey darken-1">

                    <div class="card-content white-text">

                        <span class="card-title">{{ __('Registrar') }}</span>

                        <div class="row">
                                <input id="name" type="text" class="validate {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                                <label for="name">{{ __('Nome') }}</label>
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="row">
                            <input id="email" type="email" class="validate {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required">
                            <label for="email">{{ __('E-Mail Address') }}</label>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="row">
                            <input id="password" type="password" class="validate{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                            <label for="password">{{ __('Password') }}</label>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="row">
                            <input id="password-confirm" type="password" class="validate" name="password_confirmation" required>
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>
                        </div>

                        <div class="row">
                            <button type="submit" class="btn btn-small">
                                {{ __('Registrar') }}
                            </button>
                        </div>
                    </div>
                </div><!--card-->
            </form><!--form-->
        </div><!--col-->
    </div><!--row-->
</div><!--container-->
@endsection
