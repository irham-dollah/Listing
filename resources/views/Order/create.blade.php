@extends ('layouts.home')

@section('content')
    <a href="/Order" class="btn btn-default">Return</a>
    <h1>Add Order</h1>
    <br>
    
    <div class="jumbotron">
            <div class="container">
                <div class="select2-wrapper">
                    <select class="form-control input-lg select2-single" dir="rtl">
                        <option></option>
                        <optgroup label="Alaskan/Hawaiian Time Zone">
                            <option value="AK">Alaska</option>
                            <option value="HI" disabled="disabled">Hawaii</option>
                        </optgroup>
                        <option value="CA">California</option>
                        <option value="NV">Nevada</option>
                        <option value="OR">Oregon</option>
                        <option value="WA">Washington</option>
                    </select>
                </div>
            </div>
    </div>
    {!! Form::open(['action'=>'OrdersController@store','method'=>'POST'])!!}
        <div class="form-group">
            {{Form::label('name','Name')}}
            {{Form::text('name','',['class'=>'form-control','placeholder'=>'Put the name of item'])}}
        </div>
        <div class="form-group">
            {{Form::label('price','Price')}}
            {{Form::text('price','',['class'=>'form-control','placeholder'=>'Put the buying price'])}}
        </div>
        <div class="form-group">
            {{Form::label('quantity','Quantity')}}
            {{Form::text('quantity','',['class'=>'form-control','placeholder'=>'Put the quantity of item'])}}
        </div>
        <br>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close()!!}
@endsection
