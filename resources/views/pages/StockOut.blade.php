@extends ('layouts.app')

@section('content')
    <h1>{{$title}}</h1>
    @if(count($StockOut)>0)
        <ul class="list-group">
            @foreach ($StockOut as $OutStock)
                <li class="list-group-item">{{$OutStock}}</li>    
            @endforeach
        </ul>
    @endif
@endsection