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
        $drinks =  Drink::get();
        
        return view('drinksEdit', [
            'drinks' => $drinks
        ]);
    }

    public function editDrinkDrink($name) {
        $drinks = DB::table('drinks')->where('name', $name)->first();
        
        return view('drinksEditDrink', [
            'drinks' => $drinks
        ]);
    }

    public function editDrinkMade(Request $req) {
        
        $drink = Drink::get();
        $drink->name = $req->name;
        $drink->stock = $req->stock;
        $drink->cost = $req->cost;
        //$drink->edit();
        //DB::table('drinks')->where('name', $drink->name)->update();
        //DB::update('update drinks set name = $name, stock = $stock, cost = $cost where name = ?', [$drink->name]);
        //DB::update('update drinks set name = ?, stock = ?, cost = ? where name = ?',[$drink->name, $drink->id, $drink->cost, $drink->name ]);
        echo $drink->name;
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
        $drinks =  Drink::get();
        
        return view('drinksRemove', [
            'drinks' => $drinks
        ]);
    }

    public function removeDrinkMade($name) {
        DB::table('drinks')->where('name', $name)->delete();
        return view('drinksRemoveMade');
    }
}
