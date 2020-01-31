@extends('layout')
    @section('content')
    <div class="content">
    <table border='1'>
        <thead>
            <tr>
                <th><h3>Namn</h3></th>
                <th><h3>Antal</h3></th>
                <th><h3>Pris</h3></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($drinks as $drink)
                <tr>
                    <td>{{$drink->name}}</td>
                    <td>{{$drink->stock}}</td>
                    <td>{{$drink->cost}}</td>
                </tr> 
            @endforeach
        </tbody>
    </table>

    <form method="get" action="/drinksAdd">
        <input type="submit" value="Lägg Till"> 
    </form>
    <form method="get" action="/drinksEdit">
    <input type="submit" value="Redigera">
    </form>
    <form method="get" action="/drinksRemove">
    <input type="submit" value="Ta bort">
    </form>
    <a href="/"><button>Tillbaka till Meny</button></a>
    </div>
    
    @endsection