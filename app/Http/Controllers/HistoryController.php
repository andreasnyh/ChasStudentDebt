<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\History;
use App\Order;

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

        $date = new DateTime('now');
        $date->format('yy-mm-dd hh-MM-ss');
    
        $attributes = \array_push($validatedAttributes, $date);
        
        dd($attributes);

        History::create($attributes);
       
        return view('paymentMade',$attributes);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orders = Order::where('student_ID', $id)->get();
        $payments = History::where('student_ID', $id)->get();

        return view('studentHistory', [
            'orders' => $orders,
            'payments' => $payments
        ]);
    }
}
