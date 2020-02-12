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

                <tr>
                    <td>{{ $order->orderNumber }}</td>
                    <td>{{ $order->created_at }}</td>
                    <td>{{ $order->amount }} kr</td>
                </tr>

            @endforeach
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
                    <td colspan="1">{{-- {{$totalPrice}} --}} kr</td>
                </tr>
            </tfoot>
        </table>
        <form method="POST" action="/history">
                @csrf
                <div class="input-group input-group-lg mb-3">
                    <input hidden class="form-control" type="text" name="student_id" id="student_id" value="{{$student->id}}">
                    <input type="text" class="form-control" id="deposit" name="deposit" placeholder="Amount to pay" placeholder="ex 10kr" min="0" max="{{-- {{$totalPrice}} --}}">
                    <div class="input-group-append">
                        <button class="btn btn-outline-success" type="submit">Pay</button>
                    </div>
                </div>
        </form>
        <a href="/"><button class="btn btn-lg bg-dark text-light">Tillbaka till Meny</button></a>
    </div>
@endsection
