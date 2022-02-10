<html>
    <body>
        <h1>Cars:</h1>
        <ul>
        @foreach($cars as $car)
                <li>
                {{$car->producer}}, {{$car->title}}, {{$car->number_of_doors}} doors;
                  
                </li>
                @endforeach
        </ul>
    </body>
</html>