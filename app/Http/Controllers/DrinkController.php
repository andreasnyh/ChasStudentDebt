<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drink;

class DrinkController extends Controller
{
    
    public function index() {
        $drinks =  Drink::get();
        
        return view('show_drinks', [
            'drinks' => $drinks
        ]);
        
    }

    public function editDrink() {
        return view('drinksEdit');
    }

    public function editDrinkMade() {
        return view('drinksEditMade');
    }

    public function addDrink() {
        return view('drinksAdd');
    }

    public function addDrinkMade() {
        return view('drinksAddMade');
    }

    public function removeDrink() {
        return view('drinksRemove');
    }

    public function removeDrinkMade() {
        return view('drinksRemoveMade');
    }

}
