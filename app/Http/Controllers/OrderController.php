<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Order;
//        $studentName = $request->input('studentName');
//        dd($data::all());
        $data->student_ID = $request->input('student_ID');
//        $data->beer_quantity = $request->input('beerQuantity')
          $beers = $request->input('beerQuantity');
        if (/*$data->beer_quantity*/ $beers){
            $data->drink_ID = 1;
        }
//        $data->wine_quantity = $request->input('wineQuantity');
//        $data->soda_quantity = $request->input('sodaQuantity');
//        dd([$studentName, $studentClass, $beers, $wines, $sodas]);
        if ($data->save()) {
//       dd($data->id);

            return redirect('/order/'.$data->id);
//            return view('show_order', ['order' => $data->id]);
        };

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($orderID)
    {
        $order = DB::table('orders')->where('orderID', $orderID)->first();

        $student = DB::table('students')->where('studentID', $order->student_ID)->first();

        $drink = DB::table('drinks')->where('drinkID', $order->drink_ID)->first();

//        dd($student);
        if (! $order){abort(404);}

        return view('show_order', [
            'order' => $order,
            'student' => $student,
            'drink' => $drink
        ]);
    }

    public function orderMade($id) {

        return view('order_made', ['order' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
