@extends ('layouts.home')

@section('content')
    <a href="/Item" class="btn btn-default">Return</a>
    <h1>Edit Item</h1>
    <br>
    {!! Form::open(['action'=>['ItemsController@update',$items->id],'method'=>'POST'])!!}
        <div class="form-group">
            {{Form::label('name','Name')}}
            {{-- {{Form::text('name','',['class'=>'form-control','placeholder'=>'Put the name of item'])}} --}}
            <p>{{$items->name}}</p>
        </div>
        <div class="form-group">
            {{Form::label('price','Price')}}
            {{Form::text('price',$items->price,['class'=>'form-control','placeholder'=>'Put the selling price'])}}
        </div>
        <div class="form-group">
            {{Form::label('quantity','Quantity')}}
            {{Form::text('quantity',$items->quantity,['class'=>'form-control','placeholder'=>'Put the quantity of item'])}}
        </div>
        <div class="form-group">
                {{Form::label('category','Category')}}
                {{Form::text('category',$items->category,['class'=>'form-control','placeholder'=>'Put the category of item'])}}
            </div>
        <div class="form-group">
                {{Form::label('minimum_no','Minimum No')}}
                {{Form::text('minimum_no',$items->minimum_no,['class'=>'form-control','placeholder'=>'Put the min no needed for item'])}}
        <br>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close()!!}
@endsection
