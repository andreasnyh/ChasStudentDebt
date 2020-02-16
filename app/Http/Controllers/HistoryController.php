<?php

namespace App\Http\Controllers;

use App\Invoice;
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
        $orders = Order::all();

        return view('history', [
            'orders' => $orders
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
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
     * @param int $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($student_id)
    {
        // Old code
        /*
                // gets all orders, payments and name of this specific student
              /*$orders = Student::find($student_id)->orders->sortByDesc('date');
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
        $moonshine = Drink::select('cost')->where('name', 'Moonshine')->first();

        $ordersPrice = 0;

        // For each order row. Adding to sum.
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
        */

        $student = Student::where('id', $student_id)->first();

        // Get all the orders for the given student
//        $allOrders = Order::where('student_id', $student_id)
//            ->orderBy('orderNumber', 'asc')
//            ->get();

        $allOrders = Order::select('orders.orderNumber', 'orders.quantity', 'orders.amount', 'orders.created_at',
            'drinks.name as drinkName', 'students.name as studentName', 'students.class as studentClass')
            ->where('student_id', $student_id)
            ->orderBy('orderNumber', 'asc')
            ->leftJoin('drinks', 'drink_id', '=', 'drinks.id')
            ->leftJoin('students', 'student_id', '=', 'students.id')
            ->get();

//        dd($allOrders);
        // Get all the invoices for the given student
        $invoices = Invoice::where('student_id', $student_id)
            ->orderBy('id', 'asc')
            ->get();

//        $drinks = Drink::all();

//        for each order number push it to an array and sent to view
        $orders = [];
        $order_row = [];
//        $first_order = Order::where('student_id', $student_id)->first('orderNumber');
//        global $last_order_number;

//        $last_order_number = $first_order->orderNumber;
//        $index = 1;
//        $order_total = 0;
//        $sum_orders = 0;
        $order_array=[];
//        Loop through all orders of a student
        foreach ($allOrders as $order) {

            $s = strtotime( $order->created_at);

            $date = date('d/m/Y H:i:s', $s);
            $time = date('H:i:s A', $s);


            if (!array_key_exists($order->orderNumber, $order_array)) {
                $order_array[$order->orderNumber]['sum'] = $order->amount;
            }else{

                $order_array[$order->orderNumber]['sum'] +=  $order->amount;
            }

            $order_array[$order->orderNumber]['data'][] = [
                'orderNumber' => $order->orderNumber,
                'quantity' => $order->quantity,
                'amount' => $order->amount,
                'created_at' => $date,
//                'studentName' => $order->studentName,
//                'studentClass' => $order->studentClass,
                'drinkName' =>$order->drinkName
            ];
        }


        echo"<pre>" . print_r($order_array,true) . "</pre>";
//dd($orders);

        return view('studentHistory', [
            'student' => $student,
            'orders' => $order_array,
            'invoices' => $invoices,
//            'drinks' => $drinks,
//            'sum_orders' => $sum_orders
//            'student_id' => $student_id,
//            'name' => $name
        ]);
    }
}
