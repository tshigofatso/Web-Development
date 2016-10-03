@extends('layouts.master')

@section('title')
 Welcome!
@endsection

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-6">
        <br />
        <br />
        <header><h3>Welcome to Currency Conversion</h3></header>
        <form action="{{route('signin')}}" method="post" class="form-color">
            
            <div class="form-group {{$errors->has('email') ? 'has-error': ''}}">
                <label for="first_name">First Name</label>
                <input class="form-control" type="text" name="first_name" id="first_name" value="{{Request::old('first_name')}}"/>
            </div>
            <div class="form-group {{$errors->has('second_name') ? 'has-error': ''}}">
                <label for="second_name">Second Name</label>
                <input class="form-control" type="text" name="second_name" id="second_name" value="{{Request::old('second_name')}}" />
            </div>
            
            <div class="form-group {{$errors->has('email') ? 'has-error': ''}}">
                <label for="email">Email</label>
                <input class="form-control" type="text" name="email" id="email" value="{{Request::old('email')}}" />
            </div>
            
            <div class="form-group {{$errors->has('password') ? 'has-error': ''}}">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" id="password" value="{{Request::old('password')}}"/>
            </div>
            <button type="submit" class="btn btn-primary">SignIn</button>
            <a href="http://php.net" target="top" class="btn btn-sucess">SingUp</a> 
            <input type="hidden" name="_token" value="{{Session::token()}}" />
        </form>
    </div>
</div>
    </div>
@endsection