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

        $allOrders = Order::where('student_id', $student_id)
            ->orderBy('orderNumber', 'asc')
            ->get();

        $invoices = Invoice::where('student_id', $student_id)
            ->orderBy('id', 'asc')
            ->get();

        $drinks = Drink::all();

//        for each order number push it to an array and sent to view
        $orders = [];
        $order_row = [];
        $first_order = Order::where('student_id', $student_id)->first('orderNumber');
        global $last_order_number;
        $last_order_number = $first_order->orderNumber;
        $index = 1;
//        Loop through all orders of a student
        foreach ($allOrders as $order) {

//            If it has the same ordernumber push the order to $order_row
            if ($last_order_number === $order->orderNumber) {
                $order_row[] = $order;
                
//              If the amount of loops done equals length of all orders save current order to array
                if (count($allOrders) == $index) {
                    $orders[$last_order_number] = $order_row;
                }

            } else { // When it's not the same push the array to orders
                $orders[$last_order_number] = $order_row;
                $last_order_number = $order->orderNumber; // new last order number
                $order_row = [];
                $order_row[] = $order;

//              If the amount of loops done equals length of all orders save current order to array
                if (count($allOrders) == $index) {
                    $orders[$last_order_number] = $order_row;
                }
            }
            $index++;
        }
        dd($orders);
        return view('studentHistory', [
            'student' => $student,
            'orders' => $orders,
            'invoices' => $invoices,
            'drinks' => $drinks
//            'last_order_number' => Null
//            'student_id' => $student_id,
//            'name' => $name
        ]);
    }
}
