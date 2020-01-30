@extends('layout')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                <h1>Hittar du inte dig själv? Sök här</h1>
            </div>
            <label>Filtrera</label>

            //search for students with class filter
            <form method="get" action="/student/{education}">
                <select name="studentClass" id="studentClass" type="text">
                    <option value="" disabled selected hidden>-- Välj Klass --</option>
                       @foreach ($edu as $program)
                           <option value="{{ $program->name }}">{{ $program->name }}</option>
                       @endforeach
                </select>
                <input type="submit" value="Visa val">
            </form>

            <form action="/student/{$user->id}">
                <select name="studentName" id="studentName" type="text" required>
                    <option value="" disabled selected hidden>-- Välj Student --</option>
                        @foreach ($student as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                </select>
                <input type="submit" value="Visa val">
            </form>
            <table border="1px">
                <thead>
                <tr>
                    <th>Namn</th>
                    <th>Email</th>
                    <th>Klass</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($student as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->class}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <form method="get" action="GET/student/{name}">
                <label for ="student_search">Sök:</label>
                <input type="text" class="search" id="student_search">
                <button type="submit">Sök student</button>
            </form>



            <form action="/student/add">
                <button type="submit">Lägg till student</button>
            </form>
            <form action="/">
                <button type="submit">Tillbaka till Meny</button>
            </form>
        </div>
    </div>
@endsection
