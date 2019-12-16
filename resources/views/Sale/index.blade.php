@extends('layouts.home')

@section('top')
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/css/dataTables.bootstrap.css">
@endsection

@section('content')
    <div class="box box-success box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">List of Sale</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive">
            <table id="sale-table" class="table table-bordered table-striped table-hover datatable">
                <thead>
                    <tr>
                        <th>Seller</th>
                        <th>Total Sale</th>
                        <th>Detail</th>
                        <th>View Item</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sales as $sale)
                        <tr>
                            {{-- <td>{{ $sale->id }}</td> --}}
                            <td>{{ $sale->user->name }}</td>
                            {{-- <td>{{ $sale->item_id }}</td>
                            <td>{{ $sale->item->name }}</td>--}}
                            {{-- @if ($sale->id == $sale->sale_item->sale_id)
                                @foreach ($sale_items as $sale_item)
                                    <td>{{ $sale->sale_item->item_id }}:{{ $sale->sale_item->quantity }}</td>
                                @endforeach
                            @endif  --}}
                            <td>RM {{ $sale->total_price }}</td>
                            <td>{{ $sale->created_at }}</td>
                            <td class="center">
                                <a href="{{ route('Sale.show', ['id'=>$sale->id ]) }}" class="btn btn-info btn-sm custom"><i class="glyphicon glyphicon-eye-open"></i> MORE</a>
                                {{-- <a href="{{ route('Item.edit', ['id'=>$item->id ]) }}" class="btn btn-warning btn-sm custom"><i class="glyphicon glyphicon-edit"></i> EDIT</a> --}}
                            </td>
                            @if(Auth::user()->type=='admin'||Auth::user()->type=='super_admin')
                                {{-- <td class="center">
                                    <a href="{{ route('Sale.edit', ['id'=>$sale->id ]) }}" class="btn btn-warning btn-sm custom"><i class="glyphicon glyphicon-edit"></i> EDIT</a>
                                </td>  --}}
                                <td class="center">
                                    <form action="{{ route('Sale.destroy', ['id'=>$sale->id ]) }}" method="post" onsubmit="return confirm('Delete sale {{ $sale->name }} permanently?')" >
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
            $('#sale-table').DataTable()
        })
    </script>
@endsection