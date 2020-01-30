<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\History;
use App\Order;
use App\Drink;
use App\Student;

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
        $totalPayments = 0;
        foreach ($payments as $payment) {
            $totalPayments += $payment->deposit;
        }

        // fetching the price from Drinks table
        $beer = Drink::select('cost')->where('name', 'Öl')->first();
        $wine = Drink::select('cost')->where('name', 'Vin')->first();
        $softdrink = Drink::select('cost')->where('name', 'Läsk')->first();
        $moonshine = Drink::select('cost')->where('name', 'Moonshine')->first();
        
        $ordersPrice = 0;
        foreach ($orders as $order) {
            $sumBeer= $order->beer_quantity * $beer->cost;
            $sumWine = $order->wine_quantity * $wine->cost;
            $sumMoonshine = $order->moonshine_quantity * $moonshine->cost;
            $sumSoftdrink = $order->softdrink_quantity * $softdrink->cost;
            $order->price = $sumBeer + $sumWine + $sumMoonshine + $sumSoftdrink;
            $ordersPrice += $order->price;
        }

        //calculate the total debt
        $totalprice = $ordersPrice - $totalPayments;

        return view('studentHistory', [
            'orders' => $orders,
            'payments' => $payments,
            'totalPrice' => $totalprice
        ]);
    }
}
