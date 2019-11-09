@extends ('layouts.app')

@section('content')
    <a href="/Order" class="btn btn-default">Return</a>
    <h1>Add Order</h1>
    <br>
    {!! Form::open(['action'=>'OrdersController@store','method'=>'POST'])!!}
        <div class="form-group">
            {{Form::label('name','Name')}}
            {{Form::text('name','',['class'=>'form-control','placeholder'=>'Put the name of item'])}}
        </div>
        <div class="form-group">
            {{Form::label('price','Price')}}
            {{Form::text('price','',['class'=>'form-control','placeholder'=>'Put the buying price'])}}
        </div>
        <div class="form-group">
            {{Form::label('quantity','Quantity')}}
            {{Form::text('quantity','',['class'=>'form-control','placeholder'=>'Put the quantity of item'])}}
        </div>
        <br>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close()!!}
@endsection
