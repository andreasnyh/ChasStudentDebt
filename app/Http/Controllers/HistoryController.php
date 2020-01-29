<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\History;
use App\Order;
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
        $orders = Order::where('student_id', $student_id)->get();
        $payments = History::where('student_id', $student_id)->get();

        //gets total amount of alcohol drinks
        $alcoholDrinks = Order::where('student_id', $student_id)
            ->sum(DB::raw('beer_quantity + wine_quantity'));

        //gets total amount of soft drinks
        $softDrinkCount = Order::where('student_id', '=', $student_id)
            ->sum('softdrink_quantity');

        $moonshineCount = Order::where('student_id', '=', $student_id)
            ->sum('moonshine_Quantity');

        //calculate the total price
        $totalprice = $alcoholDrinks * 10 + $softDrinkCount * 5 + $moonshineCount * 6;


        return view('studentHistory', [
            'orders' => $orders,
            'payments' => $payments,
            'totalPrice' => $totalprice
        ]);
    }
}
