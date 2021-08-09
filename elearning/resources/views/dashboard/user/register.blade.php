@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4" style="margin-top: 45px;">
            <h4>User Register</h4><hr>
            <form action="{{route('user.create')}}" method="post" autocomplete="off">
                @if (Session::get('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif
                @if (Session::get('fail'))
                    <div class="alert alert-danger">
                        {{Session::get('fail')}}
                    </div>
                @endif
                @csrf
                <div class="form-group">
                    <label for="email">Firstname</label>
                    <input type="text" class="form-control" name="firstName" placeholder="Enter firstname" value="{{old('firstName')}}">
                    <span class="text-danger">@error('firstName'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="email">Lastname</label>
                    <input type="text" class="form-control" name="lastName" placeholder="Enter lastname" value="{{old('lastName')}}">
                    <span class="text-danger">@error('lastName'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{old('email')}}">
                    <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter password" value="{{old('password')}}">
                    <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="cpassword">Confirme Password</label>
                    <input type="password" class="form-control" name="cpassword" placeholder="Enter Confirm password" value="{{old('cpassword')}}">
                    <span class="text-danger">@error('cpassword'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
                <br>
                <a href="{{route('user.login')}}"> I already have an account</a>
            </form>

        </div>

    </div>
</div>