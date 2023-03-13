<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarLoanCalculator extends Controller
{


    public function index(){
        return view('front.calculator.carloan.car-loan-calculator');
    }

    public function calCarLoan(Request $request)
    {
        $data['total_price'] = round($request->total_purchase_price, 2);
        $data['down_payment'] = round($request->down_payment, 2);
        $data['trade_in_value'] = round($request->trade_in_value, 2);
        $data['annual_per_rate_dol'] = round($request->annual_per_rate_dol, 9);
        $data['annual_per_rate_per'] = round($request->annual_per_rate_per, 9);
        $data['length_loan'] = 6;
        $data['financed_amount'] = round($request->financed_amount, 2);
        return $this->calculation($data);
    }

    public function calculation($data){
        $result = [];
        $financed_amount = $data['financed_amount'];
        $monthly_rate = $data['annual_per_rate_dol'];
        for ($i=1; $i <= 14; $i++) {
            $result[$i-1]['Loan Term'] = $data['length_loan'] * $i;
            $result[$i-1]['Financed Amount'] = $data['financed_amount'];
            $result[$i-1]['Monthly Rate'] = $data['annual_per_rate_dol'];
            $result[$i-1]['extra_col_1'] = $this->getExtraCol($financed_amount,$monthly_rate,$result[$i-1]['Loan Term']);
            $result[$i-1]['extra_col_2'] = $this->getExtraCol_1($monthly_rate,$result[$i-1]['Loan Term']);
            $result[$i-1]['Monthly Payment'] = $this->getmonthlyPay($result[$i-1]['extra_col_1'],$result[$i-1]['extra_col_2'],$financed_amount,$result[$i-1]['Loan Term']);
            $result[$i-1]['Total Interest Paid'] = $this->getIntrest($result[$i-1]['Monthly Payment'],$financed_amount,$result[$i-1]['Loan Term']);
        }
        return view('front.calculator.carloan.car_loan_result',compact('result'));
    }



    // Calcula
    function getIntrest($monthly_pay,$amount,$month){
        $result = ($monthly_pay * $month) - $amount;
        $result = round($result,2);
        return $result;

    }

    function getmonthlyPay($colextra,$colextra1,$amount,$months){
        if($colextra == 0){
            $result = $amount/$month;
             $result = round($result,2);
            return $result;

        }else{
            $result = $colextra/$colextra1;
             $result = round($result,2);
            return $result;

        }

    }

    function getExtraCol($amount,$rate,$month){
        $result = pow(1 + $rate,$month);
        $result = $result * $rate;
        $result = $result * $amount;
        $result = round($result,2);
        return $result;


    }
    function getExtraCol_1($rate,$month){
        $result = pow(1 + $rate,$month);
        $result = $result-1;
        $result = round($result,9);
        return $result;


    }
}
