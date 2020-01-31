@extends ('layout')

@section ('content')
<div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <h1>Ny student tillagd!</h1>
            <form action="/">
                    <button type="submit">Tillbaka till meny</button>
            </form>
@endsection