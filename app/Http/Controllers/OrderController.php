<?php

namespace App\Http\Controllers;

use App\Drinks;
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

    public function order() {

        $eds = DB::table('educational_programes')->get();
        $students = DB::table('students')->get();
//        dd($ep);

        return view('order', [
            'eds' => $eds,
            'students' => $students
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
//        dd($request);
        $data = new Order;
//        $studentName = $request->input('studentName');
//        dd($data::all());
        $data->student_ID = $request->input('student_ID');
        $data->beer_quantity = $request->input('beer_quantity');
        $data->wine_quantity = $request->input('wine_quantity');
        $data->softdrink_quantity = $request->input('softdrink_quantity');
        $data->moonshine_quantity = $request->input('moonshine_quantity') ?? 0;

//        if ($data->beer_quantity){
//            $data->drink_ID = 1;
//        }
//        $data->wine_quantity = $request->input('wineQuantity');
//        $data->soda_quantity = $request->input('sodaQuantity');
//        dd([$studentName, $studentClass, $beers, $wines, $sodas]);
//       dd($data);
        if ($data->save()) {

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
        $order = DB::table('orders')->where('id', $orderID)->first();
        if (! $order){abort(404);}
        $student = DB::table('students')->where('id', $order->student_id)->first();
//dd($order);

        foreach ($order as $item) {

        }
        $beerInfo = DB::table('drinks')->where('name', 'Öl')->first();
        $wineInfo = DB::table('drinks')->where('name', 'Vin')->first();
        $softdrinkInfo = DB::table('drinks')->where('name', 'Läsk')->first();
        $moonshineInfo = DB::table('drinks')->where('name', 'Moonshine')->first();

        $beer_quantity = DB::table('orders')->select('beer_quantity')->where('id', $orderID)->first();
        $wine_quantity = DB::table('orders')->select('wine_quantity')->where('id', $orderID)->first();
        $softdrink_quantity = DB::table('orders')->select('softdrink_quantity')->where('id', $orderID)->first();
        $moonshine_quantity = DB::table('orders')->select('moonshine_quantity')->where('id', $orderID)->first();
//        dd($beer_quantity);
        $sum = ($beer_quantity->beer_quantity * $beerInfo->cost)+($wine_quantity->wine_quantity * $wineInfo->cost)+($softdrink_quantity->softdrink_quantity * $softdrinkInfo->cost)+($moonshine_quantity->moonshine_quantity * $moonshineInfo->cost);
//        dd($sum);
        $params = [
            'order' => $order,
            'student' => $student,
            'beerInfo' => $beerInfo,
            'beer_quantity' => $beer_quantity,
            'wineInfo' => $wineInfo,
            'wine_quantity' => $wine_quantity,
            'softdrinkInfo' => $softdrinkInfo,
            'softdrink_quantity' => $softdrink_quantity,
            'moonshineInfo' => $moonshineInfo,
            'moonshine_quantity' => $moonshine_quantity,
            'sum' => $sum // Fix this
        ];
        dd($params);
        return view('show_order', $params);
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
