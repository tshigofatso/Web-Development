@extends('layouts.master')

@section('title')
 Conversion Screen
@endsection

@section('content')
@include('includes.header')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            
            <header><h3>Enter the Currency and rate</h3></header>
            <form action="{{route('man_convert')}}" method="post" class="form-color">
                
                
                        <div class="form-group">
                            <div class="form-group {{$errors->has('currency') ? 'has-error': ''}}">
                        <label for="currency">Currency</label>
                        <input class="form-control" type="text"  name="currency" id="currency" value="{{Request::old('currency')}}" />

                    </div>

                    <div class="form-group {{$errors->has('rate') ? 'has-error': ''}}">
                        <label for="rate">Rate</label>
                        <input class="form-control" type="number" step="any" name="rate" id="rate" value="{{Request::old('rate')}}"/>
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                    <input type="hidden" name="_token" value="{{Session::token()}}" />
                        </div>
                
            </form>
            <br /> <br />
            <form action="{{route('reset_all')}}" method="post">
            <button type="submit" class="btn btn-primary">Reset App</button>
            <input type="hidden" name="_token" value="{{Session::token()}}" />
                </div>
            </form>
        </div>
    
        <div class="row">
        <div class="col-md-2 tbl_headaer">Currency</div>
        <div class="col-md-2 tbl_headaer">Rate</div>
        <div class="col-md-1 tbl_headaer">Delete</div>
    </div>
    @foreach($currencies as $currency)
        <div class="row">
            <div class="col-md-2 tbl_field">{{$currency->Currency}}</div>
            <div class="col-md-2 tbl_field">{{$currency->Rate}}</div>
            <div class="col-md-1 tbl_field"><a class="btn btn-primary" href="{{route('currency.delete',['curren_id' => $currency->id])}}" >Delete</a></div>
        </div>
    @endforeach
    
    </div>
    
    
@endsection

