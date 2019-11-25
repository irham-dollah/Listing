@extends ('layouts.home')

@section('content')
    {{-- <a href="/User" class="btn btn-default">Return</a> --}}
    <h1>Add User</h1>
    <br>
    {!! Form::open(['action'=>'UsersController@store','method'=>'POST'])!!}
        {{ csrf_field() }}
        <div class="form-group" style="width:500px">
            {{Form::label('name','Name')}}
            {{Form::text('name','',['class'=>'form-control','placeholder'=>'Put your name'])}}
        </div>
        <div class="form-group" style="width:500px">
            {{Form::label('email','Email')}}
            {{Form::text('email','',['class'=>'form-control','placeholder'=>'Put your email'])}}
        </div>
        <div class="form-group" style="width:500px">
            {{Form::label('password','Password')}}
            {{Form::text('password','',['class'=>'form-control','placeholder'=>'Put the password'])}}
        </div>
        <div class="form-group">
            <label>User Type</label>
            <div class="#">
                <select class="form-control" name="type" id="type" style="width:500px">
                    <option value="admin">Admin</option>
                    <option value="member">Member</option>
                </select>
            </div>
        </div>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close()!!} 
@endsection
