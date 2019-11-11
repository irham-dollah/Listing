@extends ('layouts.home')

@section('content')
    <a href="/User" class="btn btn-default">Return</a>
    <h1>{{$users->name}}</h1>
    <div>
        <p>Email: {{$users->email}}</p>
    </div>
@endsection
