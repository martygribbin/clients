@extends('home')

@section('Tasks', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
<h2>Tasks</h2>
<p>View All Submitted Tasks</p>
</hr>
 @foreach ($tasks as $task)

 @if($task->completed == true)
    <div class="panel panel-success">
 @else
    <div class="panel panel-danger">
@endif
      <div class="panel-heading"><a href="{{ route('tasks.show', $task->id) }}">{{$task->title}}</a></div> 
      <div class="panel-body">{{$task->description}}</div>
    </div>
@endforeach
@endsection

