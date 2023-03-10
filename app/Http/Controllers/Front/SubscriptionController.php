<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\User;
Use App\Models\Plan;
use Stripe;
use Session;
use Exception;


class SubscriptionController extends Controller
{
    public function index()
    {
        $plans = Plan::get();

        return view("front.plans", compact("plans"));
    }

    public function show(Plan $plan, Request $request)
    {


         $intent = auth()->user()->createSetupIntent();
        return view("front.subscription", compact("plan", "intent"));
    }


    public function subscription(Request $request) {

        $user = auth()->user();
        $user->createorGetStripeCustomer();
        $paymentMethod = $request->paymentMethod;
        if ($paymentMethod != null) {

            $user->addPaymentMethod($paymentMethod);

        }
        $plan =$request->plan_id;

          $user->newSubscription('default', $plan)
        ->create($paymentMethod != null ? $paymentMethod->id:'');

        // return $plans = Plan::where('plan_id',$request->plan_id)->first();
return redirect()->back()
                ->with(['message'=>'Successfully Subscribe  ','type'=>'success']);
       }
}
