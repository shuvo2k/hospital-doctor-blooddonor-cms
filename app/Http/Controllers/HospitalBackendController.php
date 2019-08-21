<?php

namespace App\Http\Controllers;

use App\BlogPost;
use App\Category;
use App\City;
use App\Country;
use App\Feature;
use App\GalleryImage;
use App\GeneralInfo;
use App\NearestHotel;
use App\Review;
use App\Service;
use App\TermConditon;
use App\User;
use App\Detail;
use App\Describe;
use Illuminate\Http\Request;
use App\Schedule;
use Intervention\Image\ImageManagerStatic as Image;
use phpDocumentor\Reflection\DocBlock\Description;
use PHPUnit\Framework\Constraint\Count;

class HospitalBackendController extends Controller
{

    /*=============================schedule page=================================*/
    public function doctorschedule()
    {
        return view('backend.add-doctor-schedule');
    }

    public function doctorSchedulePost(Request $request)
    {

        $request->validate([
            'type' => 'required',
            'doctor_name' => 'required',
            'education_details' => 'required',
            'org_name' => 'required',
            'speciality' => 'required',
            'visiting_place' => 'required',
            'floor_number' => 'required',
            'room_number' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'experience' => 'required',


        ]);

        $schedule = new Schedule();

        $user = User::where('email', session('user_email'))->first();

        $schedule->detail_id = $user->detail->id;
        $schedule->slug = $user->detail->id . '/' . str_slug($request->org_name);
        $schedule->role = $user->role;
        $schedule->type = $request->type;
        $schedule->doctor_name = $request->doctor_name;
        $schedule->education_details = $request->education_details;
        $schedule->org_name = $request->org_name;
        $schedule->speciality = $request->speciality;
        $schedule->visiting_place = $request->visiting_place;
        $schedule->floor_number = $request->floor_number;
        $schedule->room_number = $request->room_number;
        $schedule->start_time = $request->start_time;
        $schedule->end_time = $request->end_time;
        $schedule->days = $request->days;
        $schedule->experience = $request->experience;


        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $input['imagename'] = uniqid('photo_', true) . $request->doctor_name . str_random(10) . '.' . $image->getClientOriginalExtension();
            $destinationPath = 'media/schedule';
            $img = Image::make($image->getRealPath());
            $img->resize(800, 550, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . '/' . $input['imagename']);
            $schedule->image = $destinationPath . '/' . $input['imagename'];
        }

        $schedule->save();
        session()->flash('success', 'Schedule added successfully.');
        return redirect()->route('dashboard.schedule.list');


    }

    public function doctorscheduleList()
    {
        $user = User::where('email', session('user_email'))->first();
        $schedules = Schedule::where('detail_id', $user->detail->id)->get();
        return view('backend.all-doctor-schedule-list', compact('schedules'));
    }

    public function docScheduleEdit($id)
    {
    return view('backend.edit-doctor-schedule');
    }

    public function doctorScheduleEditSubmit(Request $request)
    {
        $request->validate([
        ]);
    }

    public function doctorScheduleDelete(Request $request, $id)
    {

    }
    /*=============================end schedule function==========================*/


    /*=============================blogpost page=================================*/
    public function blogPostList(){
        $user = User::where('email', session('user_email'))->first();

        $blogposts = BlogPost::where('detail_id', $user->detail->id)->get();
        return view('backend.all-blog-post-list', compact('blogposts'));
    }
    public function blogpost()
    {
        $category = Category::all();
        return view('backend.create-blog-post', compact('category'));
    }

    public function blogpostSubmit(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'contents' => 'required',
            'category' => 'required',
            'subcategory' => 'required',
            'image' => 'required',
            'image_caption' => 'required'
        ]);
        $blog = new BlogPost();

        $user = User::where('email', session('user_email'))->first();

        $blog->detail_id = $user->detail->id;
        $blog->title = $request->title;
        $blog->slug = '';
        $blog->description = $request->description;
        $blog->content = $request->contents;
        $blog->category_id = 1;
        $blog->sub_category_id = 2;

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $input['imagename'] = uniqid('photo_', true) . $request->image_caption . str_random(10) . '.' . $image->getClientOriginalExtension();

            $destinationPath = 'media/blog';
            $img = Image::make($image->getRealPath());

            $img->resize(800, 550, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . '/' . $input['imagename']);

            $blog->image = $destinationPath . '/' . $input['imagename'];
        }
        $blog->image_caption = $request->image_caption;

        $blog->save();
        session()->flash('success', 'Schedule added successfully.');
        return redirect()->route('dashboard.schedule.list');
    }



public function blogpostEdit($id){
    return view('backend.edit-blog-post');
    }

    public function blogpostEditSubmit(Request $request){
        $request->validate([
        ]);
    }

    public function blogpostDelete(Request $request, $id){

    }
    /*=============================end blogpost function==========================*/





    /*=============================description page=================================*/
    public function description(){
        $user = User::where('email', session('user_email'))->first();

        $describe = Describe::where('detail_id', $user->detail->id)->first();
     if(isset($describe)){
         return view('backend.add-org-description', compact('describe'));
      }else{
         $describe = null;
         return view('backend.add-org-description', compact('describe'));
     }
    }

    public function descriptionSubmit(Request $request){
        $request->validate([
        'description' => 'required',
        'image' => 'required'
        ]);
        $user = User::where('email', session('user_email'))->first();
        $detail = Describe::where('detail_id', $user->detail->id)->first();

        if(isset($detail)){
        dd('inside if');
        }
        else{
            $description = new Describe();

            $description->detail_id = $user->detail->id;
            $description->description = $request->description;

            if ($request->hasFile('image')) {

                $image = $request->file('image');
                $input['imagename'] = uniqid('photo_', true) . $request->image_title . str_random(10) . '.' . $image->getClientOriginalExtension();

                $destinationPath = 'media/description';
                $img = Image::make($image->getRealPath());

                $img->resize(800, 550, function ($constraint) {
                    $constraint->aspectRatio();
                })->save($destinationPath . '/' . $input['imagename']);

                $description->image = $destinationPath . '/' . $input['imagename'];
            }

            $description->save();
            session()->flash('success', 'Description Updated Successfully');
            return redirect()->route('dashboard.description');

        }

    }


    /*=============================end description function==========================*/





    /*=============================galleryimage page=================================*/
    public function galleryimage(){
        return view('backend.add-gallery-img');
    }

    public function galleryList(){
        $user = User::where('email', session('user_email'))->first();
        $gallery = GalleryImage::where('detail_id', $user->detail->id)->get();

        if(isset($gallery)){
            return view('backend.all-gallery-img-list', compact('gallery'));
        }else{
            $gallery = null;
            return view('backend.all-gallery-img-list', compact('gallery'));
        }

    }

    public function galleryimageSubmit(Request $request){
        $request->validate([
            'image' => 'required',
            'image_title' => 'required',
        ]);

        $gallery = new GalleryImage();

        $user = User::where('email', session('user_email'))->first();
        //dd($user->detail->id);

        $gallery->detail_id = $user->detail->id;
        $gallery->image_title = $request->image_title;

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $input['imagename'] = uniqid('photo_', true) . $request->image_title . str_random(10) . '.' . $image->getClientOriginalExtension();

            $destinationPath = 'media/gallery';
            $img = Image::make($image->getRealPath());

            $img->resize(600, 500, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . '/' . $input['imagename']);

            $gallery->image = $destinationPath . '/' . $input['imagename'];
        }

        $gallery->save();
        session()->flash('success', 'Gallery Image Successfully Added.');
        return redirect()->route('dashboard.gallery.list');

    }


//
//    public function galleryimageEdit($id){
//dd($id);
//    }

    public function galleryimageEdigSubmit(Request $request){
        $request->validate([
        ]);
    }

    public function galleryimageDelete(Request $request, $id){

    }

    /*=============================end galleryimage function==========================*/






    /*=============================patientComments page=================================*/
    public function patientComments(){
        return view('backend.add-patients-comments');
    }

    public function patientCommentsList(){
        $user = User::where('email', session('user_email'))->first();

        $reviews =  Review::where('detail_id', $user->detail->id)->get();


        if(isset($reviews)){
            return view('backend.all-patients-comments-list', compact('reviews'));
        }else{
            $reviews = null;
            return view('backend.all-patients-comments-list', compact('reviews'));
        }
    }

    public function patientCommentsSubmit(Request $request){
        $request->validate([
            'review' => 'required'
        ]);

        $reviews = new Review();

        $user = User::where('email', session('user_email'))->first();
        //dd($user->detail->id);

        $reviews->detail_id = $user->detail->id;
        $reviews->review = $request->review;
        $reviews->save();
        session()->flash('success', 'Patient Comment Added Successfully');
        return redirect()->route('dashboard.patient.comments.list');
    }

    public function patientCommentsEdit($id){
      return view('backend.edit-patients-comments');
    }

    public function patientCommentsEditSubmit(Request $request){
        $request->validate([
        ]);
    }

    public function patientCommentsDelete(Request $request, $id){

    }
    /*=============================end patientComments function==========================*/





    /*=============================changingFeatures page=================================*/
    public function changingFeatures(){
        return view('backend.add-feature');
    }

    public function changingFeaturesList(){
        $user = User::where('email', session('user_email'))->first();

        $features =  Feature::where('detail_id', $user->detail->id)->get();
        if(isset($features)){
            return view('backend.all-feature-list', compact('features'));
        }else{
            $features = null;
            return view('backend.all-feature-list', compact('features'));
        }

    }

    public function changingFeaturesSubmit(Request $request){
        $request->validate([
            'feature' => 'required',
        ]);

        $feature = new Feature();
        $user = User::where('email', session('user_email'))->first();

        $feature->detail_id = $user->detail->id;
        $feature->feature = $request->feature;

        $feature->save();
        session()->flash('success', 'Feature added successfully.');
        return redirect()->route('dashboard.changing.feature.list');
    }

    public function changingFeaturesEdit($id){
      return view('backend.edit-feature');
    }

    public function changingFeaturesEditSubmit(Request $request){
        $request->validate([
        ]);
    }

    public function changingFeaturesDelete(Request $request, $id){

    }
    /*=============================end changingFeatures function==========================*/






    /*=============================services page=================================*/
    public function services(){
        return view('backend.add-service');
    }

    public function servicesList(){
        $user = User::where('email', session('user_email'))->first();

        $services =  Service::where('detail_id', $user->detail->id)->get();
        if(isset($services)){
            return view('backend.all-services-list', compact('services'));
        }else{
            $services = null;
            return view('backend.all-services-list', compact('services'));
        }

    }

    public function servicesSubmit(Request $request){
        $request->validate([
            'service_name' => 'required',
            'contents' => 'required',
        ]);

        $service = new Service();
        $user = User::where('email', session('user_email'))->first();

        $service->detail_id = $user->detail->id;
        $service->service_name = $request->service_name;
        $service->content = $request->contents;

        $service->save();
        session()->flash('success', 'Services added Successfully');
        return redirect()->route('dashboard.services.list');

    }

    public function servicesEdit($id){
      return view('backend.edit-service');
    }

    public function servicesEditSubmit(Request $request){
        $request->validate([
        ]);
    }

    public function servicesDelete(Request $request, $id){

    }
    /*=============================end services function==========================*/





    /*=============================generalInformation page=================================*/
    public function generalInformation(){
        $countries = Country::all();
        $cities = City::with('states')->get();
        return view('backend.add-information', compact('countries', 'cities'));
    }

    public function generalInformationList(){
        $user = User::where('email', session('user_email'))->first();

        $generalinfos = GeneralInfo::where('detail_id', $user->detail->id)->get();
        if(isset($generalinfos)){
            return view('backend.all-information-list', compact('generalinfos'));
        }else{
            $generalinfos = null;
            return view('backend.all-information-list', compact('generalinfos'));
        }

    }


    public function generalInfoSubmit(Request $request){
        $request->validate([
        'company_name' => 'required',
        'facebook_link' => 'required',
        'public_email' => 'required',
        'address' => 'required',
        'country_name' => 'required',
        'city_name' => 'required',
        'telephone_no' => 'required',
        'mobile_no' => 'required',
        ]);

        $general_info = new GeneralInfo();
        $user = User::where('email', session('user_email'))->first();

        $general_info->detail_id = $user->detail->id;
        $general_info->company_name = $request->company_name;
        $general_info->facebook_link = $request->facebook_link;
        $general_info->public_email = $request->public_email;
        $general_info->address = $request->address;
        $general_info->country = $request->country_name;
        $general_info->city = $request->city_name;
        $general_info->state = $request->state_name;
        $general_info->telephone_no = $request->telephone_no;
        $general_info->mobile_no = $request->mobile_no;

        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $input['imagename'] = uniqid('photo_', true) . $request->public_email . str_random(10) . '.' . $image->getClientOriginalExtension();

            $destinationPath = 'media/general_info';
            $img = Image::make($image->getRealPath());

            $img->resize(800, 550, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . '/' . $input['imagename']);

            $general_info->image = $destinationPath . '/' . $input['imagename'];
        }

        $general_info->save();
        session()->flash('success', 'General Information added successfully.');
        return redirect()->route('dashboard.generalinfo.list');

    }

    public function generalInformationEdit($id){
      $countries = Country::all();
      $cities = City::with('states')->get();
      return view('backend.edit-information', compact('countries', 'cities'));
    }

    public function generalInformationEditSubmit(Request $request){
        $request->validate([
        ]);
    }

    public function generalInformationDelete(Request $request, $id){

    }
    /*=============================end generalInformation function==========================*/






    /*=============================nearestHotel page=================================*/
    public function nearestHotel(){
        return view('backend.add-nearest-hotel');
    }

    public function nearestHotelList(){
        $user = User::where('email', session('user_email'))->first();

        $hotels = NearestHotel::where('detail_id', $user->detail->id)->get();

        if(isset($hotels)){
            return view('backend.all-nearest-hotel-list', compact('hotels'));
        }else{
            $hotels = null;
            return view('backend.all-nearest-hotel-list', compact('hotels'));
        }

    }

    public function nearestHotelSubmit(Request $request){
        $request->validate([
            'hotel_name' => 'required',
            'text_content' => 'required',
            'type' => 'required',
            'address' => 'required',
            'image' => 'required'
        ]);

        $hotel = new NearestHotel();
        $user = User::where('email', session('user_email'))->first();

        $hotel->detail_id = $user->detail->id;
        $hotel->hotel_name = $request->hotel_name;
        $hotel->content = $request->text_content;
        $hotel->type = $request->type;
        $hotel->address = $request->address;


        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $input['imagename'] = uniqid('photo_', true) . $request->public_email . str_random(10) . '.' . $image->getClientOriginalExtension();

            $destinationPath = 'media/nearest_hotel';
            $img = Image::make($image->getRealPath());

            $img->resize(800, 550, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPath . '/' . $input['imagename']);

            $hotel->image = $destinationPath . '/' . $input['imagename'];
        }

        $hotel->save();
        session()->flash('success', 'Nearest Hotel Information Added Successfully.');
        return redirect()->route('dashboard.nearest.hotel.list');

    }

    public function nearestHotelEdit($id){
      return view('backend.edit-nearest-hotel');
    }

    public function nearestHotelEditSubmit(Request $request){
        $request->validate([
        ]);
    }

    public function nearestHotelDelete(Request $request, $id){

    }
    /*=============================end nearestHotel function==========================*/






    /*=============================termsandCondition page=================================*/
    public function termsandCondition(){
        return view('backend.add-trams');
    }

    public function termsandConditionList(){
        $user = User::where('email', session('user_email'))->first();

        $terms = TermConditon::where('detail_id', $user->detail->id)->get();
        if(isset($terms)){
            return view('backend.all-terms-condition-list', compact('terms'));
        }else{
            $terms = null;
            return view('backend.all-terms-condition-list', compact('terms'));
        }
    }


    public function termsandConditionSubmit(Request $request){
        $request->validate([
            'terms' => 'required',
        ]);

        $terms = new TermConditon();
        $user = User::where('email', session('user_email'))->first();

        $terms->detail_id = $user->detail->id;
        $terms->terms = $request->terms;

        $terms->save();
        session()->flash('success', 'Terms and Condition Added Successfully.');
        return redirect()->route('dashboard.terms.list');

    }

    public function termsandConditionEdit($id){
      return view('backend.edit-trams');
    }

    public function termsandConditionEditSubmit(Request $request){
        $request->validate([
        ]);
    }

    public function termsandConditionDelete(Request $request, $id){

    }
    /*=============================end termsandCondition function==========================*/






    /*=============================map page=================================*/
    public function map(){
        return view('backend.add-google-map');
    }

    public function mapSubmit(Request $request){
        $request->validate([
        ]);
    }

    public function mapEdit($id){

    }

    public function mapEditSubmit(Request $request){
        $request->validate([
        ]);
    }

    public function mapDelete(Request $request, $id){

    }
    /*=============================end map function==========================*/






    /*=============================settings page=================================*/
    public function settings(){
        $user = User::where('email', session('user_email'))->first();
        return view('backend.password-setting', compact('user'));
    }

    public function settingsSubmit(Request $request){
        $request->validate([
          'first_name' => 'required',
          'last_name' => 'required',
          'email' => 'required|unique:users',
          'mobile_no' => 'required|unique:users',
          'old_password' => 'required',
            'new_password' => 'required'
        ]);

        $user = User::where('email', session('user_email'))->first();

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;

    }

    public function settingsEdit($id){

    }

    public function settingsEditSubmit(Request $request){
        $request->validate([
        ]);
    }

    public function settingsDelete(Request $request, $id){

    }
    /*=============================end settings function==========================*/





    /*=============================help page=================================*/
    public function help(){
        return view('backend.help');
    }


    public function helpSubmit(Request $request){
        $request->validate([
        ]);
    }

    public function helpEdit($id){

    }

    public function helpEditSubmit(Request $request){
        $request->validate([
        ]);
    }

    public function helpDelete(Request $request, $id){

    }
    /*=============================end help function==========================*/






    /*=============================home page=================================*/

    /*=============================end home function==========================*/


}
