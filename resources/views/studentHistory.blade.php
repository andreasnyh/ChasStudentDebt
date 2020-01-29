@extends('layout')
@section('content')
    <div class="content">
        <table border="1px";>
            <h4>Köp</h4>
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
                    <td>{{$order->moonshine_Quantity}}</td>
                    <td>{{$order->softdrink_quantity}}</td>
                    <td>{{$order->price}}</td>
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
        <a href="/"><button>Tillbaka till Meny</button></a> 
    </div>
@endsection