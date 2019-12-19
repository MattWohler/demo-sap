@extends('layouts.login')

@section('content')
<div class="m-login__signin">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="m-login__head">
        <h3 class="m-login__title">Sign In</h3>
    </div>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group m-form__group">
            <input class="form-control m-input" type="email" placeholder="Email" name="email" autocomplete="off" value="{{ old('email') }}" required autofocus>

            @if ($errors->has('email'))
                <div id="email-error" class="form-control-feedback">
                    {{ $errors->first('email') }}
                </div>
            @endif
        </div>
        <div class="form-group m-form__group">
            <input class="form-control m-input m-login__form-input--last" type="password" placeholder="Password" name="password" required>

            @if ($errors->has('password'))
                <div id="password-error" class="form-control-feedback">
                    {{ $errors->first('password') }}
                </div>
            @endif
        </div>
        <div class="row m-login__form-sub">
            <div class="col m--align-left">
                <label class="m-checkbox m-checkbox--focus">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember me
                    <span></span>
                </label>
            </div>
            <div class="col m--align-right">
                <a href="javascript:;" id="m_login_forget_password" class="m-link">Forget Password ?</a>
            </div>
        </div>
        <div class="m-login__form-action">
            <button id="m_login_signin_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">Sign In</button>
        </div>
    </form>
</div>
<div class="m-login__forget-password">
    <div class="m-login__head">
        <h3 class="m-login__title">Forgotten Password ?</h3>
        <div class="m-login__desc">Enter your email to reset your password:</div>
    </div>
    <form class="m-login__form m-form" method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="form-group m-form__group">
            <input class="form-control m-input" type="email" placeholder="Email" name="email" id="m_email" autocomplete="off" value="{{ old('email') }}" required>
        </div>
        @if ($errors->has('email'))
            <div id="email-error" class="form-control-feedback">
                {{ $errors->first('email') }}
            </div>
        @endif
        <div class="m-login__form-action">
            <button id="m_login_forget_password_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air">Request</button>
            <button id="m_login_forget_password_cancel" class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom">Cancel</button>
        </div>
    </form>
</div>
@endsection
