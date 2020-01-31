@extends('layout')

@section('content')

<h2>Lägg till student</h2>


    <form action="/submit" method="ADD">
                    <select type="text" name="class" required>

                        <option selected hidden disabled>--Välj Klass--</option>

                    @foreach ($eds as $ed)
                        <option name="{{$ed->name}}" value="{{$ed->name}}">{{$ed->name}}</option>
                    @endforeach

                    </select>
                    <table>
                        <input type="text" name="name" placeholder="Name" required>
                        <input type="text" name="email" placeholder="Email" required>
                    </table>
               
                    <button type="submit">Lägg till student</button>
                </form>
                <form action="/">
                    <button type="submit">Tillbaka till meny</button>
                </form>

@endsection