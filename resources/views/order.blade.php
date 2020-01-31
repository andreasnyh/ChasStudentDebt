@extends('layout')

@section('content')
<div class="content">
    <div class="title m-b-md">
        <h1 class="mt-5">Köp något att dricka vettja!</h1>
    </div>

    <form id="orderForm" action="/order/new" method="GET">
        <select class="custom-select custom-select-sm mt-3 mr-2" name="studentClass" id="studentClass" type="text"
            required>
            <option value="" disabled selected hidden>-- Välj Klass --</option>

            @foreach($eds as $ed)
            <option value="{{ $ed->name }}">{{$ed->name}}</option>
            @endforeach

        </select>
        <select class="custom-select custom-select-sm mt-3" name="student_ID" id="student_ID" type="text" required
            disabled>

            <option value="" disabled selected hidden>-- Välj Student --</option>

            {{--                    Make name options dynamic based on selected studentClass--}}
            {{--                    Loop students in fwd19--}}
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

        <table class="table table-striped mt-4" border="1px">
            <thead class="bg-dark text-light">
                <th colspan="100%">Välj dryck</th>
                <tr>
                    <th>Dryck</th>
                    <th>Pris</th>
                    <th>Antal</th>
                </tr>
            </thead>
            <tr>
                <td>Öl</td>
                <td>10kr</td>
                <td>
                    <button class="btn btn-sm btn-outline-danger" type="button" id="subtBeer">-</button>
                    <input class="p-1" type="number" name="beer_quantity" id="beer_quantity" placeholder="0" value="0"
                        min="0" max="10">
                    <button class="btn btn-sm btn-outline-success" type="button" id="addBeer">+</button>
                </td>
            </tr>
            <tr>
                <td>Vin</td>
                <td>10kr</td>
                <td>
                    <button class="btn btn-sm btn-outline-danger" type="button" id="subtWine">-</button>
                    <input type="number" name="wine_quantity" id="wine_quantity" placeholder="0" value="0" min="0"
                        max="10">
                    <button class="btn btn-sm btn-outline-success" type="button" id="addWine">+</button>
                </td>
            </tr>
            <tr>
                <td>Läsk</td>
                <td>5kr</td>
                <td>
                    <button class="btn btn-sm btn-outline-danger" type="button" id="subtSoda">-</button>
                    <input type="number" name="softdrink_quantity" id="softdrink_quantity" placeholder="0" value="0"
                        min="0" max="10">
                    <button class="btn btn-sm btn-outline-success" type="button" id="addSoda">+</button>
                </td>
            </tr>
            <tr>
                <td>Moonshine</td>
                <td>6kr</td>
                <td>
                    <button class="btn btn-sm btn-outline-danger" type="button" id="subtMoon">-</button>
                    <input type="number" name="moonshine_quantity" id="moonshine_quantity" placeholder="0" value="0"
                        min="0" max="10">
                    <button class="btn btn-sm btn-outline-success" type="button" id="addMoon">+</button>
                </td>
            </tr>
        </table>
        <button class="btn btn-outline-success mr-3" type="submit">Köp dryck</button>
        <button class="btn btn-outline-danger" type="reset">Ångra</button>
    </form>
    <form action="/">
        <button class="btn btn-lg bg-dark text-light mt-2" type="submit">Tillbaka till Meny</button>
    </form>

</div>


@endsection
