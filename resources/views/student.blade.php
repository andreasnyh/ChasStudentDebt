@extends('layout')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                <h1>Hittar du inte dig själv? Sök här</h1>
            </div>

            <form id="orderForm">
                <select name="studentClass" id="studentClass" type="text" required>
                    <option value="" disabled selected hidden>-- Välj Klass --</option>
                   @foreach ($edu as $program)
                    <option value="{{ $program->name }}">{{ $program->name }}</option> 
                   @endforeach


)



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
