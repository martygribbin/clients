@extends('home')

@section('Tasks', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
<h4>Clients Show</h4>
<button type="button" class="btn btn-primary">New Client</button>

<h1>Showing {{ $user->name }}</h1>

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
      <tr>
        <td>View Account</td>
        <td>{{$user->name}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->email}}</td>
      </tr>
    </tbody>
  </table>
</div>

@endsection