@extends('home')

@section('Tasks', 'Tasks')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')

<h4>Clients Index</h4>
<a href="{{url('admin/task/create')}}" class="btn btn-primary">New User</a>
<div class="table-responsive">
     <table class="table">
    <thead>
      <tr>
        <th>Task</th>
        <th>Task Number</th>
        <th>Task Title</th>
  
      </tr>
    </thead>
    <tbody>
      @foreach ($tasks as $task)
      <tr>
        <td><a href="{{ route('task.show', $task->id) }}" class="btn btn-success btn-sm">View Task</a></td>
        <td>{{$task->id}}</td>
        <td>{{$task->title}}</td>

      </tr>
      @endforeach
    </tbody>
  </table>
</div>


@include('errors')

@endsection