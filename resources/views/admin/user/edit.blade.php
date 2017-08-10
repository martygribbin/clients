@extends('home')

@section('Tasks', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
<h4>Clients edit</h4>


@endsection