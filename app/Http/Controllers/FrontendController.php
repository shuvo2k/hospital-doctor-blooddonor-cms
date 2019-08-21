<?php

namespace App\Http\Controllers;

use App\BlogPost;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\User;
use App\Category;
use App\Detail;
use App\DonorMessage;

class FrontendController extends Controller
{

    /*=============test===========*/
    public function testblog(){
        $blogs = BlogPost::all();
        return view('test', compact('blogs'));
    }

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
            $user = new User();
            if ($request->role == 'Doctor' || $request->role == 'Health Org'){
                $request->role = 'hospitalstuff';

            }
            if ($request->role == 'Blood Donner'){
                $request->role = 'blooddonor';
            }

            $user->first_name = trim($request->first_name);
            $user->last_name  = trim($request->last_name);
            $user->role       = $request->role;
            $user->email      = trim($request->email);
            $user->mobile_no  = trim($request->mobile_no);
            $user->password   = trim($request->password);
            $user->save();

            $detail = new Detail();
            $detail->user_id  = $user->id;
            $detail->save();
        }
        session()->flash('register_success', 'Registration Successfull, Please Login!');
        return redirect()->route('signin');

    }

    /*=============================end signup function==========================*/


    /*=============================signin page=================================*/
    public function signin(){
        if(session('role') == 'hospitalstuff'){
            return redirect()->route('dashboard.schedule');
        }else {
            return view('log.signin');
        }
    }

    //sign in post
    public function signinPost(Request $request){
        $request->validate([
            'email_mobile' => 'required',
            'password' => 'required',
        ]);

        $user_email = User::where('email', trim($request->email_mobile))->first();
        $user_mobile =  User::where('mobile_no', trim($request->email_mobile))->first();

        if ($user_email->role == 'hospitalstuff') {
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
        } elseif (isset($user_mobile->role) && $user_mobile->role == 'hospitalstuff') {
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
        }elseif (isset($user_email->role) && $user_email->role == 'blooddonor') {
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
                  return redirect()->route('donor.index');
              }
          }elseif ($user_mobile->role == 'blooddonor') {
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
                return redirect()->route('donor.index');
            }
        }
         else {
            session()->flash('login_uerror', 'Check your email/mobile or password');
            return redirect()->route('signin');
        }
    }


public function signout(Request $request){
        $request->session()->flush();
       return redirect()->route('signin');
}
    /*=============================end signin function==========================*/


    /*=============================schedules page=================================*/
    public function scheduleList(){
        return view('blog.schedule');
    }

    public function profileDetail($slug){
        return view('blog.org_profile');
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


    /*=============================blood Donor section=================================*/
    public function donorProfile($id){
      $user = User::find($id);
      return view('blood.blood-profile', compact('user'));
    }

    public function sendMessageToDonor(Request $request){
      $request->validate([
          'name' => 'required',
          'email' => 'required',
          'mobile' => 'required',
          'subject' => 'required',
          'message' => 'required',
      ]);

      $message = new DonorMessage();
      $message->user_id = $request->user_id;
      $message->name = $request->name;
      $message->email = $request->email;
      $message->mobile_no = $request->mobile;
      $message->subject = $request->subject;
      $message->message = $request->message;

      $message->save();
      session()->flash('success', 'Message Send Successfull.');
      return redirect()->route('donor.profile', $request->user_id);

    }
    /*=============================end blood donor section==========================*/

}
