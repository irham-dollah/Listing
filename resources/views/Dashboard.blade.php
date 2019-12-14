@extends('layouts.home')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reminder</div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        @foreach ($items as $item)
                            {{-- <p> --}}
                                @if ($item->quantity<$item->minimum_no)
                                    <span class="label label-danger">{{$item->name}} need to be ordered now ! </span>
                                    {{-- {{$counter==-1}} --}}
                                @elseif($item->quantity<($item->minimum_no+10))
                                    <span class="label label-warning">{{$item->name}} is low !</span>
                                    {{-- {{$counter==-1}} --}}
                                @endif
                            {{-- </p> --}}
                        @endforeach
                        {{-- @if ($counter==1)
                            No message
                        @endif --}}
                    </div>
                </div>
            </div>
        </div>
        <h3 class="center"><b>Daily Analysis</b> <p>{{ date('d/m/Y') }}</p></h3>
        <div class="col-0.1">
            <div class="card rounded">
                <div class="card-body py-1 px-2">
                    {!! $usersChart->container() !!}
                </div>
            </div>
        </div> 
    </div>
@endsection

@section('bottom')
    @if($usersChart)
        {!! $usersChart->script() !!}
    @endif
@endsection

