@extends('home')

@section('Tasks', 'Tasks')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
@include('errors')

<h1>{{ $task->title }}</h1>
<p class="lead">{{ $task->description }}</p>



@endsection