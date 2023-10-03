@extends('layouts.public')

@section('content')
    <h1 class="d-flex justify-content-center text-success">Hello World</h1>
    <ul>
        @foreach ($treniInOrario as $parte)
            <li>{{$parte->stazione_di_partenza}}</li>
        @endforeach
    </ul>
@endsection