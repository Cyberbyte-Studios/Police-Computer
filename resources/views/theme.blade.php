<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $page_title or "Police Computer" }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
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
    <link href="{{ asset("/assets/dist/css/skins/skin-blue.min.css")}}" rel="stylesheet" type="text/css" />

      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
  </head>
  <body class="skin-blue">
    <div class="wrapper">

      {{-- Header --}}
      @include('header')

      {{-- Sidebar --}}
      @include('sidebar')

      {{-- Content Wrapper. Contains page content --}}
      <div class="content-wrapper">
        {{-- Content Header (Page header) --}}
        <section class="content-header">
          <h1>
            {{ $page_title or "Page Title" }}
            <small>{{ $page_description or null }}</small>
          </h1>
          {{-- You can dynamically generate breadcrumbs here --}}
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
            <li class="active">Here</li>
          </ol>
        </section>

        {{-- Main content --}}
        <section class="content">          
          {{-- Your Page Content Here --}}
          @yield('content')
        </section>{{-- /.content --}}
      </div>{{-- /.content-wrapper --}}

      {{-- Footer --}}
      @include('footer')

    </div>{{-- ./wrapper --}}

    {{-- REQUIRED JS SCRIPTS --}}

    {{-- jQuery 2.1.3 --}}
    <script src="{{ asset ("/assets/plugins/jQuery/jQuery-2.1.4.min.js") }}"></script>
    {{-- Bootstrap 3.3.2 JS --}}
    <script src="{{ asset ("/assets/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>
    {{-- DataTables --}}
    <script src="{{ asset ("/assets/plugins/datatables/jquery.dataTables.min.js") }}"></script>
    <script src="{{ asset ("/assets/plugins/datatables/dataTables.bootstrap.min.js") }}"></script>
    {{-- AdminLTE App --}}
    <script src="{{ asset ("/assets/dist/js/app.min.js") }}" type="text/javascript"></script>
    <script>
      $(function () {
        if( $('#datatable').length ) $('#datatable').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
      });
    </script>
  </body>
</html>