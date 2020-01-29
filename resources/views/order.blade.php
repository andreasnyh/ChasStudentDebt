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

                    <option value="FWD18">FWD18</option>
                    <option value="FWD19">FWD19</option>
                    <option value="IK19">IK19</option>

                </select>
                <select name="student_ID" id="student_ID" type="text" required disabled>

                    <option value="" disabled selected hidden>-- Välj Student --</option>

{{--                    @if(  === 'FWD19')
                    <option value="studentId">Student 1 FWD19</option>
                    <option value="studentId">Student 2 FWD19</option>
                    <option value="studentId">Student 3 FWD19</option>
                                            @elseif
                    <option value="student 1">Student 1</option>
                    <option value="student 2">Student 2</option>
                    <option value="student 3">Student 3</option>
                    @elseif--}}
                        <option value="1">Student 1</option>
                        <option value="2">Student 2</option>
                        <option value="3">Student 3</option>
{{--                                            @endif--}}
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
                            <input type="number" name="beerQuantity" id="beerQuantity" placeholder="0" value="0" min="0" max="10">
                            <button type="button" id="addBeer">+</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Vin</td>
                        <td>10kr</td>
                        <td>
                            <button type="button" id="subtWine">-</button>
                            <input type="number" name="wineQuantity" id="wineQuantity" placeholder="0" value="0" min="0" max="10">
                            <button type="button" id="addWine">+</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Läsk</td>
                        <td>5kr</td>
                        <td>
                            <button type="button" id="subtSoda">-</button>
                            <input type="number" name="sodaQuantity" id="sodaQuantity" placeholder="0" value="0" min="0" max="10">
                            <button type="button" id="addSoda">+</button>
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
            document.getElementById("student_ID").removeAttribute("disabled");
            return studentClassSelect.value;
        };

        //    Add and subtract from Beer order
        let beerQuantity = document.getElementById('beerQuantity');
        let addBeer = document.getElementById('addBeer');
        let subtBeer = document.getElementById('subtBeer');

        addBeer.addEventListener("click", function () {
            beerQuantity.value++;
        });

        subtBeer.addEventListener("click", function () {
            if (beerQuantity.value > 0) {
                beerQuantity.value--;
            }
        });

        //    Add and subtract from Wine order
        let wineQuantity = document.getElementById('wineQuantity');
        let addWine = document.getElementById('addWine');
        let subtWine = document.getElementById('subtWine');

        addWine.addEventListener("click", function () {
            wineQuantity.value++;
        });

        subtWine.addEventListener("click", function () {
            if (wineQuantity.value > 0) {
                wineQuantity.value--;
            }
        });

        //    Add and subtract from Soda order
        let sodaQuantity = document.getElementById('sodaQuantity');
        let addSoda = document.getElementById('addSoda');
        let subtSoda = document.getElementById('subtSoda');

        addSoda.addEventListener("click", function () {
            sodaQuantity.value++;
        });

        subtSoda.addEventListener("click", function () {
            if (sodaQuantity.value > 0) {
                sodaQuantity.value--;
            }
        });

    </script>
@endsection
