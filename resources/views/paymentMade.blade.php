@extends('layout')

@section('content')
    <h1>Payment made</h1>
<p><strong>{{$name}}<strong> made a deposit for {{$deposit}}kr</p>
<a href="/history/{{$student_id}}"><button>Back to your history</button></a>
@endsection