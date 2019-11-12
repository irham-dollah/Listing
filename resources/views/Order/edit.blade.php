@extends ('layouts.home')

@section('content')
    {{-- <a href="/Order" class="btn btn-default">Return</a> --}}
    <h1>Edit Order</h1>
    <br>
    {!! Form::open(['action'=>['OrdersController@update',$orders->id],'method'=>'POST'])!!}
        <div class="form-group">
            {{Form::label('name','Name')}}
            {{-- {{Form::text('name','',['class'=>'form-control','placeholder'=>'Put the name of item'])}} --}}
            <p>{{$orders->name}}</p>
        </div>
        <div class="form-group">
            {{Form::label('price','Price')}}
            {{Form::text('price',$orders->price,['class'=>'form-control','placeholder'=>'Put the buying price'])}}
        </div>
        <div class="form-group">
            {{Form::label('quantity','Quantity')}}
            {{Form::text('quantity',$orders->quantity,['class'=>'form-control','placeholder'=>'Put the quantity of item'])}}
        </div>
        <br>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close()!!}
@endsection
