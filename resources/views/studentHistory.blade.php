@extends('layout')

@section('content')

    <div class="content">
        <h4 class="h2 pt-5">Historik <br>{{$student->name}}, {{ $student->class }} </h4>

        <table border="1px" class="table table-striped">
            <thead class="bg-dark text-light">

            <tr>
                <th>Ordernummer</th>
                <th>Datum</th>
                <th>Pris</th>
            </tr>
            </thead>

            <tbody>
            {{--init sum of all orders--}}
                <?php
                $sum_orders = 0;
                ?>

            @foreach ($orders as $order)
                {{-- Add ordersum to total sum --}}
                <?php
                $sum_orders += $order['sum'];
                ?>

                @foreach($order['data'] as $order_row)

                    {{-- If it's the first loop of items in an order print headings --}}
                    @if($loop->first)
                        <tr>
                            <th>
                                {{--    This is supposed to be a button for displaying the order in an accordion--}}
                                <a class="orderButton" data-toggle="collapse"
                                   data-target="#collapse{{$order_row['orderNumber']}}" aria-expanded="false"
                                   aria-controls="collapseExample">{{ $order_row['orderNumber'] }}</a>

                            </th>
                            <th>{{ $order_row['created_at'] }}</th>
                            <th>{{ $order['sum'] }} kr</th>
                        </tr>

                        {{--    Here the sub-table should start with order info--}}
                        <tr class="orderItem collapse" id="collapse{{$order_row['orderNumber']}}">
                            <th>Dryck</th>
                            <th>Antal</th>
                            <th>Kostnad</th>
                        </tr>

                    @endif

                    <tr class="orderItem collapse" id="collapse{{$order_row['orderNumber']}}">
                        <td colspan="1">{{ $order_row['drinkName'] }}</td>
                        <td colspan="1">{{ $order_row['quantity'] }}</td>
                        <td colspan="1">{{ $order_row['amount'] }} kr</td>
                    </tr>

                @endforeach
            @endforeach

            <tr>
                <th colspan="2">Total kostnad köp</th>
                <th>{{$sum_orders}} kr</th>
            </tr>
            </tbody>

            <thead class="bg-dark text-light">
            <tr>
                <th colspan="2">Datum</th>
                <th colspan="1">Inbetalning</th>
            </tr>
            </thead>
            <tbody>

            {{-- Init sum of all payments --}}
            <?php
            $sum_invoices = 0;
            ?>

            @foreach ($invoices as $invoice)
                <tr>
                    <td colspan="2">{{$invoice->created_at}}</td>
                    <td colspan="1">{{$invoice->amount}} kr</td>
                </tr>

                <?php
                $sum_invoices += $invoice->amount;
                ?>
            @endforeach

            <tr>
                <th colspan="2">Totalt inbetalt</th>
                <th>{{$sum_invoices}} kr</th>
            </tr>

            </tbody>

            <tfoot class="bg-dark text-light">
            <tr>
                <th colspan="2">Total skuld</th>
                <th colspan="1">{{ $sum_orders - $sum_invoices }} kr</th>
            </tr>
            </tfoot>
        </table>

        <form method="POST" action="/history">
            @csrf
            <div class="input-group input-group-lg mb-3">
                <input hidden class="form-control" type="text" name="student_id" id="student_id"
                       value="{{$student->id}}">
                <input type="text" class="form-control" id="deposit" name="deposit" placeholder="Amount to pay"
                       placeholder="ex 10kr" min="0" max="{{ $sum_orders - $sum_invoices }}">
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
