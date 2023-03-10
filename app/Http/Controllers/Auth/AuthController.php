<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use DB;
use DataTables;
use Mail;
use Carbon\Carbon;
use Session;

class AuthController extends Controller
{
    public function user_login(Request $request)
    {
        return view('auth.login');

    }
    public function userRegister(Request $request)
    {
        return view('auth.register');
    }

    public function forgotPasswords()
    {
        return view('auth.forgot-password');
    }
    public function resetpassword()
    {

        return view('auth.resetpasswords-password');
    }

    public function loginAdminProcess(Request $request)
    {

        if (Auth::attempt(array('email' => $request->email, 'password' => $request->password, 'status'=> 1)))
        {
           if(auth()->user()->type == 'admin')
            {
                return redirect('admin/dashboard')->with(array('message'=>'Login success','type'=>'success'));
            }else if(auth()->user()->type == 'user')
            {
                return redirect('user/dashboard')->with(array('message'=>'Login success','type'=>'success'));

            }
            else{
                Auth::logout();
                return redirect()->back()->with(array('message'=>'Please wait for admin approval','type'=>'error'));;
            }
        }else{
            return redirect()->back()->with(array('message'=>'Invalid email or Password','type'=>'error'));
        }
    }


    public function RegisterProcess(Request $request)
    {

        $token = Str::random(40);
        $validator = Validator::make($request->all(), [
           'email' => 'required|email|unique:users',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with(array('message'=>'This email is already exists','type'=>'error'));
        }

        $users = $request->except(['password','password_confirmation'],$request->all());
        if($request->hasFile('profile'))
        {
            $img = Str::random(20).$request->file('profile')->getClientOriginalName();
            $users['profile'] = $img;
            $request->profile->move(public_path("documents/profile"), $img);
        }

        $users['password'] = Hash::make($request->password);
        $user = User::create($users);
        if($user)
        {
            return redirect()->route('login')->with(array('message'=>'account created succssfully Please check your email','type'=>'success'));

        }else{
            return redirect()->with(array('message'=>'Somethig wrong please try again','type'=>'error'));
        }


    }

     public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function forgotPassword(Request $request)
    {
        if($request->has("email")){
            $user = User::where('email',$request->email)->get()->first();
            if($user)
            {
                $first_name = $user->first_name??'';
                $last_name = $user->last_name??'';
                $email = $user->email;
                $fourRandomDigit = rand(1000,9999);
                User::where('email',$request->email)->update(['otp'=>$fourRandomDigit]);
                $data = array('otp'=>$fourRandomDigit);
                $send = Mail::send("auth/mails/otp", $data, function($message) use($email,$first_name,$last_name) {
                    $message->to($email, $first_name." ".$last_name)->subject('You have requested to reset your password');
                    $message->from('robertsonalexander40@gmail.com','Test');
                });

                $request->session()->put('email_verify', $email);

                return redirect()->route('verify');
            }else{
                return redirect()->back()->with(['message'=>"Invalid Email",'type'=>'error']);
            }
        }else
        {
            return redirect()->back()->with(['message'=>"Please provide emai",'type'=>'error']);
        }
    }

    public function verify(){
         return view('auth.verifies');
    }

    public function verifyCode(Request $request){
        if($request->has("email")){
            $user = User::where('email',$request->email)->where('otp',$request->otp)->get()->first();
            if($user)
            {
                return redirect()->route('resetpassword');
            }else{
                return redirect()->back()->with(['message'=>"Invalid Code",'type'=>'error']);
            }
            return $user;

        }else
        {
            return redirect()->route('forgot-password')->with(['message'=>"Please provide emai",'type'=>'error']);
        }
    }
    public function updatePassword(Request $request)
    {

        if(Session::has("email_verify"))
        {

            if($request->has("password"))
            {
                $user = User::where('email',Session::get("email_verify"))->get()->first();
                if($user)
                {
                    User::where('email',Session::get("email_verify"))->update(['password'=>Hash::make($request->password)]);
                    return redirect()->route('login')->with(['message'=>"Password reset Successfully",'type'=>'success']);
                }else
                {
                    return redirect()->back()->with(['message'=>"Invalid token please try again",'type'=>'error']);
                }
            }else
            {
                return redirect()->back()->with(['message'=>"Please enter password",'type'=>'error']);
            }
        }else
        {

            return redirect()->route('forgot-password')->with(['message'=>"Please provide emails",'type'=>'error']);
        }
    }
}
