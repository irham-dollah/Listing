@extends ('layouts.home')

@section('content')
    {{-- <a href="/Item" class="btn btn-default">Return</a> --}}
    <h1>Edit Item</h1>
    <br>
    {!! Form::open(['action'=>['ItemsController@update',$items->id],'method'=>'POST'])!!}
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('id') ? ' has-error' : '' }}" style="width:500px">
            {{Form::label('id','ID')}}
            {{-- <p>{{$items->id}}</p> --}}
            {{Form::text('id',$items->id,['class'=>'form-control','placeholder'=>'Put the barcode'])}}
        </div>
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}" style="width:500px">
            {{Form::label('name','Name')}}
            {{-- <p>{{$items->name}} ({{$items->category}}) </p> --}}
            {{Form::text('name',$items->name,['class'=>'form-control','placeholder'=>'Put the name'])}}
        </div>
        <div class="form-group{{ $errors->has('buying_price') ? ' has-error' : '' }}" style="width:500px">
            {{Form::label('buying_price','Buying Price')}}
            {{Form::text('buying_price',$items->buying_price,['class'=>'form-control','placeholder'=>'Put the buying price'])}}
        </div>
        <div class="form-group{{ $errors->has('selling_price') ? ' has-error' : '' }}" style="width:500px">
            {{Form::label('selling_price','Selling Price')}}
            {{Form::text('selling_price',$items->selling_price,['class'=>'form-control','placeholder'=>'Put the selling price'])}}
        </div>
        <div class="form-group{{ $errors->has('quantity') ? ' has-error' : '' }}" style="width:500px">
            {{Form::label('quantity','Quantity')}}
            {{Form::text('quantity',$items->quantity,['class'=>'form-control','placeholder'=>'Put the quantity of item'])}}
        </div>
        <div class="form-group{{ $errors->has('minimum_no') ? ' has-error' : '' }}" style="width:500px">
            {{Form::label('minimum_no','Minimum No')}}
            {{Form::text('minimum_no',$items->minimum_no,['class'=>'form-control','placeholder'=>'Put the min no needed for item'])}}
        </div>
        <div class="category">
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
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close()!!}
@endsection
