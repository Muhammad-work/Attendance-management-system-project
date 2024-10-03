@extends('admin.layout.app')
@extends('admin.nav')
@extends('admin.sidebar')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">All User</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All User Record</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <!-- Alert messages for success and deletion -->
                            @if (session('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @elseif (session('successdel'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('successdel') }}
                                </div>
                            @endif

                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>USER IMG</th>
                                        <th>NAME</th>
                                        <th>EMAIL</th>
                                        <th>MOBILE</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($users->isEmpty())
                                        <tr>
                                            <td colspan="6">No data found!</td>
                                        </tr>
                                    @else
                                        @foreach ($users as $data)
                                            <tr>
                                                <td>{{ $data->id }}</td>
                                                <td>
                                                    <img style="width: 40px" src="{{ asset('storage/' . $data->profile_picture) }}" alt="">
                                                </td>
                                                <td>{{ $data->name }}</td>
                                                <td>{{ $data->email }}</td>
                                                <td>{{ $data->mobile }}</td>
                                                <td>
                                                    <a href="{{ route('editUser', $data->id) }}" class="btn btn-primary">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </a>
                                                    <form action="{{ route('deleteUser', $data->id) }}" method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
