@extends('layout')

@section('content')

<h2>Lägg till dryck</h2>


<form method="GET" action="/drinksAddMade">
    @csrf
    <p>Namn</p>
    <input type="text" name="name">
    <p>Antal</p>
    <input type="text" name="stock">
    <p>Pris</p>
    <input type="text" name="cost">
    <input type="submit" name="submit" value="Lägg Till"> 
    </form>

<a href="/"><button>Tillbaka till startmeny</button></a>

@endsection