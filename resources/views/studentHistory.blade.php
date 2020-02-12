@extends('layout')
@section('content')
    <div class="content">
        <table border="1px" class="table table-striped">
        <h4 class="h2 pt-5">{{$name}}´s Historik</h4>
            <thead class="bg-dark text-light">
                <tr>
                    <th>Order ID</th>
                    <th>Datum</th>
                    @foreach ($drink_prices as $drink)
                      <th>{{$drink->name}}</th>  
                    @endforeach
                    <th>Pris</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                <tr>
                    <td>{{$order->id}}</td>
                    <td>{{$order->date}}</td>
                    <td>{{$order->beer_quantity}}</td>
                    <td>{{$order->wine_quantity}}</td>
                    <td>{{$order->moonshine_quantity}}</td>
                    <td>{{$order->softdrink_quantity}}</td>
                    <td>{{$order->beer_quantity + $order->wine_quantity + $order->moonshine_quantity + $order->softdrink_quantity}} kr</td>
                </tr>
            @endforeach
            </tbody>
            <thead class="bg-dark text-light">
                <tr>
                    <th colspan="4">Datum</th>
                    <th colspan="3">Inbetalning</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($payments as $payment)
                    <tr>
                        <td colspan="4">{{$payment->date}}</td>
                        <td colspan="3">{{$payment->deposit}} kr</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="4">Total skuld</th>
                    <td colspan="3">{{-- {{$totalPrice}} --}} kr</td>
                </tr>
            </tfoot>
        </table>
        <form method="POST" action="/history">
                @csrf
                <div class="input-group input-group-lg mb-3">
                    <input hidden class="form-control" type="text" name="student_id" id="student_id" value="{{$student_id}}">
                    <input type="text" class="form-control" id="deposit" name="deposit" placeholder="Amount to pay" placeholder="ex 10kr" min="0" max="{{-- {{$totalPrice}} --}}">
                    <div class="input-group-append">
                        <button class="btn btn-outline-success" type="submit">Pay</button>
                    </div>
                </div>
        </form>
        <a href="/"><button class="btn btn-lg bg-dark text-light">Tillbaka till Meny</button></a>
    </div>
@endsection
