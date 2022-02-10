<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cars;

class CarsController extends Controller
{
    public function index(){
        $cars = Cars::all();
        return view('cars',compact('cars'));
    }

    public function show($id){
        $car=Cars::findOrFail($id);
        return view('car',compact('car'));
     }
}
