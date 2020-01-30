<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drink;

class DrinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $drinks =  Drink::get();
        
        return view('show_drinks', [
            'drinks' => $drinks
        ]);
        
    }
}
