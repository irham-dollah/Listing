@extends ('layouts.app')

@section('content')
    <a href="/User" class="btn btn-default">Return</a>
    <h1>Add User</h1>
    <br>
    {!! Form::open(['action'=>'UsersController@store','method'=>'POST'])!!}
        <div class="form-group">
            {{Form::label('name','Name')}}
            {{Form::text('name','',['class'=>'form-control','placeholder'=>'Put your name'])}}
        </div>
        <div class="form-group">
            {{Form::label('email','Email')}}
            {{Form::text('email','',['class'=>'form-control','placeholder'=>'Put your email'])}}
        </div>
        <div class="form-group">
            {{Form::label('password','Password')}}
            {{Form::text('password','',['class'=>'form-control','placeholder'=>'Put the password'])}}
        </div>
        <div class="form-group">
            {{Form::label('type','Category')}}
            {{Form::text('type','',['class'=>'form-control','placeholder'=>'Put Admin or Member'])}}
        </div>
        {{-- <div class=”form-group”>
            <label for="type" class=”col-md-4 control-label” >User Type</label>
            <div class=”col-md-6”>
                <select class=”form-control” name="type" id="type">
                    <option value="admin">Admin</option>
                    <option value="super_admin">Super Admin</option>
                    <option value="member">Member</option>
                </select>
            </div>
        </div> --}}
        <br>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close()!!} 
@endsection
