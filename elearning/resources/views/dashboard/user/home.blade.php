@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3" style="margin-top: 45px">
             <h4>user Dashboard</h4><hr>
             <table class="table table-striped table-inverse table-responsive">
                 <thead class="thead-inverse">
                     <tr>
                         <th>Firstname</th>
                         <th>Lastname</th>
                         <th>Email</th>
                         <th>Action</th>
                     </tr>
                     </thead>
                     <tbody>
                         <tr>
                             <td>{{ Auth::guard('web')->user()->firstName }}</td>
                             <td>{{ Auth::guard('web')->user()->lastName }}</td>
                             <td>{{ Auth::guard('web')->user()->email }}</td>
                             <td>
                                 <a href="{{ route('user.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                 <form action="{{ route('user.logout') }}" method="post" class="d-none" id="logout-form">@csrf</form>
                             </td>
                         </tr>
                     </tbody>
             </table>
        </div>
    </div>
</div>