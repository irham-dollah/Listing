@extends ('layouts.home')

@section('content')
    <h1>Edit List</h1>
    <br>
    {!! Form::open(['action'=>['ListingsController@update',$listings->id],'method'=>'POST'])!!}
        {{ csrf_field() }}
        <div class="form-group" style="width:500px">
            {{Form::label('list_name','Name')}}
            {{Form::text('list_name',$listings->list_name,['class'=>'form-control','placeholder'=>'Put the name'])}}
        </div>
        <div class="form-group" style="width:500px">
            {{Form::label('address','Address')}}
            {{Form::text('address',$listings->address,['class'=>'form-control','placeholder'=>'Put the address'])}}
        </div>
        <div class="form-group" style="width:500px">
            {{Form::label('latitude','Latitude')}}
            {{Form::text('latitude',$listings->latitude,['class'=>'form-control','placeholder'=>'Put the latitude'])}}
        </div>
        <div class="form-group" style="width:500px">
            {{Form::label('longitude','Longitude')}}
            {{Form::text('longitude',$listings->longitude,['class'=>'form-control','placeholder'=>'Put the longitude'])}}
        </div>
        <br>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close()!!}
@endsection
