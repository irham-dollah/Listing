@extends ('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    @if(count($ViewStock)>0)
        <ul class="list-group">
            @foreach ($ViewStock as $ViewS)
                <li class="list-group-item">{{$ViewS}}</li>    
            @endforeach
        </ul>
    @endif
@endsection
