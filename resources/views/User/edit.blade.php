@extends ('layouts.home')

@section('content')
    {{-- <a href="/User" class="btn btn-default">Return</a> --}}
    <h1>Edit User</h1>
    <br>
    {!! Form::open(['action'=>['UsersController@update',$users->id],'method'=>'POST'])!!}
        {{ csrf_field() }}
        <div class="form-group" style="width:500px">
            {{Form::label('name','Name')}}
            {{Form::text('name',$users->name,['class'=>'form-control','placeholder'=>'Put your name'])}}
        </div>
        <div class="form-group" style="width:500px">
            {{Form::label('email','Email')}}
            {{Form::text('email',$users->email,['class'=>'form-control','placeholder'=>'Put the new email'])}}
        </div>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}" style="width:500px">
            {{Form::label('password','New Password')}}
            <input id="password" type="password" class="form-control" name="password" required>
        </div>
        <div class="form-group" style="width:500px" type="password" name="password_confirmation">
            {{Form::label('password-confirm','Confirm Password')}}
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
        </div> 
        <div class="form-group">
            {{Form::label('type','User Type')}}
            <div class="#">
                <select class="form-control" name="type" id="type" style="width:500px">
                    <option value="a">Admin</option>
                    <option value="u">Member</option>
                </select>
            </div>
        </div>
        <br>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close()!!}
@endsection
