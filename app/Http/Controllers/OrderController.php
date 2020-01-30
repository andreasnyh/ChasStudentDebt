<?php

namespace App\Http\Controllers;

use App\Drinks;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Type;
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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create() {

        $eds = DB::table('educational_programes')->get();
        $studentsFWD19 = DB::table('students')->where('class', 'FWD19')->get();
        $studentsFWD20 = DB::table('students')->where('class', 'FWD20')->get();
        $studentsIK19 = DB::table('students')->where('class', 'IK19')->get();
        $studentsIK20 = DB::table('students')->where('class', 'IK20')->get();

        /*foreach ($eds as $ed){
            ${'students' . $ed->name} = $ed->name;

        }*/
        //dd($studentsFWD19);

        $params = [
            'eds' => $eds,
            'studentsFWD19' => $studentsFWD19,
            'studentsFWD20' => $studentsFWD20,
            'studentsIK19' => $studentsIK19,
            'studentsIK20' => $studentsIK20
        ];

        return view('order', $params);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $data = new Order;

        $data->student_ID = $request->input('student_ID');
        $data->beer_quantity = $request->input('beer_quantity');
        $data->wine_quantity = $request->input('wine_quantity');
        $data->softdrink_quantity = $request->input('softdrink_quantity');
        $data->moonshine_quantity = $request->input('moonshine_quantity') ?? 0;

        if ($data->save()) {

            return redirect('/order/' . $data->id);
        };
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Order $order
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($orderID)
    {
        $order = DB::table('orders')->where('id', $orderID)->first();
        if (!$order) {
            abort(404);
        }

        // Get student information
        $student = DB::table('students')->where('id', $order->student_id)->first();

        // Get data of all items
        $beerInfo = DB::table('drinks')->where('name', 'Öl')->first();
        $wineInfo = DB::table('drinks')->where('name', 'Vin')->first();
        $softdrinkInfo = DB::table('drinks')->where('name', 'Läsk')->first();
        $moonshineInfo = DB::table('drinks')->where('name', 'Moonshine')->first();

        // How many of each item was orderd
        $beer_quantity = DB::table('orders')->select('beer_quantity')->where('id', $orderID)->first();
        $wine_quantity = DB::table('orders')->select('wine_quantity')->where('id', $orderID)->first();
        $softdrink_quantity = DB::table('orders')->select('softdrink_quantity')->where('id', $orderID)->first();
        $moonshine_quantity = DB::table('orders')->select('moonshine_quantity')->where('id', $orderID)->first();

        // Calculate cost of each item in order
        $beerTotal = $beer_quantity->beer_quantity * $beerInfo->cost;
        $wineTotal = $wine_quantity->wine_quantity * $wineInfo->cost;
        $softdrinkTotal = $softdrink_quantity->softdrink_quantity * $softdrinkInfo->cost;
        $moonshineTotal = $moonshine_quantity->moonshine_quantity * $moonshineInfo->cost;

        // Price of all items in order
        $sum = $beerTotal + $wineTotal + $softdrinkTotal + $moonshineTotal;

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
            'sum' => $sum // Access this in blade with just $sum
        ];
        return view('show_order', $params);
    }

    public function orderMade($id)
    {

        return view('order_made', ['order' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Order $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Order $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Order $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
