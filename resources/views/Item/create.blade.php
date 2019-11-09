@extends ('layouts.app')

@section('content')
    <a href="/Item" class="btn btn-default">Return</a>
    <h1>Add Item</h1>
    <br>
    {!! Form::open(['action'=>'ItemsController@store','method'=>'POST'])!!}
        <div class="form-group">
            {{Form::label('name','Name')}}
            {{Form::text('name','',['class'=>'form-control','placeholder'=>'Put the name of item'])}}
        </div>
        <div class="form-group">
            {{Form::label('price','Price')}}
            {{Form::text('price','',['class'=>'form-control','placeholder'=>'Put the selling price'])}}
        </div>
        <div class="form-group">
            {{Form::label('quantity','Quantity')}}
            {{Form::text('quantity','',['class'=>'form-control','placeholder'=>'Put the quantity of item'])}}
        </div>
        <div class="form-group">
                {{Form::label('category','Category')}}
                {{Form::text('category','',['class'=>'form-control','placeholder'=>'Put the category of item'])}}
            </div>
        <div class="form-group">
                {{Form::label('minimum_no','Minimum No')}}
                {{Form::text('minimum_no','',['class'=>'form-control','placeholder'=>'Put the min no needed for item'])}}
        </div>    
        <br>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close()!!}
@endsection
