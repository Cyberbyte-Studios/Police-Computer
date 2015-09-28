@extends('blank')

@section('content')
  <body class="hold-transition register-page">
  <div class="register-box">
    <div class="register-logo">
      <a href="/"><b>Police</b> Computer</a>
    </div>

    <div class="register-box-body">
      @if (count($errors) > 0)
        <div class="alert alert-danger">
          <h4>Whoops!</h4>
            @foreach ($errors->all() as $error)
              {{ $error }}<br>
            @endforeach
        </div>
        <p class="login-box-msg">Try entering it again</p>
      @else
        <p class="login-box-msg">Get yourself a login</p>
      @endif
      <form action="/register" method="post">
        {!! csrf_field() !!}
        <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="Full name" name="name" value="{{ old('name') }}">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Retype password" name="password_confirmation">
          <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-8">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox" name="terms" id="terms"> I agree to the <a href="/terms">terms</a>
              </label>
            </div>
          </div><!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
          </div><!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-social btn-steam btn-flat"><i class="fa fa-steam"></i> Sign up using Steam</a>
      </div>

      <a href="/" class="text-center">I already have a login</a>
      <br><br>
      <div class="footer-small" style="text-align: center;">
        We have to put this...
        <div class="row">
          <div class="col-md-6" ><a href="http://steampowered.com">Powered by Steam</a></div>
          <div class="col-md-6">We use <a href="/terms#cookies">cookies</a></div>
        </div>
      </div>
    </div><!-- /.form-box -->
  </div><!-- /.register-box -->
@endsection