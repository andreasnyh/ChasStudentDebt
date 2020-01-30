@extends('layout')
    @section('content')
    <div class="content">
    <table border="1px" class="table table-striped mt-5">
        <thead class="bg-dark text-light">
            <tr>
                <th>Namn</th>
                <th>Antal</th>
                <th>Pris</th>
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
        <button class="btn btn-success mb-2"type="submit">Lägg Till</button>
    </form>
    <form method="get" action="/">
        <button class="btn btn-warning text-white"type="submit">Redigera</button>
    </form>
    <form action="/">
        <button class="btn btn-lg bg-dark text-light mt-2" type="submit">Tillbaka till Meny</button>
    </form>
</div>
    @endsection