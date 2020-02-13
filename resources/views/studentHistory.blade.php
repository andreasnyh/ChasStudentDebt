@extends('layout')
@section('content')
    <div class="content">
        <table border="1px" class="table table-striped">
            <h4 class="h2 pt-5">{{$student->name}}´s Historik</h4>
            <thead class="bg-dark text-light">
            <tr>
                <th>Ordernummer</th>
                <th>Datum</th>
                <th>Pris</th>
            </tr>
            </thead>
            <tbody>

            @foreach ($orders as $order)
                {{--                Save order total in a variable to use in child loop--}}
                @php
                    $order_total = $order['order_total'];
                @endphp

                @foreach($order as $order_row)

{{--    Break the loop if it's the last iteration, the last post is the order total and not an order--}}
                    @if($loop->last)
                        @break
                    @endif

{{--    if it's the first loop print ordernumber, date and order total. And the first order.--}}
                    @if($loop->first)
                        <tr>
                            <th>
{{--    This is supposed to be a button for displaying the order in an accordion--}}
                                <button class="orderButton"><strong>{{ $order_row->orderNumber }}</strong></button>
                            </th>
                            <th>{{ $order_row->created_at }}</th>
                            <th>{{$order_total}} kr</th>
                        </tr>
{{--    Here the sub-table should start with order info--}}
                        <tr>
                            <th>Dryck Id</th>
                            <th>Antal</th>
                            <th>Kostnad</th>
                        </tr>
                        <tr class="orderItem">
                            <td colspan="1">{{ $order_row->drink_id }}</td>
                            <td colspan="1">{{ $order_row->quantity }}</td>
                            <td colspan="1">{{ $order_row->amount }} kr</td>
                        </tr>
                    @else
                        <tr class="orderItem">
                            <td colspan="1">{{ $order_row->drink_id }}</td>
                            <td colspan="1">{{ $order_row->quantity }}</td>
                            <td colspan="1">{{ $order_row->amount }} kr</td>
                        </tr>

                    @endif

                @endforeach
            @endforeach
            <tr>
                <td colspan="2">Total kostnad</td>
                <td>{{$sum_orders}} kr</td>
            </tr>
            </tbody>

            <thead class="bg-dark text-light">
            <tr>
                <th colspan="2">Datum</th>
                <th colspan="1">Inbetalning</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($invoices as $invoice)
                <tr>
                    <td colspan="2">{{$invoice->created_at}}</td>
                    <td colspan="1">{{$invoice->amount}} kr</td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th colspan="2">Total skuld</th>
                <td colspan="1">{{$sum_orders - $invoice->amount}} kr</td>
            </tr>
            </tfoot>
        </table>
        <form method="POST" action="/history">
            @csrf
            <div class="input-group input-group-lg mb-3">
                <input hidden class="form-control" type="text" name="student_id" id="student_id"
                       value="{{$student->id}}">
                <input type="text" class="form-control" id="deposit" name="deposit" placeholder="Amount to pay"
                       placeholder="ex 10kr" min="0" max="{{-- {{$totalPrice}} --}}">
                <div class="input-group-append">
                    <button class="btn btn-outline-success" type="submit">Pay</button>
                </div>
            </div>
        </form>
        <a href="/">
            <button class="btn btn-lg bg-dark text-light">Tillbaka till Meny</button>
        </a>
    </div>
@endsection
