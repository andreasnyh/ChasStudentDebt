@extends('layout')
@section('content')
    <div class="content">
        <table border="1px">
            <thead>
                <tr>
                    <th>Student ID</th>
                    <th>Order ID</th>
                    <th>Datum</th>
                    <th>Insättning</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                <tr>
                    <td>{{$order->student_ID}}</td>
                    <td>{{$order->order_ID}}</td>
                    <td>{{$order->date}}</td>
                    <td>{{$order->deposit}}:-</td>
                </tr> 
                @endforeach
            </tbody>
        </table>
        <a href="/"><button>Tillbaka till Meny</button></a> 
    </div>
@endsection