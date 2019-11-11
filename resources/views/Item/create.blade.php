@extends ('layouts.home')

@section('content')
    <a href="/Item" class="btn btn-default">Return</a>
    <h1>Add Item</h1>
    <br>
    {!! Form::open(['action'=>'ItemsController@store','method'=>'POST'])!!}
        <div class="form-group">
            {{Form::label('name','Name')}}
            {{Form::text('name','',['class'=>'form-control','placeholder'=>'Put the name of item'])}}
        </div>
        <div class="form-group">
            {{Form::label('price','Price')}}
            {{Form::text('price','',['class'=>'form-control','placeholder'=>'Put the selling price'])}}
        </div>
        <div class="form-group">
            {{Form::label('quantity','Quantity')}}
            {{Form::text('quantity','',['class'=>'form-control','placeholder'=>'Put the quantity of item'])}}
        </div>
        <div class="form-group">
                {{Form::label('minimum_no','Minimum No')}}
                {{Form::text('minimum_no','',['class'=>'form-control','placeholder'=>'Put the min no needed for item'])}}
        </div>
        <div class=”form-group”>
                <label for="category" class="col-md-7" control-label >Category</label>
                <div class=col-md-6>
                    <select class="form-control" name="category" id="category">
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
