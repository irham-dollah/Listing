@extends('layouts.home')

@section('top')
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/css/dataTables.bootstrap.css">
@endsection

@section('content')

    {{-- <div class="box-header">
        <a href="{{ route('User.create') }}" class="btn btn-primary" ><i class="glyphicon glyphicon-plus"></i> Add User</a>
    </div> --}}

    <div class="box box-success box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">List of User</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
            <table id="user-table" class="table table-bordered table-striped table-hover datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Category</th>
                        <th>Created At</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                       @if ($user->type != "super_admin")
                        <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->type }}</td>
                                <td>{{ $user->created_at }}</td>
                                {{-- <td class="center">
                                    <a href="{{ route('User.show', ['id'=>$user->id ]) }}" class="btn btn-info btn-sm custom"><i class="glyphicon glyphicon-eye-open"></i> VIEW</a>
                                    <a href="{{ route('User.edit', ['id'=>$user->id ]) }}" class="btn btn-warning btn-sm custom"><i class="glyphicon glyphicon-edit"></i> EDIT</a>
                                </td> --}}
                                
                                <td class="center">
                                    <form action="{{ route('User.destroy', ['id'=>$user->id ]) }}" method="post" onsubmit="return confirm('Delete order {{ $user->name }} permanently?')" >
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button class="btn btn-danger btn-sm" type="submit" ><i class="glyphicon glyphicon-trash"></i> DELETE</button>
                                    </form>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
@endsection

@section('bottom')
    <!-- DataTables -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/dataTables.bootstrap.min.js"></script>

    <script>
        $(function () {
            $('#user-table').DataTable()
        })
    </script>
@endsection