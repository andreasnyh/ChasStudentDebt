@extends('layout')

@section('content')

<div class="content">
<h2>Redigera dryck</h2>


<form method="GET" action="/drinksEditMade">
    @csrf
    
    <p>Namn</p>
    <input type="text" name="{{$drinks->name}}" value="{{$drinks->name}}">
    <p>Antal</p>
    <input type="text" name="{{$drinks->stock}}" value="{{$drinks->stock}}">
    <p>Pris</p>
    <input type="text" name="{{$drinks->cost}}" value="{{$drinks->cost}}">
    <input type="submit" name="submit" value="Redigera"> 
    
    </form>


<a href="/drinks"><button>Tillbaka till Drycker</button></a>


</div>

@endsection