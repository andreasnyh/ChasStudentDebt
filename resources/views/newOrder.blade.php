<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

{{--    @section('content')--}}
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Köp en öl vettja!
                </div>

                <form>
                    <select name="studentClass" id="studentClass" type="text" required>
                        <option value="" disabled selected hidden>-- Välj Klass --</option>

                        <option value="FWD18">FWD18</option>
                        <option value="FWD19">FWD19</option>
                        <option value="IK19">IK19</option>

                    </select>
                    <select name="studentName" id="studentName" type="text" required disabled>

                        <option value="" disabled selected hidden>-- Välj Student --</option>

{{--                        @if(  === 'FWD19')--}}
                            <option value="studentId">Student 1 FWD19</option>
                            <option value="studentId">Student 2 FWD19</option>
                            <option value="studentId">Student 3 FWD19</option>
{{--                        @elseif--}}
                            <option value="studentId">Student 1</option>
                            <option value="studentId">Student 2</option>
                            <option value="studentId">Student 3</option>
                            {{-- @elseif--}}{{--
                                <option value="studentId">Student 1</option>
                                <option value="studentId">Student 2</option>
                                <option value="studentId">Student 3</option>--}}
{{--                        @endif--}}
                    </select>
                    <table border="1px"><br>
                        <thead>Välj dryck</thead>
                        <tr>
                            <td>Öl</td><td><input type="number" name="beerQuantity" min="0" max="10"></td>
                        </tr>
                    </table>
                    <button type="submit">Köp dryck</button>
                </form>




            </div>
        </div>
<script>
    let studentClassSelect = document.getElementById("studentClass");
        studentClassSelect.onchange = function () {
        document.getElementById("studentName").removeAttribute("disabled");
        return studentClassSelect.value;
    };
</script>
{{--        @endsection--}}
    </body>
</html>
