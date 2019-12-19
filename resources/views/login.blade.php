<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta name="description" content="Latest updates and statistic charts">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum -scale=1, shrink-to-fit=no">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
            WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    </head>

    <!-- end::Head -->

    <!-- begin::Body -->
    <!-- begin::Body -->
    <body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

        <!-- begin:: Page -->
        <div class="m-grid m-grid--hor m-grid--root m-page" id="app">
            <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-grid--tablet-and-mobile m-grid--hor-tablet-and-mobile m-login m-login--1 m-login--signin" id="m_login">
                <div class="m-grid__item m-grid__item--order-tablet-and-mobile-2 m-login__aside">
                    <div class="m-stack m-stack--hor m-stack--desktop">
                        <div class="m-stack__item m-stack__item--fluid">
                            <div class="m-login__wrapper">
                                <div class="m-login__logo">
                                    <a href="#">
                                        <img alt="" src="{{ asset('img/logo.png') }}"/>
                                    </a>
                                </div>
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
                            </div>
                        </div>
                    </div>
                </div>
                <div class="m-grid__item m-grid__item--fluid m-grid m-grid--center m-grid--hor m-grid__item--order-tablet-and-mobile-1  m-login__content m-grid-item--center" style="background-image: url({{ asset('img/bg/bg-4.jpg') }})">
                    <div class="m-grid__item">
                        <h3 class="m-login__welcome">Media Buyers System</h3>
                    </div>
                </div>
            </div>
        </div>

        <!-- end:: Page -->

        <script src="{{ asset('js/app.vue.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/login.js') }}" type="text/javascript"></script>
    </body>

    <!-- end::Body -->
</html>
