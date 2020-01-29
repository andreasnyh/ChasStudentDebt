@extends('layout')
@section('content')
    <div class="content">
        <table border="1px";>
            <h4>Köp</h4>
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Datum</th>
                    <th>Pris</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                <tr>
                    <td>{{$order->orderID}}</td>
                    <td>{{$order->date}}</td>
                    <td></td>
                </tr> 
            @endforeach
            </tbody>
        </table>
        <table border="1px";>
            <h4>Betalningar</h4>
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Datum</th>
                    <th>Summa</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($payments as $payment)
                <tr>
                    <td>{{$payment->order_ID}}</td>
                    <td>{{$payment->date}}</td>
                    <td>{{$payment->deposit}}:-</td>
                </tr> 
            @endforeach
            </tbody>
        </table>
        
        <a href="/"><button>Tillbaka till Meny</button></a> 
    </div>
@endsection