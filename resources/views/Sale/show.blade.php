@extends ('layouts.home')

@section('content')
    {{-- <a href="/Order" class="btn btn-default">Return</a> --}}
    <h1>List of Item</h1>
    <br>
    @foreach ($sale_items as $sale_item)
        <div>
            <p><b>Item: {{ $sale_item->item->name }}</b></p>
            <p>Quantity: {{$sale_item->quantity}}</p>
            <p>Subtotal: RM {{$sale_item->subtotal}}</p>
        </div>    
        <br>
    @endforeach
@endsection
