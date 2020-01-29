<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\History;
use App\Order;
use App\Drink;
use App\Student;
use Illuminate\Support\Facades\DB;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders =  Order::all();

        return view('history', [
            'orders' => $orders
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedAttributes = \request()->validate([
            'student_ID' => 'required',
            'order_ID' => 'required',
            'deposit' => 'required'
        ]);

        $date = new \DateTime('now');
        $date->format('yy-mm-dd hh-MM-ss');

        $attributes = \array_push($validatedAttributes, $date);

        dd($attributes);

        History::create($attributes);

        return view('paymentMade', $attributes);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($student_id)
    {

        // gets all Orders and payments for this specific student
        $orders = Student::find($student_id)->orders;
             
    
        // gets all the past orders and payments for this specific student
        $payments = History::where('student_id', $student_id)->get();

        // fetching the price from Drinks table
        $softdrink = Drink::select('cost')->where('name', 'Läsk')->first();
        $moonshine = Drink::select('cost')->where('name', 'Moonshine')->first();

        //gets total amount of alcohol drinks
        $alcoholDrinks = Order::where('student_id', $student_id)
            ->sum(DB::raw('beer_quantity + wine_quantity'));

        //gets total amount of soft drinks
        $softDrinkCount = Order::where('student_id', '=', $student_id)
            ->sum('softdrink_quantity');

        $moonshineCount = Order::where('student_id', '=', $student_id)
            ->sum('moonshine_Quantity');

        //calculate the total price
        $totalprice = $alcoholDrinks * 10 + $softDrinkCount * $softdrink->cost + $moonshineCount * $moonshine->cost;

        return view('studentHistory', [
            'orders' => $orders,
            'payments' => $payments,
            'totalPrice' => $totalprice
        ]);
    }
}
