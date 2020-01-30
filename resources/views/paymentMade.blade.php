@extends('layout')

@section('content')
    <h1>Payment made</h1>
<p>customer: {{$student_id}} made a deposit for {{$deposit}}kr</p>
@endsection