@extends('layout')
@section('content')
    <div class="content">
        <table>
            <thead>
                <tr>
                    <th>Order nr</th>
                    <th>Namn</th>
                    <th>Klass</th>
                    <th>Dryck</th>
                    <th>Antal</th>
                    <th>Pris</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                <tr>
                    <td>{{order.ordernr}}</td>
                    <td>{{order.name}}</td>
                    <td>{{order.class}}</td>
                    <td>{{order.drink}}</td>
                    <td>{{order.amount}}</td>
                    <td>{{order.price}}</td>
                </tr> 
            @endforeach
            </tbody>
        </table>
    </div>
    
@endsection