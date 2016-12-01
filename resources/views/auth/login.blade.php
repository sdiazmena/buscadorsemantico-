@extends('layouts.nav')


@section('content')
<header id="head" class="secondary"></header>

<div class="container">
        <div class="row">
            
            <!-- Article main content -->
            <article class="col-xs-12 maincontent">
                <header class="page-header">
                    <h1 class="page-title">Ingresar</h1>
                </header>
                
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3 class="thin text-center">Ingresa a tu cuenta</h3>
                            <p class="text-center text-muted">Si no posees una cuenta, <a href="{{ url('/register') }}">Registrate!</a> de manera gratuita. </p>
                            <hr>
                            
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                            {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">Correo Electronico</label>

                                    <div class="col-md-6">
                                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password" class="col-md-4 control-label">Contraseña</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control" name="password">

                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="remember"> Recordarme
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-14 col-md-offset-3">
                                            <a class="btn btn-link" href="{{ url('/password/reset') }}">Olvido su Constraseña?</a>
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fa fa-btn fa-sign-in"></i> Ingresar
                                            </button>


                                        </div>
                                        <hr>
                                        <!--<div class="col-md-6 ">                   
                                            <a class="btn btn-block btn-social btn-facebook" onclick="_gaq.push(['_trackEvent', 'btn-social', 'click', 'btn-facebook']);" href="redirect"><span class="fa fa-facebook"></span>Fb Login
                                            </a>
                                        </div>-->
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
                
            </article>
            <!-- /Article -->

        </div>
    </div>  <!-- /container -->
@endsection