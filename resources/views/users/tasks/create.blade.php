@extends('home')

@section('Tasks', 'Tasks')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
@include('errors')

<div class="container-fluid">
  <h1>New Task</h1>
  <p>Please enter a new task request for changes to your website.  </p>
  <div class="row">
    <div class="col-sm-8"><form>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
<div class="form-group">
  <label for="comment">Comment:</label>
  <textarea class="form-control" rows="5" id="comment"></textarea>
</div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>

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
<ul class="list-group">
  <li class="list-group-item list-group-item-success">First item</li>
  <li class="list-group-item list-group-item-info">Second item</li>
  <li class="list-group-item list-group-item-warning">Third item</li>
  <li class="list-group-item list-group-item-danger">Fourth item</li>
  <li class="list-group-item list-group-item-danger">Fourth item</li>
</ul>
</div>



  </div>
</div>


@endsection