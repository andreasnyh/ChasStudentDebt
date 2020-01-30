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
                <option class="studentsALL" selected>-- Alla Klasser --</option>

                @foreach($eds as $ed)
                    <option value="{{ $ed->name }}">{{$ed->name}}</option>
                @endforeach

            </select>
            <select name="student_ID" id="student_ID" type="text"  hidden>

                <option value="" disabled selected hidden>-- Välj Student --</option>

                {{--                    Make name options dynamic based on selected studentClass--}}
                {{--                    Loop students in fwd19--}}
                @foreach($students as $student)
                    <option class="students_ALL" style="display: none" value="{{ $student->id }}">{{ $student->name }}</option>
                @endforeach
                @foreach($studentsFWD19 as $student)
                    <option class="FWD19" style="display: none" value="{{ $student->id }}">{{ $student->name }}</option>
                @endforeach
                {{--                    Loop students in fwd20--}}
                @foreach($studentsFWD20 as $student)
                    <option class="FWD20" style="display: none" value="{{ $student->id }}">{{ $student->name }}</option>
                @endforeach
                {{--                    Loop students in fwd19--}}
                @foreach($studentsIK19 as $student)
                    <option class="IK19" style="display: none" value="{{ $student->id }}">{{ $student->name }}</option>
                @endforeach
                {{--                    Loop students in fwd19--}}
                @foreach($studentsIK20 as $student)
                    <option class="IK20" style="display: none" value="{{ $student->id }}">{{ $student->name }}</option>
                @endforeach
            </select>
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
                        <td>{{$user->name}}</td>
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
