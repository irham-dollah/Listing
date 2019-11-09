@extends ('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    @if(count($StockIn)>0)
        <ul class="list-group">
            @foreach ($StockIn as $InStock)
                <li class="list-group-item">{{$InStock}}</li>    
            @endforeach
        </ul>
    @endif
@endsection
