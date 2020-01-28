@extends('layout')

@section('content')
    <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="title m-b-md">
                <h1>Köp något att dricka vettja!</h1>
            </div>

            <form id="orderMadeForm">
                <p>Tack för din order med nr: {{ $order }}</p>
                <button type="submit">Köp dryck</button>
                <button type="reset">Ångra</button>
            </form>

            <form action="/">
                <button type="submit">Tillbaka till Meny</button>
            </form>

        </div>
    </div>

@endsection
