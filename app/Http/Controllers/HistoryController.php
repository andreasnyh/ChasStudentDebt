<?php

namespace App\Http\Controllers;

use App\Invoice;
use Illuminate\Http\Request;
use App\History;
use App\Order;
use App\Student;
use DateTime;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
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

        $student = Student::where('id', $student_id)->first();

        $allOrders = Order::select('orders.orderNumber', 'orders.quantity', 'orders.amount', 'orders.created_at',
            'drinks.name as drinkName')
            ->where('student_id', $student_id)
            ->orderBy('orderNumber', 'asc')
            ->leftJoin('drinks', 'drink_id', '=', 'drinks.id')
            ->get();

        // Get all the invoices for the given student
        $invoices = Invoice::where('student_id', $student_id)
            ->orderBy('id', 'asc')
            ->get();

        $order_array=[];

//        Loop through all orders of a student
        foreach ($allOrders as $order) {

//            Convert creation timestamp to date
            $order_made = strtotime( $order->created_at);
            $date = date('d/m/Y H:i:s', $order_made);

//          If the ordernumber doesn't exist in the array set the sum
            if (!array_key_exists($order->orderNumber, $order_array)) {
                $order_array[$order->orderNumber]['sum'] = $order->amount;
            }else{
//          Otherwise add to the sum
                $order_array[$order->orderNumber]['sum'] +=  $order->amount;
            }

            $order_array[$order->orderNumber]['data'][] = [
                'orderNumber' => $order->orderNumber,
                'quantity' => $order->quantity,
                'amount' => $order->amount,
                'created_at' => $date,
                'drinkName' =>$order->drinkName
            ];
        }

/*
 * orders_array
 *  [orderNumber] => array(
 *      [sum] => 123,
 *      [data] => array (
 *          [0] order item data
 *          [1] order item data
 *          )
 *      )
 *  [orderNumber] => array(...)
 */

//        echo"<pre>" . print_r($order_array,true) . "</pre>";

        return view('studentHistory', [
            'student' => $student,
            'orders' => $order_array,
            'invoices' => $invoices,
        ]);
    }
}
