@extends('layouts.app')

@section('title')
Cars:
@endsection
@section('content')
        @foreach($cars as $car)
                <li>
                <a href="/cars/{{$car->id}}">{{$car->producer}}, {{$car->title}}, {{$car->number_of_doors}} doors;<a>
                </li>
                @endforeach
        </ul>
@endsection