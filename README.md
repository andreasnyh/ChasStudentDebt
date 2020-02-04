# CHAS BarTab

## About

The idea behind this project was to create a page for students to track how many
dricks they've bought from the school and if they've actually paid for them.

## Routing

### Index

This is the route of the landing page. It routes to the view 'resources/views/welcome.blade.php'.

```php
Route::get('/', function () {
    return view('welcome');
});
```

### Order routes

```php
// New order form
Route::get('/order', 'OrderController@create');

// Create a new order and store it in the database
Route::get('/order/new', 'OrderController@store');

// Info about a specific order
Route::get('/order/{orderID}', 'OrderController@show');
```

### History routes
```php
// Show all history
Route::get('/history', 'HistoryController@index');

// Persist a new payment in the db
Route::post('/history', 'HistoryController@store');

// Show a specific students order and payment history
Route::get('/history/{student_id}', 'HistoryController@show');
```

## Controllers

### DrinkController

### HistoryController

#### @store
```php

    /* Stores a payment from a specific student in the database
       and redirects to paymentMade view */
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

```

#### @show

```php
 public function show($student_id)
    {

        // gets all orders, payments and name of a specific student
        $orders = Student::find($student_id)->orders->sortByDesc('date');
        $name = Student::find($student_id)->name;
        $payments = History::where('student_id', $student_id)->latest()->get();

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

        return view('studentHistory', [
            'orders' => $orders,
            'payments' => $payments,
            'totalPrice' => $totalprice,
            'student_id' => $student_id,
            'name' => $name
        ]);
    }
```

### OrderController

#### @create

```php
public function create() {

    // Get all the different programmes students can
    // attend from the database
    $eds = DB::table('educational_programes')->get();

    // Get all students from each study programme
    $studentsFWD19 = DB::table('students')->where('class', 'FWD19')->get();
    $studentsFWD20 = DB::table('students')->where('class', 'FWD20')->get();
    $studentsIK19 = DB::table('students')->where('class', 'IK19')->get();
    $studentsIK20 = DB::table('students')->where('class', 'IK20')->get();

    $params = [
        'eds' => $eds,
        'studentsFWD19' => $studentsFWD19,
        'studentsFWD20' => $studentsFWD20,
        'studentsIK19' => $studentsIK19,
        'studentsIK20' => $studentsIK20
    ];
    // Send programmes and students to the view
    return view('order', $params);
}
```

#### @store

```php
public function store(Request $request) {

    $data = new Order;

    // Capture inputs from the order view
    $data->student_ID = $request->input('student_ID');
    $data->beer_quantity = $request->input('beer_quantity');
    $data->wine_quantity = $request->input('wine_quantity');
    $data->softdrink_quantity = $request->input('softdrink_quantity');
    $data->moonshine_quantity = $request->input('moonshine_quantity') ?? 0;

    // If it's possible to save this new order to the database
    if ($data->save()) {
        // Sent the user to '/order/{orderID}'
        // The orderID gets set upon saving the order to the database, hence the if-case
        return redirect('/order/' . $data->id);
    };
}
```

### StudentController

## Models

## Views

### Structure of the Layout template

```html
<html>
    <head>
    </head>
    <body>
        <nav>
        <!-- Logo on dark background -->
        </nav>
        <div class="container">
            @yield('content')
        <!-- Inside a 'container' we have the @yield. -->
        <!-- This is where the content from each view loads. -->
        </div>
    <footer>
        <!-- Links to creators and GitHub repo -->
    </footer>
    <script></script>
    </body>
</html>
```

## Contributors

- [Simon Nordström](https://github.com/SimonNord)
- [Andréas Ny](https://github.com/andreasnyh)
- [Hung Ta](https://github.com/ByHT)
- [Erik Axelsson](https://github.com/erax83)
- [Dylan Nore](https://github.com/DylanNore)
- [Karl Falk](https://github.com/Voldakka)
- [Project on Github](https://github.com/andreasnyh/ChasStudentDebt)

## License of Laravel Framework

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

&copy; 2020 Chas Academy
