@extends('layout')

@section('content')
    <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="title m-b-md">
                <h2>Tack för ditt köp</h2>
            </div>

    <table>
        <thead>Student {{ $order->student_ID }}'s Order</thead>
        <tr>
            <td>Ordernummer</td><td>{{ $order->orderID }}</td>
        </tr>
        <tr>
            <td>Dryck</td><td>{{ $order->drink_ID }}</td>
        </tr>
        <tr>
            <td>Date</td><td>{{ $order->date }}</td>
        </tr>
    </table>


            <form action="/">
                <button type="submit">Tillbaka till Meny</button>
            </form>

        </div>
    </div>

@endsection
