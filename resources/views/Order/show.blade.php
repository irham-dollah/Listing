@extends ('layouts.app')

@section('content')
    <a href="/Order" class="btn btn-default">Return</a>
    <h1>{{$orders->name}}</h1>
    <div>
        <p>Price: {{$orders->price}}</p>
        <p>Quantity: {{$orders->quantity}}</p>
    </div>
@endsection
