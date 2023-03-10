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
        $plan = Plan::find($request->plan);

        return $subscription = $request->user()->newSubscription($request->plan, $plan->stripe_plan)
                        ->create($request->token);

        return view("front.subscribe_suceess");
    }
}
