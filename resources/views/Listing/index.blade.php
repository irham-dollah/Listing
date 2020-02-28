@extends('layouts.home')

@section('top')
    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/css/dataTables.bootstrap.css">
@endsection

@section('content')
    <div class="box box-success box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">Detail of Listing</h3>
            @if(Auth::user()->type=='a')
                <a href="{{ route('Listing.create', ['id'=>Auth::user()->id ]) }}" class="btn btn-info">ADD</a>
            @endif
        </div>
        <div class="box-body table-responsive">
            <table id="listing-table" class="table table-bordered table-striped table-hover datatable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Latitude</th>
                        <th>Longitude</th>
                        <th>Submitter</th>
                        <th>Created at</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($listings as $listing)
                        <tr>
                            <td>{{$listing->id}}</td>
                            <td>{{ $listing->list_name }}</td>
                            <td>{{ $listing->address}}</td>
                            <td>{{ $listing->latitude}}</td>
                            <td>{{ $listing->longitude}}</td>
                            <td>{{ $listing->user->name}}</td>
                            <td>{{ $listing->created_at}}</td>
                            @if(Auth::user()->type=='a')
                            <td class="center">
                                <a href="{{ route('Listing.edit', ['id'=>$listing->id ]) }}" class="btn btn-warning btn-sm custom"><i class="glyphicon glyphicon-edit"></i> EDIT</a>
                            </td>
                            <td class="center">
                                <form action="{{ route('Listing.destroy', ['id'=>$listing->id ]) }}" method="post" onsubmit="return confirm('Delete order {{ $listing->name }} permanently?')" >
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
        <!-- /.box-body -->
    </div>
@endsection

@section('bottom')
    <!-- DataTables -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/dataTables.bootstrap.min.js"></script>

    <script>
        $(function () {
            $('#listing-table').DataTable()
        })
    </script>
@endsection