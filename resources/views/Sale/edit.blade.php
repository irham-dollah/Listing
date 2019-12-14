@extends ('layouts.home')

@section('content')
    <h1>Edit Sale</h1>
    <br>
    {!! Form::open(['action'=>['SalesController@update',$sales->id],'method'=>'POST'])!!}
        {{ csrf_field() }}
        <div class="form-group">
            {{Form::label('seller','Seller')}}
            <p>{{$sales->user->name}}</p>
        </div>
        <div class="form-group">
            {{Form::label('item_id','Item ID')}}
            <p>{{ $sales->sale_item->item_id }}</p>
        </div>
        <div class="form-group">
            {{Form::label('price','Total Sale')}}
            <p>{{$sales->total_price}}</p>
        </div>
        <div class="form-group" style="width:500px">
            {{Form::label('quantity','Quantity')}}
            {{Form::text('quantity',$sales->quantity,['class'=>'form-control','placeholder'=>'Put the quantity of item'])}}
        </div>
        <br>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close()!!}
@endsection
