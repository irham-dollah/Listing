@extends('layouts.home')

@section('top')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/css/dataTables.bootstrap.css">
@endsection

@section('content')

    <div class="box box-success box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">List of User</h3>
            @if(Auth::user()->type=='a')
                <a href="{{ route('User.create', ['id'=>Auth::user()->id ]) }}" class="btn btn-info">ADD</a>
            @endif
        </div>
        <div class="box-body table-responsive">
            <table id="user-table" class="table table-bordered table-striped table-hover datatable">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Edit</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->type }}</td>
                                @if(Auth::user()->type=='a')
                                <td class="center">
                                    <a href="{{ route('User.edit', ['id'=>$user->id ]) }}" class="btn btn-warning btn-sm custom"><i class="glyphicon glyphicon-edit"></i> EDIT</a>
                                </td>
                                <td class="center">
                                    <form action="{{ route('User.destroy', ['id'=>$user->id ]) }}" method="post" onsubmit="return confirm('Delete order {{ $user->name }} permanently?')" >
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <button class="btn btn-danger btn-sm" type="submit" ><i class="glyphicon glyphicon-trash"></i> DELETE</button>
                                    </form>
                                </td>
                                @else
                                <td class="center">
                                    <b><p>Only for admin</p></b>   
                                </td>
                                <td class="center">
                                    <b><p>Only for admin</p></b>   
                                </td>
                                @endif
                            </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
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