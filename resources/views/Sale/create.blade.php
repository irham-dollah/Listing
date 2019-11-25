@extends ('layouts.home')

@section('content')
    <h1>Add Sale</h1>
    <br>
    {!! Form::open(['action'=>'SalesController@store','method'=>'POST'])!!}
        {{ csrf_field() }}
        <div class="form-group">
            <label>Seller</label>
            <div class="#">
                <select class="form-control" name="seller_id" id="seller_id" style="width:500px">
                    <option value="{{ Auth::user()->id }}">{{ Auth::user()->name }}</option>
                </select>
            </div>
        </div>
        <br>
        <div class="form-group" style="width:500px">
            {{Form::label('item_id','ID')}}
            {{Form::text('item_id','',['class'=>'form-control','placeholder'=>'Scan the barcode'])}}
        </div>
        {{-- <div class=”form-group”>
                <label>Price</label>
                <div class="#">
                    <select class="form-control" name="price" id="price" style="width:500px">
                        @foreach ($items as $item)
                            <option value="{{$item->selling_price}}">{{$item->price}}</option>    
                        @endforeach
                    </select>
                </div>
        </div>--}} 
        <br> 
        <div class="form-group" style="width:500px">
            {{Form::label('quantity','Quantity')}}
            {{Form::text('quantity','',['class'=>'form-control','placeholder'=>'Put the quantity of item'])}}
        </div>
        <br>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close()!!}
@endsection

@section('bottom')
    <script>
    $(document).ready(function() {// . for class # for id
        $('.js-example-basic-single').select2();
    });
    </script> 
@endsection