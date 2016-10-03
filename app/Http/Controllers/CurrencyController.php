<?php

namespace App\Http\Controllers;

use App\Currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function getConversion_Cur(){
        return view('convert');
    }
    
    public function postConvert(Request $request){
        $this->validate($request,[
            'to_cur' => 'required',
            'from_select' => 'required',
            'to_select' => 'required',
        ]);
        
        $to_cur = $request['to_cur'];
        $from_select = $request['from_select'];
        $to_select = $request['to_select'];
        
        
        
    }
    
    public function getConversion(){
        $currencies = Currency::all();
        return view('conversion', ['currencies' => $currencies]);
    }

    public function postCreateCurrency(Request $request){
        $this->validate($request,[
            'currency' => 'required|max:3',
            'rate'=>'required',
            
        ]);
        
        $currency = $request['currency'];
        $rate = $request['rate'];
        
            $currency_conversion = new Currency();
            $currency_conversion->rate = $rate;
            $currency_conversion->currency = $currency;

        
            $currency_conversion->save();
        
            return redirect()->route('conversion')->with(['message' => 'Successfully created']);
        
        
    }
    
    public function getDeletePost($curren_id){
        $currencies = Currency::where('id',$curren_id)->first();
        $currencies->delete();
        return redirect()->route('conversion')->with(['message' => 'Successfully deleted']);
    }
    
    
    public function postResetAll(){
        $currencies = Currency::truncate();
        return redirect()->route('conversion')->with(['message' => 'Successfully deleted']);
    }
}

