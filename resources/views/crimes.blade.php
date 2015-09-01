@extends('theme')

@section('content')
<div class='row'>
    {{-- Box --}}
  <div class='col-md-12'>
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">All Crimes</h3>
        <button type="submit" class="btn btn-primary pull-right">New Entry</button>
      </div><!-- /.box-header -->
      <div class="box-body">
        <table id="datatable" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Suspect</th>
            <th>Crime</th>
            <th>Description</th>
            <th>Bounty</th>
            <th>Active</th>
          </tr>
          </thead>
          <tbody>
          @foreach ($crimes as $crime)
            <tr>
              <td>{{ $crime->criminal->name }}</td>
              <td><a href="crime/{{ $crime->id }}">{{ $crime->crime }}</a></td>
              <td>{{ $crime->description }}</td>
              <td>{{ $crime->bounty }}</td>
              <td>{{ yesNo($crime->active) }}</td>
            </tr>
          @endforeach
          </tbody>
          <tfoot>
          <tr>
            <th>Suspect</th>
            <th>Crime</th>
            <th>Description</th>
            <th>Bounty</th>
            <th>Active</th>
          </tr>
          </tfoot>
        </table>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div>{{-- /.col --}}
</div>{{-- /.row --}}
@endsection