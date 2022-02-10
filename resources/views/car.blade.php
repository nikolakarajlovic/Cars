@extends('layouts.app')

@section('title')
Car:
@endsection
@section('content')
        <h1>Car:</h1>
        
            <p>{{$car->producer}},
                {{$car->title}},
                {{$car->number_of_doors}} doors.</p>
 @endsection