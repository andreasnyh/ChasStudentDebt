<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\History;
use App\Order;
use App\Drink;
use App\Student;
use DateTime;

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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $name = Student::find($request->student_id)->name;
        
        $history = new History();
        $history->student_id = $request->student_id;
        $history->deposit = $request->deposit;
        $history->save();
       
        $name = Student::find($request->student_id)->name;
        
        $time = new DateTime('now');
        $time->format('Y-m-d H-i-s');
        
        return view('paymentMade', [
            'student_id' => $history->student_id,
            'deposit' => $history->deposit,
            'time' => $time,
            'name' => $name
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($student_id)
    {

        // gets all orders, payments and name of this specific student
        $orders = Student::find($student_id)->orders->sortByDesc('date');
        $name = Student::find($student_id)->name;
        $payments = History::where('student_id', $student_id)->latest()->get();

        $totalPayments = 0;
        foreach ($payments as $payment) {
            $totalPayments += $payment->deposit;
        }

        // fetching the price from Drinks table
        $drink_prices = DB::table('drinks')
            ->leftJoin('price', 'drink_id', '=', 'drinks.id')
            ->get();
       

        foreach ($drink_prices as $drink) {
            echo 'Drink: '. $drink->name .' ';
            echo 'Price '. $drink->price.'<br>';
        }

     

        /* $beer = Drink::select('cost')->where('name', 'Öl')->first();
        $wine = Drink::select('cost')->where('name', 'Vin')->first();
        $softdrink = Drink::select('cost')->where('name', 'Läsk')->first();
        $moonshine = Drink::select('cost')->where('name', 'Moonshine')->first(); */
        
        $ordersPrice = 0;

        // For each order row. Adding to sum.
       /*  foreach ($orders as $order) {
            $sumBeer= $order->beer_quantity * $beer->cost;
            $sumWine = $order->wine_quantity * $wine->cost;
            $sumMoonshine = $order->moonshine_quantity * $moonshine->cost;
            $sumSoftdrink = $order->softdrink_quantity * $softdrink->cost;
            $order->price = $sumBeer + $sumWine + $sumMoonshine + $sumSoftdrink;
            $ordersPrice += $order->price;
        } */

        //calculate the total debt
        $totalprice = $ordersPrice - $totalPayments;
 
        return view('studentHistory', [
            'orders' => $orders,
            'payments' => $payments,
            'drink_prices' => $drink_prices,
            'student_id' => $student_id,
            'name' => $name
        ]);
    }
}
