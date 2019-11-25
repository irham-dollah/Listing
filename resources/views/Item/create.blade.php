@extends ('layouts.home')

@section('content')
    {{-- <a href="/Item" class="btn btn-default">Return</a> --}}
    <h1>Add Item</h1>
    <br>
    {!! Form::open(['action'=>'ItemsController@store','method'=>'POST'])!!}
        {{ csrf_field() }}
        <div class="form-group" style="width:500px">
            {{Form::label('id','ID')}}
            {{Form::text('id','',['class'=>'form-control','placeholder'=>'Scan the barcode'])}}
        </div>
        <div class="form-group" style="width:500px">
            {{Form::label('name','Name')}}
            {{Form::text('name','',['class'=>'form-control','placeholder'=>'Put the name of item'])}}
        </div>
        <div class="form-group" style="width:500px">
            {{Form::label('buying_price','Buying Price')}}
            {{Form::text('buying_price','',['class'=>'form-control','placeholder'=>'Put the buying price'])}}
        </div>
        <div class="form-group" style="width:500px">
            {{Form::label('selling_price','Selling Price')}}
            {{Form::text('selling_price','',['class'=>'form-control','placeholder'=>'Put the selling price'])}}
        </div>
        <div class="form-group" style="width:500px">
            {{Form::label('quantity','Quantity')}}
            {{Form::text('quantity','',['class'=>'form-control','placeholder'=>'Put the quantity of item'])}}
        </div>
        <div class="form-group" style="width:500px">
            {{Form::label('minimum_no','Minimum No')}}
            {{Form::text('minimum_no','',['class'=>'form-control','placeholder'=>'Put the min no needed for item'])}}
        </div>
        <div class=”form-group”>
                <label>Category</label>
                <div>
                    <select class="form-control" name="category" id="category" style="width:500px">
                        <option value="beverage">Beverage</option>
                        <option value="snack">Snack</option>
                        <option value="stationary">Stationary</option>
                        <option value="textbook">TextBook</option>
                        <option value="other">Other</option>
                    </select>
                </div>
        </div>    
        <br>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close()!!}
@endsection
