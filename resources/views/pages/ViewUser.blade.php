@extends ('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    @if(count($users)>0)
        <ul class="list-group">
            @foreach($users as $user)
                <li class="list-group-item">{{$user->name}}</li>
            @endforeach
        </ul>
    @endif
@endsection
