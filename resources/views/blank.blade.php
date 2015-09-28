<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $page_title or "Police Computer" }}</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    {{-- Bootstrap 3.3.2 --}}
    <link href="{{ asset("/assets/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
    {{-- Font Awesome Icons --}}
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    {{-- Ionicons --}}
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    {{-- DataTables --}}
    <link href="{{ asset("/assets/plugins/datatables/dataTables.bootstrap.css") }}" rel="stylesheet" type="text/css" />
    {{-- Theme style --}}
    <link href="{{ asset("/assets/dist/css/AdminLTE.css")}}" rel="stylesheet" type="text/css" />
    {{-- iCheck --}}
    <link href="{{ asset("/assets/plugins/iCheck/square/blue.css")}}" rel="stylesheet" type="text/css" />

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

@yield('content')

{{-- jQuery 2.1.3 --}}
<script src="{{ asset ("/assets/plugins/jQuery/jQuery-2.1.4.min.js") }}"></script>
{{-- Bootstrap 3.3.2 JS --}}
<script src="{{ asset ("/assets/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>
{{-- iCheck --}}
<script src="{{ asset ("/assets/plugins/iCheck/icheck.min.js") }}" type="text/javascript"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%'
        });
    });
</script>
</body>
</html>
