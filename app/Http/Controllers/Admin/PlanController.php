<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Plan;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

use Exception;

use Stripe\Plan as StripePlan;

class PlanController extends Controller
{/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Plan::orderBy('id','DESC')->get();
        return view('admin.plan.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.plan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slug = Str::slug($request->name);
        $planExist = Plan::where('slug',$slug)->first();

        if ($planExist) {
            return redirect()->back()
                ->with(['message'=>'Plan Already Exist','type'=>'error']);
        }
        else{

            $cost = number_format((float)$request->cost, 2, '.', '');
            \Stripe\Stripe::setApiKey(config('services.stripe.secret'));
             $amount = ($request->cost * 100);



            $plan = StripePlan::create([
           'amount' => $amount,
           'currency' => 'usd',
           'interval' => $request->billing_period,
           'product' => [
               'name' => $request->name,
               ]
           ]);

           Plan::create([
                 'plan_id' => $plan->id,
                 'name' => $request->name,
                 'slug'=>$slug,
                 'price' => $cost,
                 'billing_method'=>$request->billing_period,
                 'currency' => 'usd',
           ]);
            try {


                return redirect()->route('plan.index')->with(['message'=>'Plan Added Successfully','type'=>'success']);

             } catch (Exception $ex) {
                return redirect()->back()
                ->with(['message'=>'Some Went Wrong ','type'=>'error']);

            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Plan::find($id);
        return view('admin.user.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
          $data = Plan::where('slug',$slug)->first();
         return view('admin.plan.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        // return $request->all();
        $slug_c = Str::slug($request->name);
        $plan = Plan::where('slug',$slug)->first();
        $planExist = Plan::where('slug',$request->name)->first();
        if ($planExist) {
            return redirect()->back()
                ->with(['message'=>'Plan Already Exist','type'=>'error']);
        }
        $plan->name = $request->name;
        $plan->slug = $slug_c;
        $plan->description = $request->description;
         $plan->save();
         return redirect()->route('plan.index')->with(['message'=>'Plan Update Successfully','type'=>'success']);



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        User::find($id)->delete();
        return redirect()->route('users.index')
                        ->with(['message'=>'User delete successfully','type'=>'success']);
    }
     public function change_status(Request $request)
    {
        $statusChange = User::where('id',$request->id)->update(['status'=>$request->status]);
        if($statusChange)
        {
            return array('message'=>'User status  has been changed successfully','type'=>'success');
        }else{
            return array('message'=>'User status has not changed please try again','type'=>'error');
        }

    }
}
