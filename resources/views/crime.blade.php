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
                    <form action="/crime/{{ $crime->id }}" method="post" name="test" id="test">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="criminalName">Suspect Name</label>
                            <input type='text' id="criminalName" class='form-control input-sm'
                                   value="{{ $crime->criminal->name }}"/>
                        </div>
                        <div class="form-group">
                            <label for="criminalDescription">Suspect Description</label>
                            <textarea id="criminalDescription" class="form-control"
                                      rows="2">{{ $crime->criminal->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="crimeName">Name</label>
                            <input type='text' id="crimeName" class='form-control input-sm'
                                   value="{{ $crime->crime }}"/>
                        </div>
                        <div class="form-group">
                            <label for="crimeBounty">Bounty</label>
                            <input type='text' id="crimeBounty" class='form-control input-sm'
                                   value="{{ $crime->bounty }}"/>
                        </div>
                        <div class="form-group">
                            <label for="crimeDescription">Description</label>
                            <textarea id="crimeDescription" class="form-control"
                                      rows="3">{{ $crime->description }}</textarea>
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
                    <button type="submit" class="btn btn-primary pull-right" data-toggle="modal" data-target="#myModal">
                        New Entry
                    </button>
                </div>
                {{-- /.box-header --}}
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
                </div>
                {{-- /.box-body --}}
            </div>
            <!-- /.box -->
        </div>{{-- /.col --}}
    </div>{{-- /.row --}}

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Add Entry</h4>
                </div>
                <div class="modal-body">
                    <form action='#'>
                        <div class="form-group">
                            <label for="entry">Description</label>
                            <textarea id="entry" class="form-control" rows="3"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Add Entry</button>
                </div>
            </div>
        </div>
    </div>
@endsection