@extends ('layouts.home')

@section('content')
    {{-- <a href="/Item" class="btn btn-default">Return</a> --}}
    <h1>Add Item</h1>
    <br>
    {!! Form::open(['action'=>'ItemsController@store','method'=>'POST'])!!}
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('id') ? ' has-error' : '' }}" style="width:500px">
            {{Form::label('id','ID')}}
            {{Form::text('id','',['class'=>'form-control','placeholder'=>'Scan the barcode'])}}
            {{-- @if ($errors->has('id'))
                <span class="help-block">
                    <strong>{{ $errors->first('id') }}</strong>
                </span>
            @endif --}}
        </div>
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}" style="width:500px">
            {{Form::label('name','Name')}}
            {{Form::text('name','',['class'=>'form-control','placeholder'=>'Put the name of item'])}}
            {{-- @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif --}}
        </div>
        <div class="form-group{{ $errors->has('buying_price') ? ' has-error' : '' }}" style="width:500px">
            {{Form::label('buying_price','Buying Price')}}
            {{Form::text('buying_price','',['class'=>'form-control','placeholder'=>'Put the buying price'])}}
            {{-- @if ($errors->has('buying_price'))
                <span class="help-block">
                    <strong>{{ $errors->first('buying_price') }}</strong>
                </span>
            @endif --}}
        </div>
        <div class="form-group{{ $errors->has('selling_price') ? ' has-error' : '' }}" style="width:500px">
            {{Form::label('selling_price','Selling Price')}}
            {{Form::text('selling_price','',['class'=>'form-control','placeholder'=>'Put the selling price'])}}
        </div>
        <div class="form-group{{ $errors->has('quantity') ? ' has-error' : '' }}" style="width:500px">
            {{Form::label('quantity','Quantity')}}
            {{Form::text('quantity','',['class'=>'form-control','placeholder'=>'Put the quantity of item'])}}
        </div>
        <div class="form-group{{ $errors->has('minimum_no') ? ' has-error' : '' }}" style="width:500px">
            {{Form::label('minimum_no','Minimum No')}}
            {{Form::text('minimum_no','',['class'=>'form-control','placeholder'=>'Put the min no needed for item'])}}
        </div>
        <div class="category">
                <label>Category</label>
                <div>
                    <select class="form-control" name="category" id="category" style="width:500px">
                        <option value="beverage">Beverage</option>
                        <option value="snack">Snack</option>
                        <option value="stationary">Stationery</option>
                        <option value="textbook">Jacket</option>
                        <option value="textbook">Boot</option>
                        <option value="other">Other</option>
                    </select>
                </div>
        </div>    
        <br>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close()!!}
@endsection
