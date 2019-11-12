@extends('layouts.home')

@section('top')
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/css/dataTables.bootstrap.css">
@endsection

@section('content')

    {{-- <div class="box-header">
        <a href="{{ route('Item.create') }}" class="btn btn-primary" ><i class="glyphicon glyphicon-plus"></i> Add Item</a>
    </div> --}}

    <div class="box box-success box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">List of Item</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
            <table id="item-table" class="table table-bordered table-striped table-hover datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Minimum No</th>
                        <th>Status</th>
                        <th>Action</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($items as $item)
                        <tr>
                            <td></td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->quantity }}</td>
                            <td>RM {{ $item->price }}</td>
                            <td>{{ $item->category }}</td>
                            <td>{{ $item->minimum_no }}</td>
                            <td>Available</td>
                            <td class="center">
                                <a href="{{ route('Item.show', ['id'=>$item->id ]) }}" class="btn btn-info btn-sm custom"><i class="glyphicon glyphicon-eye-open"></i> VIEW</a>
                                <a href="{{ route('Item.edit', ['id'=>$item->id ]) }}" class="btn btn-warning btn-sm custom"><i class="glyphicon glyphicon-edit"></i> EDIT</a>
                            </td>
                            
                            <td class="center">
                                <form action="{{ route('Item.destroy', ['id'=>$item->id ]) }}" method="post" onsubmit="return confirm('Delete order {{ $item->name }} permanently?')" >
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button class="btn btn-danger btn-sm" type="submit" ><i class="glyphicon glyphicon-trash"></i> DELETE</button>
                                </form>
                            </td>
                           
                        </tr>
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
            $('#item-table').DataTable()
        })
    </script>
@endsection