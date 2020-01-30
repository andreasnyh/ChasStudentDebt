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
                    <option value="1">Student 1</option>
{{--                    @if(  === 'FWD19')
                    <option value="studentId">Student 1 FWD19</option>
                    <option value="studentId">Student 2 FWD19</option>
                    <option value="studentId">Student 3 FWD19</option>
                                            @elseif
                    <option value="student 1">Student 1</option>
                    <option value="student 2">Student 2</option>
                    <option value="student 3">Student 3</option>
                    @elseif--

                        <option value="2">Student 2</option>
                        <option value="3">Student 3</option>
{{--                                            @endif--}}}}
                </select>
                <table border="1px"><br>
                    <thead>Välj dryck</thead>
                    <tr>
                        <td>Dryck</td>
                        <td>Pris</td>
                        <td>Antal</td>
                    </tr>
                    <tr>
                        <td>Öl</td>
                        <td>10kr</td>
                        <td>
                            <button type="button" id="subtBeer">-</button>
                            <input type="number" name="beer_quantity" id="beer_quantity" placeholder="0" value="0" min="0" max="10">
                            <button type="button" id="addBeer">+</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Vin</td>
                        <td>10kr</td>
                        <td>
                            <button type="button" id="subtWine">-</button>
                            <input type="number" name="wine_quantity" id="wine_quantity" placeholder="0" value="0" min="0" max="10">
                            <button type="button" id="addWine">+</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Läsk</td>
                        <td>5kr</td>
                        <td>
                            <button type="button" id="subtSoda">-</button>
                            <input type="number" name="softdrink_quantity" id="softdrink_quantity" placeholder="0" value="0" min="0" max="10">
                            <button type="button" id="addSoda">+</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Moonshine</td>
                        <td>6kr</td>
                        <td>
                            <button type="button" id="subtMoon">-</button>
                            <input type="number" name="moonshine_quantity" id="moonshine_quantity" placeholder="0" value="0" min="0" max="10">
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
        studentClassSelect.onchange = function () {
            let student = document.getElementById("student_ID").removeAttribute("disabled");
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
