@extends('layouts.master')

@section('title')
 Conversion Screen
@endsection

@section('content')
@include('includes.header')
@if(count($errors) > 0)
<div class="row">
    <div class="col-md-6">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <header><h3>Enter the Currency and rate</h3></header>
            <form action="{{route('man_convert')}}" method="post">
                <div class="form-group">
                    <div class="form-group {{$errors->has('currency') ? 'has-error': ''}}">
                <label for="currency">Currency</label>
                <input class="form-control" type="text"  name="currency" id="currency" value="{{Request::old('currency')}}" />
            </div>
            
            <div class="form-group {{$errors->has('rate') ? 'has-error': ''}}">
                <label for="rate">Rate</label>
                <input class="form-control" type="text" step="any" name="rate" id="rate" value="{{Request::old('rate')}}"/>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
            <input type="hidden" name="_token" value="{{Session::token()}}" />
                </div>
            </form>
            <header><h3>Reset Application</h3></header>
            <form action="{{route('reset_all')}}" method="post">
            <button type="submit" class="btn btn-primary">Reset</button>
            <input type="hidden" name="_token" value="{{Session::token()}}" />
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">Currency</div>
        <div class="col-md-4">Rate</div>
        <div class="col-md-2">Edit</div>
        <div class="col-md-2">Delete</div>
    </div>
    @foreach($currencies as $currency)
        <div class="row">
            <div class="col-md-4">{{$currency->Currency}}</div>
            <div class="col-md-4">{{$currency->Rate}}</div>
            <div class="col-md-2"><a href="" >Edit</a></div>
            <div class="col-md-2"><a href="{{route('currency.delete',['curren_id' => $currency->id])}}" >Delete</a></div>
        </div>
    @endforeach
    
    
</div>
    
@endsection

