@extends ('layouts.home')

@section('content')
    {{-- <a href="/Item" class="btn btn-default">Return</a> --}}
    <h1>Edit Item</h1>
    <br>
    {!! Form::open(['action'=>['ItemsController@update',$items->id],'method'=>'POST'])!!}
        {{ csrf_field() }}
        <div class="form-group">
            {{Form::label('id','ID')}}
            <p>{{$items->id}}</p>
        </div>
        <div class="form-group">
            {{Form::label('name','Name')}}
            <p>{{$items->name}} ({{$items->category}}) </p>
        </div>
        <div class="form-group" style="width:500px">
            {{Form::label('buying_price','Buying Price')}}
            {{Form::text('buying_price',$items->buying_price,['class'=>'form-control','placeholder'=>'Put the buying price'])}}
        </div>
        <div class="form-group" style="width:500px">
            {{Form::label('selling_price','Selling Price')}}
            {{Form::text('selling_price',$items->selling_price,['class'=>'form-control','placeholder'=>'Put the selling price'])}}
        </div>
        <div class="form-group" style="width:500px">
            {{Form::label('quantity','Quantity')}}
            {{Form::text('quantity',$items->quantity,['class'=>'form-control','placeholder'=>'Put the quantity of item'])}}
        </div>
        <div class="form-group" style="width:500px">
                {{Form::label('category','Category')}}
                {{Form::text('category',$items->category,['class'=>'form-control','placeholder'=>'Put the category of item'])}}
            </div>
        <div class="form-group" style="width:500px">
                {{Form::label('minimum_no','Minimum No')}}
                {{Form::text('minimum_no',$items->minimum_no,['class'=>'form-control','placeholder'=>'Put the min no needed for item'])}}
        <br>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close()!!}
@endsection
