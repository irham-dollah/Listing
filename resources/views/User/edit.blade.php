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
            {{Form::label('matric_no','Matric No')}}
            <p>{{$users->matric_no}}</p>
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
        <br>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close()!!}
@endsection
