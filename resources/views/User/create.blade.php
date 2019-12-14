@extends ('layouts.home')

@section('content')
    {{-- <a href="/User" class="btn btn-default">Return</a> --}}
    <h1>Add User</h1>
    <br>
    {!! Form::open(['action'=>'UsersController@store','method'=>'POST'])!!}
        {{ csrf_field() }}
        <div class="form-group" style="width:250px">
            {{Form::label('name','Name')}}
            {{Form::text('name','',['class'=>'form-control','placeholder'=>'Put your name'])}}
        </div>
        <div class="form-group" style="width:250px">
            {{Form::label('matric_no','Matric No')}}
            {{Form::text('matric_no','',['class'=>'form-control','placeholder'=>'Put your matric no'])}}
        </div>
        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}" style="width:500px">
            {{Form::label('password','New Password')}}
            <input id="password" type="password" class="form-control" name="password" required>
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        <div class="form-group" style="width:500px" type="password" name="password_confirmation">
            {{Form::label('password-confirm','Confirm Password')}}
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
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
