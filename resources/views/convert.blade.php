@extends('layouts.master')

@section('title')
 Conversion Screen
@endsection

@section('content')
@include('includes.header')
<div class="container"
    <div class="row">
        <div class="col-md-6">
            <header><h3>Enter the Currency and rate</h3></header>
            
            <form action="{{route('cal_currency')}}" method="post" class="form-color">
               <div class="form-group">
                   <label >From</label>
                   <select name="from_select"l >
                       <option value="12" >USD</option>
                   </select>
                   <label >To</label>
                   <select name="to_select"l >
                       <option value="23" >USD</option>
                   </select>
                   <br />
                   <input class="form-control" type="number"  name="to_cur" id="to_cur"  />
                </div>
                
                <button type="submit" class="btn btn-sucess">Convert</button>
                <br />
                <br />
                <input class="form-control" type="number" disabled="true" name="cal_cur" id="cal_cur"  />
                <div class="form-group">
                   
                </div> 
            
            
            <input type="hidden" name="_token" value="{{Session::token()}}" />
                
        
            </form>
            </div>
    </div>
</div>
@endsection


