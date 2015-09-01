@extends('theme')

@section('content')
<div class='row'>
  <div class='col-md-6'>
    {{-- Box --}}
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Criminal Record Lookup</h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
          <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        <form action='#'>
          <div class="col-sm-10">
            <input type='text' placeholder='Search' class='form-control input-sm' />
          </div>
          <div class="col-sm-2">
            <button type="submit" class="btn btn-primary pull-right">Search</button>
          </div>
        </form>
        
      </div>{{-- /.box-body --}}
      <div class="box-footer">
        
      </div>{{-- /.box-footer--}}
    </div>{{-- /.box --}}
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Active Crimes</h3>
      </div><!-- /.box-header -->
      <div class="box-body">
        <table id="datatable" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>Name</th>
              <th>Crime</th>
              <th>Bounty</th>
              <th>Details</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($crimes as $crime)
            <tr>
              <td>{{ $crime->criminal->name }}</td>
              <td><a href="/crime/{{ $crime->id }}">{{ $crime->crime }}</a></td>
              <td>{{ $crime->bounty }}</td>
              <td>{{ str_limit($crime->description, 50) }}</td>
            </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th>Name</th>
              <th>Crime</th>
              <th>Bounty</th>
              <th>Details</th>
            </tr>
          </tfoot>
        </table>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div>{{-- /.col --}}
  <div class='col-md-6'>
    {{-- Box --}}
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Second Box</h3>
        <div class="box-tools pull-right">
          <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
          <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">
        Add chart of crimes and criminals here.
      </div>{{-- /.box-body --}}
    </div>{{-- /.box --}}
  </div>{{-- /.col --}}
</div>{{-- /.row --}}
@endsection