<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LongTermInvestmentCaculator extends Controller
{
     public function index(){
        return 'aaa';
        return view('front.calculator.long_term_investment.investment_calculator');
    }

    public function calInvestment(Request $request)
    {
        return 'aaa';
        // return $this->calculation($data);
    }
}
