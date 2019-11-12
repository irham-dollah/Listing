@extends ('layouts.home')

@section('content')
    {{-- <a href="/Order" class="btn btn-default">Return</a> --}}
    <h1>Add Order</h1>
    <br>
    {!! Form::open(['action'=>'OrdersController@store','method'=>'POST'])!!}
        {{-- <div class="select2-wrapper">
            <select class="form-control input-lg select2-single" dir="rtl">
                @foreach ($items as $item)
                    <option value="id">{{$item->name}}</option>    
                @endforeach
            </select>
        </div> --}}
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

@section('bottom')
    {{-- <script type="text/javascript">
        $(".select2-single").select2();
    </script> --}}

    {{-- <script>
        $( ".select2-single, .select2-multiple" ).select2( {
            theme: "bootstrap",
            placeholder: "Select a State",
            maximumSelectionSize: 6,
            containerCssClass: ':all:'
        } );

        $( ":checkbox" ).on( "click", function() {
            $( this ).parent().nextAll( "select" ).prop( "disabled", !this.checked );
        });
    </script> --}}

@endsection