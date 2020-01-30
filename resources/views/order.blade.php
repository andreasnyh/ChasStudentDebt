@extends('layout')

@section('content')
    <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="title m-b-md">
                <h1>Köp något att dricka vettja!</h1>
            </div>

            <form id="orderForm" action="/order/new" method="GET">
                <select name="studentClass" id="studentClass" type="text" required>
                    <option value="" disabled selected hidden>-- Välj Klass --</option>

                    @foreach($eds as $ed)
                        <option value="{{ $ed->name }}">{{$ed->name}}</option>
                    @endforeach

                </select>
                <select name="student_ID" id="student_ID" type="text" required disabled>

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

                <table border="1px">
                    <thead>
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
                            <button type="button" id="subtBeer">-</button>
                            <input type="number" name="beer_quantity" id="beer_quantity" placeholder="0" value="0"
                                   min="0" max="10">
                            <button type="button" id="addBeer">+</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Vin</td>
                        <td>10kr</td>
                        <td>
                            <button type="button" id="subtWine">-</button>
                            <input type="number" name="wine_quantity" id="wine_quantity" placeholder="0" value="0"
                                   min="0" max="10">
                            <button type="button" id="addWine">+</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Läsk</td>
                        <td>5kr</td>
                        <td>
                            <button type="button" id="subtSoda">-</button>
                            <input type="number" name="softdrink_quantity" id="softdrink_quantity" placeholder="0"
                                   value="0" min="0" max="10">
                            <button type="button" id="addSoda">+</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Moonshine</td>
                        <td>6kr</td>
                        <td>
                            <button type="button" id="subtMoon">-</button>
                            <input type="number" name="moonshine_quantity" id="moonshine_quantity" placeholder="0"
                                   value="0" min="0" max="10">
                            <button type="button" id="addMoon">+</button>
                        </td>
                    </tr>
                </table>
                <button type="submit">Köp dryck</button>
                <button type="reset">Ångra</button>
            </form>

            <form action="/">
                <button type="submit">Tillbaka till Meny</button>
            </form>

        </div>
    </div>

    <script>
        let studentClassSelect = document.getElementById("studentClass");
        let FWD19 = document.querySelectorAll(".FWD19");
        let FWD20 = document.querySelectorAll(".FWD20");
        let IK19 = document.querySelectorAll(".IK19");
        let IK20 = document.querySelectorAll(".IK20");

        studentClassSelect.onchange = function () {
            let student = document.getElementById("student_ID").removeAttribute("disabled");

            if (studentClassSelect.value == "FWD19") {
                for (let i = 0; i < FWD19.length; i++) {
                    FWD19[i].style.display = 'initial';
                }
            } else {
                for (let i = 0; i < FWD19.length; i++) {
                    FWD19[i].style.display = 'none';
                }
            }

            if (studentClassSelect.value == "FWD20") {
                for (let i = 0; i < FWD20.length; i++) {
                    FWD20[i].style.display = 'initial';
                }
            } else {
                for (let i = 0; i < FWD20.length; i++) {
                    FWD20[i].style.display = 'none';
                }
            }

            if (studentClassSelect.value == "IK19") {
                for (let i = 0; i < IK19.length; i++) {
                    IK19[i].style.display = 'initial';
                }
            } else {
                for (let i = 0; i < IK19.length; i++) {
                    IK19[i].style.display = 'none';
                }
            }

            if (studentClassSelect.value == "IK20") {
                for (let i = 0; i < IK20.length; i++) {
                    IK20[i].style.display = 'initial';
                }
            } else {
                for (let i = 0; i < IK20.length; i++) {
                    IK20[i].style.display = 'none';
                }
            }
            return studentClassSelect.value;
        };

        //    Add and subtract from Beer order
        let beer_quantity = document.getElementById('beer_quantity');
        let addBeer = document.getElementById('addBeer');
        let subtBeer = document.getElementById('subtBeer');

        addBeer.addEventListener("click", function () {
            if (beer_quantity.value < 10) {
                beer_quantity.value++;
            }
        });

        subtBeer.addEventListener("click", function () {
            if (beer_quantity.value > 0) {
                beer_quantity.value--;
            }
        });

        //    Add and subtract from Wine order
        let wine_quantity = document.getElementById('wine_quantity');
        let addWine = document.getElementById('addWine');
        let subtWine = document.getElementById('subtWine');

        addWine.addEventListener("click", function () {
            if (wine_quantity.value < 10) {
                wine_quantity.value++;
            }
        });

        subtWine.addEventListener("click", function () {
            if (wine_quantity.value > 0) {
                wine_quantity.value--;
            }
        });

        //    Add and subtract from Soda order
        let softdrink_quantity = document.getElementById('softdrink_quantity');
        let addSoda = document.getElementById('addSoda');
        let subtSoda = document.getElementById('subtSoda');

        addSoda.addEventListener("click", function () {
            if (softdrink_quantity.value < 10) {
                softdrink_quantity.value++;
            }
        });

        subtSoda.addEventListener("click", function () {
            if (softdrink_quantity.value > 0) {
                softdrink_quantity.value--;
            }
        });

        //    Add and subtract from Moonshine order
        let moonshine_quantity = document.getElementById('moonshine_quantity');
        let addMoon = document.getElementById('addMoon');
        let subtMoon = document.getElementById('subtMoon');

        addMoon.addEventListener("click", function () {
            if (moonshine_quantity.value < 10) {
                moonshine_quantity.value++;
            }
        });

        subtMoon.addEventListener("click", function () {
            if (moonshine_quantity.value > 0) {
                moonshine_quantity.value--;
            }
        });

    </script>
@endsection
