@extends ('layouts.home')

@section('content')
    <div style="background-color:Red", class="jumbotron text-center">
        <b><p>YOU CANNOT ACCESS THIS PAGE!</p></b>
        <b><p>This is only for {{$role}}</p></b>
    </div>
@endsection
