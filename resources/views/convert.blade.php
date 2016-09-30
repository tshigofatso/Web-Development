@extends('layouts.master')

@section('title')
 Conversion Screen
@endsection

@section('content')
@include('includes.header')

    <div class="row">
        <div class="col-md-6">
            <header><h3>Enter the Currency and rate</h3></header>
            
            <form action="{{route('convert_cur')}}" method="post">
               <div class="form-group">
                    
                        <select name="from_cur" id="from_cur" class="form-control">
                            @foreach($currencies as $currency)
                                <option value="{{$currency->Rate}}">{{$currency->Currency}}</option>
                            @endforeach
                        </select>
                </div>
                <div class="form-group">
                     
                        <select name="To_cur" id="To_cur" class="form-control">
                            @foreach($currencies as $currency)
                                <option value="{{$currency->Rate}}">{{$currency->Currency}}</option>
                            @endforeach
                        </select>
                </div> 
            
            <button type="submit" class="btn btn-primary">Convert</button>
            <input type="hidden" name="_token" value="{{Session::token()}}" />
                
        
            </form>
            </div>
    </div>

@endsection


