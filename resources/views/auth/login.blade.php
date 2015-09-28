@extends('blank')

@section('content')
  <body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="/"><b>Police</b> Computer</a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
      @if (count($errors) > 0)
        <div class="alert alert-danger">
          <h4>Whoops!</h4>
          @foreach ($errors->all() as $error)
            {{ $error }}<br>
          @endforeach
        </div>
        <p class="login-box-msg">Try logging in again</p>
      @else
        <p class="login-box-msg">Sign in to start your session</p>
      @endif
      <form action="/" method="post">
        {!! csrf_field() !!}
        <div class="form-group has-feedback">
          <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Password" name="password" id="password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-8">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox" name="remember"> Remember Me
              </label>
            </div>
          </div><!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div><!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-social btn-steam btn-flat"><i class="fa fa-steam"></i> Sign in using Steam</a>
      </div><!-- /.social-auth-links -->

      <a href="/password">I forgot my password</a><br>
      <a href="/register" class="text-center">Sign up</a>

      <br><br>
      <div class="footer-small" style="text-align: center;">
        We have to put this...
        <div class="row">
          <div class="col-md-6" ><a href="http://steampowered.com">Powered by Steam</a></div>
          <div class="col-md-6">We use <a href="/terms#cookies">cookies</a></div>
        </div>
      </div>

    </div><!-- /.login-box-body -->
  </div><!-- /.login-box -->
@endsection