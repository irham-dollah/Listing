@extends ('layouts.home')

@section('content')
    {{-- <a href="/Order" class="btn btn-default">Return</a> --}}
    <h1>Add Sale</h1>
    <br>
    {!! Form::open(['action'=>'SalesController@store','method'=>'POST'])!!}
        <div class=”form-group”>
                <label for="name" class="col-md-7" control-label >Name</label>
                <div class=col-md-7>
                    <select class="form-control" name="name" id="name">
                        @foreach ($items as $item)
                            <option value="{{$item->name}}">{{$item->name}}</option>    
                        @endforeach
                    </select>
                </div>
        </div> 
        <br>
        {{-- <div class="form-group">
            {{Form::label('price','Price')}}
            {{Form::text('price','',['class'=>'form-control','placeholder'=>'Put the buying price'])}}
        </div> --}}
        <div class=”form-group”>
                <label for="price" class="col-md-7" control-label >Price</label>
                <div class=col-md-7>
                    <select class="form-control" name="price" id="price">
                        @foreach ($items as $item)
                            <option value="{{$item->price}}">{{$item->price}}</option>    
                        @endforeach
                    </select>
                </div>
        </div> 
        <br>
        <div class="form-group">
            {{Form::label('quantity','Quantity')}}
            {{Form::text('quantity','',['class'=>'form-control','placeholder'=>'Put the quantity of item'])}}
        </div>
        <br>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close()!!}
@endsection