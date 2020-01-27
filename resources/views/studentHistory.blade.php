@extends('layout')
@section('content')
    <div class="content">
        <table>
            <thead>
                <tr>
                    <th>Datum</th>
                    <th>OrderNr</th>
                    <th>Dryck</th>
                    <th>Antal</th>
                    <th>Pris</th>
                </tr>
                @foreach ($orders as $order)
                    <tr>
                    <td>{{order.order_nr}}</td>
                    <td>{{order.name}}</td>
                    <td>{{order.class}}</td>
                    <td>{{order.drink}}</td>
                    <td>{{order.amount}}</td>
                    <td>{{order.price}}</td>
                    </tr> 
                @endforeach
            </thead>
        </table>
    </div>
    
@endsection