@extends('admin.layout.app')
@extends('admin.nav')
@extends('admin.sidebar')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">All Leave</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All Leave Record</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>USER NAME</th>
                                        <th>START DATE</th>
                                        <th>END DATE</th>
                                        <th>REASON</th>
                                        <th>STATUS</th>
            
                                        @if (isset($leave[0]))
                                            @if ($leave[0]->status === 'pending')
                                                <th>ACTION</th>
                                            @endif
                                        @else
                                            <th>ACTION</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($leave as $data)
                                        <tr>
                                            <td> {{ $data->id }} </td>
                                            <td>{{ $data->user->name }}</td>
                                            <td> {{ $data->start_date }} </td>
                                            <td> {{ $data->end_date }}</td>
                                            <td> {{ $data->reason }} </td>
                                            <td>
                                                @if ($data->status === 'pending')
                                                    <span class="badge bg-warning">Pending</span>
                                                @elseif($data->status === 'approved')
                                                    <span class="badge bg-success">Approved</span>
                                                @else
                                                    <span class="badge bg-danger">Rejected</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($data->status === 'pending')
                                                    <form id="myForm" action="{{ route('storeLeaveStatus', $data->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        <input type="hidden" name="status" id="statusInput">
                                                    </form>
                                                    <button onclick="submitForm('approved')"
                                                        class="btn btn-primary">A</button>
                                                    <button onclick="submitForm('rejected')"
                                                        class="btn btn-danger">R</button>
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

    <script>
        function submitForm(value) {
            document.getElementById('statusInput').value = value;
            document.getElementById('myForm').submit();
        }
    </script>
@endsection
