@extends('home')

@section('Tasks', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
<h4>Clients</h4>
<button type="button" class="btn btn-primary">New Client</button>
<div class="table-responsive">
     <table class="table">
    <thead>
      <tr>
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
        <td>{{$user->name}}</td>
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