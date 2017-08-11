@extends('home')

@section('Tasks', 'Tasks')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
@include('errors')

<div class="container-fluid">
  @if(Session::has('flash_message'))
    <div class="alert alert-success">
        {{ Session::get('flash_message') }}
    </div>
@endif
  <h1>New Task</h1>
  <p>Please enter a new task request for changes to your website.  </p>
  <div class="row">
    <div class="col-sm-8">

{!! Form::open([
    'route' => 'tasks.store'
]) !!}

<div class="form-group">
    {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Create New Task', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

</div>


    <div class="col-sm-4">
<h3>Yearly Allocation</h3>
<p>Please note you have used 40% of your yearley allocation</p>
<div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
  aria-valuemin="0" aria-valuemax="100" style="width:40%">
    40% Complete 
  </div>
</div>

<h3>Previous 5 Tasks</h3>
 @foreach ($tasks as $task)
 @if($task->completed == true)
    <div class="panel panel-success">
 @else
    <div class="panel panel-danger">
@endif
      <div class="panel-heading">{{$task->title}}</div>
    </div>
@endforeach
</div>




  </div>
</div>


@endsection