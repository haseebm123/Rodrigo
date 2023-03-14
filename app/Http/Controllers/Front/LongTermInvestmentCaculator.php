<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LongTermInvestmentCaculator extends Controller
{
     public function index(){
        $data['intrest_rate'] = $this->getIntrestRates();
        return view('front.calculator.long_term_investment.investment_calculator',compact('data'));
    }

    public function calInvestment(Request $request)
    {

        $age = $request->starting_age;
        $create_tabel = $this->getTableInfo($request->all());
        $initail_investment = $request->initail_investment;
        $recurring_monthly_investment = $request->recurring_monthly_investment;
        $result = $this->yearlyTable($create_tabel,$age,$initail_investment,$recurring_monthly_investment );

        return view('front.calculator.long_term_investment.car_loan_result',compact('result'));

    }

    public function yearlyTable($arr,$age,$initail, $recurring)
    {
        $result = [];
        $index = 11;
        for ($i=0; $i <= count($arr) ; $i++) {
            if (isset($arr[$i*12])) {
                # code...
                $result[$i]['years'] = $i+1 ;
                $result[$i]['age'] = $age + $result[$i]['years'];
                $result[$i]['total_balance_year'] = $arr[$index]['intrest']??null;
                if ($i == 0) {
                    # code...
                    $result[$i]['total_invest_year'] = $initail + (11 * $recurring);
                }else{
                    $last_index = $result[$i-1]['total_invest_year'];
                    $result[$i]['total_invest_year'] = $last_index + ($recurring *12);

                }
                $result[$i]['total_intrest_year'] = round($result[$i]['total_balance_year'] - $result[$i]['total_invest_year'],2) ;
                $index = $index + 12;
            }

        }

        return $result;

    }

    public function getTableInfo($data)
    {

        $days = 30 * 12;
        $j = 0;
        $ini_investment = $data['initail_investment'];
        $interest_rate = $data['interest_rate'];
        $recurring_monthly_investment = $data['recurring_monthly_investment'];
        for ($i=1; $i <= $days; $i++) {
            $result[$i-1][''] = '';
            $result[$i-1]['day'] = $i;
            if ($i == 1) {
            $result[$i-1]['col_3'] = (float) $ini_investment + 0.00;
            $result[$i-1]['intrest'] = $this->getIntrest($ini_investment,$interest_rate);

            }else{
                $result[$i-1]['col_3'] = (float) $result[$i-2]['intrest'] + (float) $recurring_monthly_investment;
                $result[$i-1]['intrest'] = $this->getIntrest($result[$i-1]['col_3'],$interest_rate);

            }
        }
        return $result;
    }

    public function getIntrest($init_inv, $rate)
    {
        $result = $init_inv * ($rate/12);
        $result = $result + $init_inv;
        $result = round($result,2);
        return $result;

    }

    public function getIntrestRates()
    {
        for ($i=1; $i <= 40 ; $i++) {
            $data[$i-1]['percent'] = $i.'%';
            $data[$i-1]['value'] = $i/100;

        }
        return $data;
        # code...
    }
}
