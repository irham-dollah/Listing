@extends ('layouts.home')

@section('content')
    {{-- <a href="/Order" class="btn btn-default">Return</a> --}}
    <h1>{{ $orders->item->name }}</h1>
    <div>
        <p>ID: {{ $orders->item_id }}</p>
        <p>Total Sale: RM {{$orders->price}}</p>
        <p>Quantity: {{$orders->quantity}}</p>
        <p>PIC: {{$orders->name}}</p>
    </div>
@endsection
