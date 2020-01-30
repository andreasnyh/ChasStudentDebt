@extends('layout')

@section('content')
    <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="title m-b-md">
                <h2>Information about Order: <strong>{{ $order->id }}</strong></h2>
            </div>


            <table border="1px">
                <thead>{{ $student->name }}'s Order</thead>

                <tr>
                    <td>Dryck</td>
                    <td>Antal</td>
                    <td>Pris</td>
                    <td>Date</td>
                    <td>Total</td>
                </tr>
                <tr>
                    <td>{{ $beerInfo->name }}</td>
                    <td>{{ $order->beer_quantity }}</td>
                    <td>{{ $beerInfo->cost }}</td>
                    <td>{{ \Carbon\Carbon::parse($order->date)->format('Y-m-d')}}</td>
                    <td>{{ $order->beer_quantity * $beerInfo->cost }}</td>
                </tr>
                <tr>
                    <td>{{ $wineInfo->name }}</td>
                    <td>{{ $order->wine_quantity }}</td>
                    <td>{{ $wineInfo->cost }}</td>
                    <td>{{ \Carbon\Carbon::parse($order->date)->format('Y-m-d')}}</td>
                    <td>{{ $order->wine_quantity * $wineInfo->cost }}</td>
                </tr>
                <tr>
                    <td>{{ $softdrinkInfo->name }}</td>
                    <td>{{ $order->softdrink_quantity }}</td>
                    <td>{{ $softdrinkInfo->cost }}</td>
                    <td>{{ \Carbon\Carbon::parse($order->date)->format('Y-m-d')}}</td>
                    <td>{{ $order->softdrink_quantity * $softdrinkInfo->cost }}</td>
                </tr>
                <tr>
                    <td>{{ $moonshineInfo->name }}</td>
                    <td>{{ $order->moonshine_quantity }}</td>
                    <td>{{ $moonshineInfo->cost }}</td>
                    <td>{{ \Carbon\Carbon::parse($order->date)->format('Y-m-d')}}</td>
                    <td>{{ $order->moonshine_quantity * $moonshineInfo->cost }}</td>
                </tr>
                <tr>
                    <td colspan="4">Summa köp</td>
                    <td>{{ $sum }}</td>
                </tr>
            </table>


            <form action="/">
                <button type="submit">Tillbaka till Meny</button>
            </form>

        </div>
    </div>

@endsection
