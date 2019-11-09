@extends ('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    @if(count($ViewOrder)>0)
        <ul class="list-group">
            @foreach ($ViewOrder as $ViewO)
                <li class="list-group-item">{{$ViewO}}</li>    
            @endforeach
        </ul>
    @endif
@endsection
