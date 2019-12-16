@extends ('layouts.home')

@section('content')
    {{-- <a href="/Order" class="btn btn-default">Return</a> --}}
    <h1>List of Item</h1>
    <br>
    @foreach ($order_items as $order_item)
        <div>
            <p><b>Item: {{ $order_item->item->name }}</b></p>
            <p>Price per pax: {{ $order_item->item->buying_price }}</p>
            <p>Quantity: {{$order_item->quantity}}</p>
            <p>Subtotal: RM {{$order_item->subtotal}}</p>
        </div>    
        <br>
     
    @endforeach
    <h3>Total: RM {{$orders->total_price}}</h3>
@endsection
