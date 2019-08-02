<?php

namespace App\Http\Controllers;
use App\User;
use App\Country;
use App\City;
use App\State;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function index(){
      $user = User::where('email', session('user_email'))->first();
      $country = Country::all();
      $city = City::all();
      $state = State::all();
      return view('blood.setting', compact('user', 'country', 'city','state'));
    }

//profile update
    public function profileUpdate(Request $request){

      $request->validate([
          'first_name' => 'required',
          'last_name' => 'required',
          'mobile_no' =>  'required',
          'height' => 'required',
          'weight' => 'required',
          'blood_group' => 'required',
          'birthday' => 'required',
          'religion' => 'required',
          'country' => 'required',
          'city' => 'required',
          'area' => 'required',
      ]);
      $duplicate_user = User::where('mobile_no', $request->mobile_no)->first();
      if(isset($duplicate_user) && $duplicate_user->mobile_no != $request->real_mobile){
        session()->flash('error', 'Mobile No Already Exists, Add a Unique Mobile No.');
        return redirect()->route('donor.index');
      }
      $user = User::where('email', session('user_email'))->first();

      $user->first_name = $request->first_name;
      $user->last_name = $request->last_name;
      $user->mobile_no = $request->mobile_no;
      $user->height = $request->height;
      $user->weight = $request->weight;
      $user->blood_group = $request->blood_group;
      $user->date_of_birth = $request->birthday;
      $user->religion = $request->religion;
      $user->country = $request->country;
      $user->city = $request->city;
      $user->area = $request->area;

      if ($request->hasFile('image')) {

          $image = $request->file('image');
          $input['imagename'] = uniqid('photo_', true) . $request->first_name. $request->mobile_no . str_random(10) . '.' . $image->getClientOriginalExtension();
          $destinationPath = 'media/blood/profile-images';
          $img = Image::make($image->getRealPath());
          $img->resize(300, 240, function ($constraint) {
              $constraint->aspectRatio();
          })->save($destinationPath . '/' . $input['imagename']);
          $user->image = $destinationPath . '/' . $input['imagename'];
      }
      session()->flash('success', 'Profile Update Successfully.');
      $user->save();
      return redirect()->route('donor.index');
    }
}
