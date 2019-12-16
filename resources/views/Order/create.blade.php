@extends ('layouts.home')

@section('top')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.12/css/select2.min.css">
@endsection

@section('content')
    <h1>Add Order</h1>
    <br>
    {!! Form::open(['action'=>'OrdersController@store','method'=>'POST'])!!}
        {{ csrf_field() }}
        <div class="form-group">
            <label>PIC</label>
                <select class="form-control" name="pic_id" id="pic_id" style="width:500px">
                    <option value="{{ Auth::user()->id }}">{{ Auth::user()->name }}</option>
                </select>
        </div>
        {{-- <div class="form-group" style="width:500px">
            {{Form::label('item_id','Item')}}
            <div >
                <select class="js-example-basic-single" name="barcode" id="barcode" style="width:200px">
                    <option value="#" selected-hidden> &nbsp&nbsp&nbsp-- Select Item -- </option>
                    @foreach ($items as $item)
                        @if ($item->category=='beverage')
                            <option value="{{$item->id}}">{{$item->name}}</option>        
                        @endif
                    @endforeach
                </select>
            </div>
        </div> --}}
        <div class="form-group">
            <label>Item</label>
            <br>
            <div >
                <select class="js-example-basic-single" name="item_id" id="item_id" style="width:500px">
                    <option value="#" selected-hidden>-- Select Item -- </option>
                    {{-- <option value="#"><b> BEVERAGE </b></option> --}}
                    @foreach ($items as $item)
                        {{-- @if ($item->category=='beverage') --}}
                            <option value="{{$item->id}}">{{$item->name}}</option>        
                        {{-- @endif --}}
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group" style="width:500px">
            {{Form::label('quantity','Quantity')}}
            {{Form::text('quantity','',['class'=>'form-control','placeholder'=>'Put the quantity of item'])}}
        </div>
        <div class="form-group">
                <label>Status</label>
                <select class="form-control" name="status" id="status" style="width:500px">
                    <option value="Incomplete">To receive</option>
                    <option value="Complete">Received</option>
                </select>
        </div>
        <br>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close()!!}
@endsection

@section('bottom')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.12/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2();
    });
    </script>
@endsection