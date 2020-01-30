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
        //return Drink::all();
        
        //return view('show_drinks');

        
        //$drinks = DB::table('drinks')->select('name', 'cost', 'stock')->get();
        
        //return view('show_drinks')->with('drinks', $drinks);

        //$drinks =  Drink::where('name', 'Moonshine')->get();
        //return view('show_drinks', ['drinks'=>$drinks]);

        //echo "hello 1";
        $drinks =  Drink::get();
        //DB::table('x')->get();
        //echo "hello";
        //var_dump($drinks);
        //dd($drinks);
        return view('show_drinks', [
            'drinks' => $drinks
        ]);
        
        

        //$drinks=CLSDB::table('drinks')->get();
        //print_r($drinks);
        
    }
}
