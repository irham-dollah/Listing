@extends ('layouts.home')

@section('content')
    {{-- <a href="/Order" class="btn btn-default">Return</a> --}}
    <h1>Edit Order</h1>
    <br>
    {!! Form::open(['action'=>['OrdersController@update',$orders->id],'method'=>'POST'])!!}
        {{ csrf_field() }}
        <div class="form-group">
            {{Form::label('pic','PIC')}}
            <p>{{$orders->user->name}}</p>
        </div>
        <div class="form-group">
            {{Form::label('name','Item')}}
            <p>{{ $orders->item->name}}</p>
        </div>
        <div class="form-group">
            {{Form::label('total_price','Total Price')}}
            {{-- {{Form::text('name','',['class'=>'form-control','placeholder'=>'Put the name of item'])}} --}}
            <p>{{$orders->total_price}}</p>
        </div>
        {{-- <div class="form-group" style="width:500px">
            {{Form::label('price','Price')}}
            <p>{{$orders->price}}</p>
        </div> --}}
        <div class="form-group" style="width:500px">
            {{Form::label('quantity','Quantity')}}
            {{Form::text('quantity',$orders->quantity,['class'=>'form-control','placeholder'=>'Put the quantity of item'])}}
        </div>
        <div class="form-group">
                <label>Status</label>
                <select class="form-control" name="status" id="status" style="width:500px">
                    <option value="Complete">Received</option>
                    <option value="Incomplete">To receive</option>
                </select>
        </div>
        <br>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close()!!}
@endsection
