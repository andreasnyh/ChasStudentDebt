@extends('layout')
@section('content')
    <div class="content">
        <table border="1px">
            <thead>
                <tr>
                    <th>Student ID</th>
                    <th>Order ID</th>
                    <th>Datum</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                <tr>
                    <td>{{$order->student_id}}</td>
                    <td>{{$order->id}}</td>
                    <td>{{$order->date}}</td>
                </tr> 
                @endforeach
            </tbody>
        </table>
        <a href="/"><button>Tillbaka till Meny</button></a> 
    </div>
@endsection