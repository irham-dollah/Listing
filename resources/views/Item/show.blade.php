@extends ('layouts.home')

@section('content')
    {{-- <a href="/Item" class="btn btn-default">Return</a> --}}
    <h1>{{$items->name}}</h1>
    <div>
        <p>ID: {{$items->id}}</p>
        <p>Buying Price: RM {{$items->buying_price}}</p>
        <p>Selling Price: RM {{$items->selling_price}}</p>
        <p>Quantity: {{$items->quantity}}</p>
        <p>Category: {{$items->category}}</p>
        <p>Minimum No: {{$items->minimum_no}}</p>
    </div>
@endsection
