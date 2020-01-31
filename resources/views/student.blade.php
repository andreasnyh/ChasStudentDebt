@extends('layout')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                <h1>Hittar du inte dig själv? Sök här</h1>
            </div>
            <label>Filtrera</label>

            //search for students with class filter
            <select name="studentClass" id="studentClass" type="text" required>
                <option value="students_ALL" >-- Alla Klasser --</option>
                    @foreach($eds as $ed)
                        <option value="{{ $ed->name }}">{{$ed->name}}</option>
                    @endforeach
            </select>
            @if (count($students) > 1)
            <table border="1px" >
                <thead>
                <tr>
                    <th>Namn</th>
                    <th>Email</th>
                    <th>Klass</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($students as $user)
                    <tr class="studentsALL">
                    <td><a href="/history/{{$user->id}}">{{$user->name}}</a></td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->class}}</td>
                    </tr>
                @endforeach
                
                @foreach ($studentsFWD19 as $user)
                    <tr  class="FWD19" style="display: none">
                        <td >{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->class}}</td>
                    </tr>
                @endforeach
               
                @foreach ($studentsFWD20 as $user)
                    <tr  class="FWD20" style="display: none">
                        <td >{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->class}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            @else
                <p>No results found for {{$search}}</p>
            @endif
            <form method="post" action="{{url('students/search')}}">
                @csrf
                <label for ="student_search">Sök:</label>
                <input name="name" type="text" class="search" id="student_search">
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
