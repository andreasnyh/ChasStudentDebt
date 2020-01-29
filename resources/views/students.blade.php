@extends('layout')

@section('content')
    <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="title m-b-md">
                <h2>Vilken roll har du inom Chas Academy? Vem är du?</h2>
            </div>
            <form id="orderForm">
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

            </form>
            <form action="/">
                <button type="submit">Tillbaka till Meny</button>
            </form>

        </div>
    </div>


@endsection
<?php
