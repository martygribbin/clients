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
      <div class="panel-heading">{{$task->title}}</div>
      <div class="panel-body">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
    </div>
@endforeach
@endsection

