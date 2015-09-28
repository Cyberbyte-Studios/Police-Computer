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
        <p class="login-box-msg">Hmm, Try again</p>
      @else
        <p class="login-box-msg">Enter your email to reset your password</p>
      @endif
      <form action="/password" method="post">
        {!! csrf_field() !!}
        <div class="form-group has-feedback">
          <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Reset</button>
          </div><!-- /.col -->
        </div>
      </form>
      <br>
      <a href="/">I remember it now</a>
    </div><!-- /.login-box-body -->
  </div><!-- /.login-box -->
@endsection