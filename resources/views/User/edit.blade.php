@extends ('layouts.home')

@section('content')
    {{-- <a href="/User" class="btn btn-default">Return</a> --}}
    <h1>Edit User</h1>
    <br>
    {!! Form::open(['action'=>['UsersController@update',$users->id],'method'=>'POST'])!!}
        {{ csrf_field() }}
        <div class="form-group">
            {{Form::label('name','Name')}}
            {{-- {{Form::text('name','',['class'=>'form-control','placeholder'=>'Put the name of item'])}} --}}
            <p>{{$users->name}}</p>
        </div>
        <div class="form-group">
            {{Form::label('email','Email')}}
            {{Form::text('email',$users->email,['class'=>'form-control','placeholder'=>'Put your email'])}}
        </div>
        <div class="form-group">
            {{Form::label('password','password')}}
            {{Form::text('password',$users->password,['class'=>'form-control','placeholder'=>'Put the password'])}}
        </div>
        <br>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close()!!}
@endsection
