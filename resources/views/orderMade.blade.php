@extends('layout')

@section('content')
    <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="title m-b-md">
                <h2>Tack för ditt köp</h2>
            </div>


    <table border="1px">
        <thead><strong>{{ $student->name }}</strong>'s Order with number: <strong>{{ $order->orderID }}</strong></thead>

        <tr>
            <td>Dryck</td><td>Antal</td><td>Pris</td><td>Date</td><td>Total</td>
        </tr>
        <tr>
            <td>{{ $drink->name }}</td><td>Fyll i</td><td>{{$drink->cost}}</td><td>{{ \Carbon\Carbon::parse($order->date)->format('Y-m-d')}}</td><td>Fyll i</td>
        </tr>
        <tr>
            <td colspan="4">Summa köp</td><td>Fyll i</td>
        </tr>
    </table>


            <form action="/">
                <button type="submit">Tillbaka till Meny</button>
            </form>

        </div>
    </div>

@endsection
