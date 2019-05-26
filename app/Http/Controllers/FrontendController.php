<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\User;
use App\Category;

class FrontendController extends Controller
{
    /*=============================home page=================================*/

    public function index()
    {
        $category = Category::with('sub_categories', 'blog_posts')->get();
        return view('blog.index');
    }

    /*=============================end home function==========================*/


    /*=============================signup page=================================*/

    public function signup()
    {
        return view('log.signup');
    }

    //signup post method
    public function signupPost(Request $request)
    {

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'role' => 'required',
            'email' => 'required|unique:users',
            'mobile_no' => 'required|unique:users',
            'password' => 'required|min:6',
            'password_confirm' => 'required|min:6'
        ]);
        if ($request->password_one != $request->password_two) {
            session()->flash('error_password', 'Password did not matched!');
            return redirect()->route('signup');
        } else {
            if ($request->role == 'Doctor' || $request->role == 'Health Org'){
                $request->role = 'hospitalstuff';
            }
            if ($request->role == 'Blood Donner'){
                $request->role = 'blooddonor';
            }
            $user = new User();
            $user->first_name = trim($request->first_name);
            $user->last_name  = trim($request->last_name);
            $user->role       = $request->role;
            $user->email      = trim($request->email);
            $user->mobile_no  = trim($request->mobile_no);
            $user->password   = trim($request->password);
            $user->save();
        }
        session()->flash('register_success', 'Registration Successfull, Please Login!');
        return redirect()->route('signin');

    }

    /*=============================end signup function==========================*/


    /*=============================signin page=================================*/
    public function signin(){
        return view('log.signin');
    }

    //sign in post
    public function signinPost(Request $request){
        $request->validate([
            'email_mobile' => 'required',
            'password' => 'required',
        ]);

        $user_email = User::where('email', trim($request->email_mobile))->first();
        $user_mobile =  User::where('mobile_no', trim($request->email_mobile))->first();

        if ($user_email) {
            if( $user_email->status != 'Active'){
                session()->flash('login_uerror', 'Account has been deactivated ! contact admin.');
                return redirect()->route('signin');
            }
            if ($user_email->password != trim($request->password)) {
                session()->flash('password_uerror', 'password is incorrect!');
                return redirect()->route('signin');
            } else {
                session(['user_email' => $user_email->email]);
                session(['first_name' => $user_email->first_name]);
                session(['last_name' => $user_email->last_name]);
                session(['role' => $user_email->role]);
                return redirect()->route('dashboard.schedule');
            }
        } elseif ($user_mobile) {
            if( $user_mobile->status != 'Active'){
                session()->flash('login_uerror', 'Account has been deactivated ! contact admin.');
                return redirect()->route('signin');
            }
            if ($user_mobile->password != trim($request->password)) {
                session()->flash('password_uerror', 'password is incorrect!');
                return redirect()->route('signin');
            } else {
                session(['user_email' => $user_mobile->email]);
                session(['first_name' => $user_mobile->first_name]);
                session(['last_name' => $user_mobile->last_name]);
                session(['role' => $user_mobile->role]);
                return redirect()->route('dashboard.schedule');
            }
        } else {
            session()->flash('login_uerror', 'Check your email/mobile or password');
            return redirect()->route('signin');
        }
    }
    /*=============================end signin function==========================*/


    /*=============================schedules page=================================*/
    public function scheduleList(){
        return view('blog.schedule');
    }
    /*=============================end schedules function==========================*/


    /*=============================home page=================================*/
    /*=============================end home function==========================*/


    /*=============================home page=================================*/
    /*=============================end home function==========================*/


    /*=============================home page=================================*/
    /*=============================end home function==========================*/


    /*=============================home page=================================*/
    /*=============================end home function==========================*/


    /*=============================home page=================================*/
    /*=============================end home function==========================*/


    /*=============================home page=================================*/
    /*=============================end home function==========================*/


    /*=============================home page=================================*/
    /*=============================end home function==========================*/


    /*=============================home page=================================*/
    /*=============================end home function==========================*/


    /*=============================home page=================================*/
    /*=============================end home function==========================*/

}
