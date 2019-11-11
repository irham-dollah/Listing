@extends ('layouts.home')

@section('content')
    <a href="/Item" class="btn btn-default">Return</a>
    <h1>{{$items->name}}</h1>
    <div>
        <p>Price: RM {{$items->price}}</p>
        <p>Quantity: {{$items->quantity}}</p>
        <p>Category: {{$items->category}}</p>
        <p>Minimum No: {{$items->minimum_no}}</p>
    </div>
@endsection
