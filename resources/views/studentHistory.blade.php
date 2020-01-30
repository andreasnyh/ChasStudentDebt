@extends('layout')
@section('content')
    <div class="content">
        <table border="1px";>
        <h4>{{$name}}´s Historik</h4>
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Datum</th>
                    <th>Öl</th>
                    <th>Vin</th>
                    <th>Moonshine</th>
                    <th>Läsk</th>
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
                    <td>{{$order->price}}</td>
                </tr>
            @endforeach
            </tbody>
            <thead>
                <tr>
                    <th colspan="4">Datum</th>
                    <th colspan="3">Inbetalning</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($payments as $payment)
                    <tr>
                        <td colspan="4">{{$payment->date}}</td>
                        <td colspan="3">{{$payment->deposit}}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="6">Total skuld</th>
                    <td>{{$totalPrice}}</td>
                </tr>
            </tfoot>
        </table>
        <form method="POST" action="/history">
                @csrf
                <label for="paymentInput">Belopp att betala:</label>
                <input hidden type="text" name="student_id" id="student_id" value="{{$student_id}}">
        <input type="number" name="deposit" id="deposit" placeholder="ex 10kr" min="0" max="{{$totalPrice}}">
                <button type="submit">Betala</button>
        </form>
        <a href="/"><button>Tillbaka till Meny</button></a>
    </div>
@endsection
