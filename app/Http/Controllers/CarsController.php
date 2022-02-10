<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cars;

class CarsController extends Controller
{
    public function index(){
        $cars = Cars::select('title', 'producer', 'number_of_doors')->get();
        return view('cars',compact('cars'));
    }

    public function show($id){
        $car=Cars::findOrFail($id);
        return view('car',compact('car'));
     }
}
