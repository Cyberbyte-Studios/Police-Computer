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
        <p class="login-box-msg">Keep trying</p>
      @else
        <p class="login-box-msg">What do you want it to be this time?</p>
      @endif
      <form action="/password/reset" method="post">
        {!! csrf_field() !!}
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="form-group has-feedback">
          <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Password Confirmation" name="password_confirmation">
          <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-6">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Change Password</button>
          </div><!-- /.col -->
        </div>
      </form>
      <br>
      <a href="/">Wait, I don't want to reset it</a>
    </div><!-- /.login-box-body -->
  </div><!-- /.login-box -->
@endsection