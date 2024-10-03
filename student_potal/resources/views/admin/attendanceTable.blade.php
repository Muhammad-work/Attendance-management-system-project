@extends('admin.layout.app')
@extends('admin.nav')
@extends('admin.sidebar')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">All Attendance</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All Attendance Record</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>USER NAME</th>
                                        <th>DATE</th>
                                        <th>status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($attendance as $data)
                                        <tr>
                                            <td> {{ $data->id }} </td>
                                            <td>{{ $data->user->name }}</td>
                                            <td>{{ $data->date }}</td>
                                            <td>
                                                @if ($data->status === 'present')
                                                    <span class="badge bg-success">Present</span>
                                                @elseif($data->status === 'absent')
                                                    <span class="badge bg-danger">Absent</span>
                                                @else
                                                    <span class="badge bg-warning">Leave</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <script>
        function submitForm(value) {
            document.getElementById('statusInput').value = value;
            document.getElementById('myForm').submit();
        }
    </script> --}}
@endsection
