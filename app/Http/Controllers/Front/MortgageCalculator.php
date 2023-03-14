<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MortgageCalculator extends Controller
{
    public function index(){
        $data['intrest_rate'] = [];
        return view('front.calculator.mortgage.mortgage_calculator',compact('data'));
    }

    public function calMortgage(Request $request)
    {
        return $request->all();

        return view('front.calculator.mortgage.mortgage_result',compact('result'));

    }
}
