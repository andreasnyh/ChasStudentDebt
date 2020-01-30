@extends('layout')
    @section('content')
    <table>
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
                    <td>{{$drink->cost}}:-</td>
                </tr> 
            @endforeach
           
        </tbody>
        
       
    </table>
    <form method="get" action="/">
        <input type="submit" value="Lägg Till"> 
    </form>
    <form method="get" action="/">
    <input type="submit" value="Redigera">
    </form>
    @endsection