@extends('layouts.app')

@section('title')
Cars:
@endsection
@section('content')
        @foreach($cars as $car)
                <li>
                {{$car->producer}}, {{$car->title}}, {{$car->number_of_doors}} doors;
                </li>
                @endforeach
        </ul>
@endsection