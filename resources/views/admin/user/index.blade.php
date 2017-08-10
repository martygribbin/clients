@extends('home')

@section('Tasks', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
<h4>Clients Index</h4>
<a href="{{url('admin/user/create')}}" class="btn btn-primary">New User</a>
<div class="table-responsive">
     <table class="table">
    <thead>
      <tr>
        <th>Account</th>
        <th>Business Name</th>
        <th>Primary Contact</th>
        <th>Email</th>
        <th>Website</th>
        <th>Account</th>      
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
      <tr>
        <td><a href="{{url('admin/user/'.$user->id.'')}}" class="btn btn-success btn-sm">View User Details</a></td>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->email}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>


@endsection

