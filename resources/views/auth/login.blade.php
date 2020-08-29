<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>SINTROPÍA</title>

        <meta name="robots" content="NoIndex, NoFollow">
		<meta name="google" content="nositelinkssearchbox">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!-- bootstrap & fontawesome -->
        <link rel="stylesheet" href=" {{ asset('assets/css/plugin/bootstrap.min.css') }}" />

        <!-- text fonts -->
        <link rel="stylesheet" href=" {{ asset('assets/css/plugin/fonts.googleapis.com.css') }}" />

        <!-- ace styles -->
        <link rel="stylesheet" href=" {{ asset('assets/css/theme/ace.min.css') }}" class="ace-main-stylesheet" id="main-ace-style" />

        <!--[if lte IE 9]>
            <link rel="stylesheet" href="assets/css/ace-part2.min.css" />
        <![endif]-->
        <link rel="stylesheet" href=" {{ asset('assets/css/theme/ace-rtl.min.css') }}" />

        <link rel="stylesheet" type="text/css" href=" {{ asset('assets/css/app.css') }} ">

        <!--[if lte IE 9]>
          <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
        <![endif]-->

        <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

        <!--[if lte IE 8]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="login-layout blur-login login-background">
        <div class="main-container">
            <div class="main-content">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="login-container">

                            

                            <div class="position-relative">
                                <div id="login-box" class="login-box visible widget-box no-border login-box">
                                    <div class="widget-body">
                                        <div class="widget-main white"> 
                                            @include('alerts.request')
                                            @include('alerts.error')
                                            @include('alerts.success')
                                            
                                            <div class="fnd-login-logo"></div>

                                            <div class="space-30"></div>

                                            <form method="POST" action="{{ route('login') }}">
                                                @csrf
                                                <fieldset>
                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-left">
                                                            <input id="usuario" type="text" class="form-control @error('nickname') is-invalid @enderror" name="usuario"required autocomplete="usuario" autofocus placeholder="Usuario">
                                                            <i class="ace-icon fas fa-user"></i>
                                                        </span>
                                                    </label>

                                                    <label class="block clearfix">
                                                        <span class="block input-icon input-icon-left">
                                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">
                                                            <i class="ace-icon fas fa-lock"></i>
                                                        </span>
                                                    </label>

                                                    <div class="space"></div>
                                                    <div class="space"></div>

                                                    <div class="clearfix" style="text-align: center;">

                                                        <button type="submit" class="fnd-button-new fnd-button-main fnd-button-box-shadow" style="font-size: 1.2em!important;">
                                                            <i class="ace-icon fa fa-key"></i>
                                                            <span>Ingresar</span>
                                                        </button>
                                                    </div>

                                                    <div class="space-4"></div>
                                                </fieldset>
                                            </form>
                                        </div><!-- /.widget-main -->
                                    </div><!-- /.widget-body -->
                                </div><!-- /.login-box -->
                            </div><!-- /.position-relative -->
                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.main-content -->
        </div><!-- /.main-container -->

        <!-- basic scripts -->

        <!--[if !IE]> -->
        <script src=" {{ asset('assets/js/plugin/jquery-2.1.4.min.js') }} "></script>
        <script src=" {{ asset('assets/js/plugin/fontawesomekit.js') }} "></script>

        <!-- <![endif]-->

        <!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->

        <!-- inline scripts related to this page -->
    </body>
</html>


{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
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
@endsection --}}
