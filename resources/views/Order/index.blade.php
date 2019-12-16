@extends('layouts.home')

@section('top')
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/css/dataTables.bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.12/css/select2.min.css">
@endsection

@section('content')
    <div class="box box-success box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">List of Order</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
            <table id="order-table" class="table table-bordered table-striped table-hover datatable">
                <thead>
                    <tr>
                        {{-- <th>No</th> --}}
                        <th>PIC</th>
                        <th>Barcode</th>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Total Price</th>
                        <th>Detail</th>
                        <th>Status</th>
                        <th>Action</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr>
                            {{-- <td>{{ $order->id }}</td> --}}
                            <td>{{$order->user->name}}</td>
                            <td>{{ $order->item_id }}</td>
                            <td>{{ $order->item->name }}</td>
                            <td>{{ $order->quantity }}</td>
                            <td>RM {{ $order->total_price }}</td>
                            <td>{{ $order->created_at }}</td>
                            @if ($order->status=='Incomplete')
                                <td class="center">
                                    <span class="label label-default">To receive</span>
                                </td>
                            @else
                                <td class="center">
                                    <span class="label label-primary">Received</span>
                                </td>
                            @endif
                            {{-- @if(Auth::user()->name==) --}}
                            <td class="center">
                                {{-- <a href="{{ route('Order.show', ['id'=>$order->id ]) }}" class="btn btn-info btn-sm custom"><i class="glyphicon glyphicon-eye-open"></i> MORE</a> --}}
                                <a href="{{ route('Order.edit', ['id'=>$order->id ]) }}" class="btn btn-info btn-sm custom"><i class="glyphicon glyphicon-eye-open"></i> EDIT</a>
                            </td>
                            @if(Auth::user()->type=='admin'||Auth::user()->type=='super_admin')
                                <td class="center">
                                    <form action="{{ route('Order.destroy', ['id'=>$order->id ]) }}" method="post" onsubmit="return confirm('Delete order {{ $order->name }} permanently?')" >
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button class="btn btn-danger btn-sm" type="submit" ><i class="glyphicon glyphicon-trash"></i> DELETE</button>
                                    </form>
                                </td>
                            @else
                                <td class="center">
                                    <b><p>Only for admin</p></b>   
                                </td>
                            @endif 
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
            $('#order-table').DataTable()
        })
    </script>
@endsection