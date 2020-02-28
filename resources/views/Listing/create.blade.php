@extends ('layouts.home')

@section('content')
    <a href="{{ route('Listing.index') }}" class="btn btn-default"></i> BACK</a>
    <h1>Add List</h1>
    <br>
    {!! Form::open(['action'=>'ListingsController@store','method'=>'POST'])!!}
        {{ csrf_field() }}
        <div class="form-group" style="width:500px">
            {{Form::label('list_name','Name')}}
            {{Form::text('list_name','',['class'=>'form-control','placeholder'=>'Put the name of list'])}}
        </div>
        <div class="form-group" style="width:500px">
            {{Form::label('address','Address')}}
            {{Form::text('address','',['class'=>'form-control','placeholder'=>'Put the address'])}}
        </div>
        <div class="form-group" style="width:500px">
            {{Form::label('latitude','Latitude')}}
            {{Form::text('latitude','',['class'=>'form-control','placeholder'=>'Put the latitude'])}}
        </div>
        <div class="form-group" style="width:500px">
            {{Form::label('longitude','Longitude')}}
            {{Form::text('longitude','',['class'=>'form-control','placeholder'=>'Put the longitude'])}}
        </div>  
        <br>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close()!!}
@endsection
