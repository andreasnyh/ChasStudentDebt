<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Drink;
use DB;

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

    public function addDrinkMade(Request $req) {
        $drink = new Drink;
        $drink->name = $req->name;
        $drink->stock = $req->stock;
        $drink->cost = $req->cost;
        $drink->save();
        return view('drinksAddMade');
    }

    public function removeDrink() {
        return view('drinksRemove');
    }

    public function removeDrinkMade() {
        return view('drinksRemoveMade');
    }

}
