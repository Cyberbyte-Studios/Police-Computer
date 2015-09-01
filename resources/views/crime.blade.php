@extends('theme')

@section('content')
<div class='row'>
  <div class='col-md-6'>
    {{-- Box --}}
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Crime Details</h3>
      </div>
      <div class="box-body">
        {{$crime->criminal->name}}
        <form action='#'>
          <div class="form-group">
            <label for="criminalName">Suspect Name</label>
            <input type='text' id="criminalName" class='form-control input-sm' value="{{ $crime->criminal->name }}"/>
          </div>
          <div class="form-group">
            <label for="criminalDescription">Suspect Description</label>
            <textarea id="criminalDescription" class="form-control" rows="2">{{ $crime->criminal->description }}</textarea>
          </div>
          <div class="form-group">
            <label for="crimeName">Name</label>
            <input type='text' id="crimeName" class='form-control input-sm' value="{{ $crime->crime }}"/>
          </div>
          <div class="form-group">
            <label for="crimeBounty">Bounty</label>
            <input type='text' id="crimeBounty" class='form-control input-sm' value="{{ $crime->bounty }}"/>
          </div>
          <div class="form-group">
            <label for="crimeDescription">Description</label>
            <textarea id="crimeDescription" class="form-control" rows="3">{{ $crime->description }}</textarea>
          </div>
          <button type="submit" class="btn btn-primary pull-right">Update</button>
        </form>
        
      </div>{{-- /.box-body --}}
      <div class="box-footer">
        
      </div>{{-- /.box-footer--}}
    </div>{{-- /.box --}}
  </div>{{-- /.col --}}
  <div class='col-md-6'>
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Crime Log</h3>
        <button type="submit" class="btn btn-primary pull-right">New Entry</button>
      </div><!-- /.box-header -->
      <div class="box-body">
        <table id="datatable" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Time</th>
            <th>User</th>
            <th>Comment</th>
          </tr>
          </thead>
          <tbody>
          @foreach ($logs as $log)
            <tr>
              <td>{{ $log->updated_at }}</td>
              <td>{{ $log->user_id }}</td>
              <td>{{ $log->description }}</td>
            </tr>
          @endforeach
          </tbody>
          <tfoot>
          <tr>
            <th>Time</th>
            <th>User</th>
            <th>Comment</th>
          </tr>
          </tfoot>
        </table>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div>{{-- /.col --}}
</div>{{-- /.row --}}
@endsection