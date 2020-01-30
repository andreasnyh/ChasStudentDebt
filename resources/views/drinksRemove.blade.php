@extends('layout')

@section('content')

<h2>Ta bort dryck</h2>

<table>
        <thead>
            <tr>
                <th><h3>Namn</h3></th>
                <th><h3>Antal</h3></th>
                <th><h3>Pris</h3></th>
                <th><h3>Ta bort</h3></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($drinks as $drink)
                <tr>
                    <td>{{$drink->name}}</td>
                    <td>{{$drink->stock}}</td>
                    <td>{{$drink->cost}}:-</td>
                    <td><a href = '/drinksRemoveMade/{{ $drink->name }}'><button>Ta bort</button></a></td>
                </tr> 
            @endforeach
        </tbody>
    </table>

<a href="/drinks"><button>Tillbaka till Drycker</button></a>

@endsection