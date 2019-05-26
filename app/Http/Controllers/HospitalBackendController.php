<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HospitalBackendController extends Controller
{

    /*=============================schedule page=================================*/
    public function doctorschedule(){
        return view('backend.add-doctor-schedule');
    }
    /*=============================end schedule function==========================*/



    /*=============================blogpost page=================================*/
    public function blogpost(){
        return view('backend.create-blog-post');
    }
    /*=============================end blogpost function==========================*/





    /*=============================description page=================================*/
    public function description(){
        return view('backend.add-org-description');
    }
    /*=============================end description function==========================*/





    /*=============================galleryimage page=================================*/
    public function galleryimage(){
        return view('backend.add-gallery-img');
    }
    /*=============================end galleryimage function==========================*/






    /*=============================patientComments page=================================*/
    public function patientComments(){
        return view('backend.add-patients-comments');
    }
    /*=============================end patientComments function==========================*/





    /*=============================changingFeatures page=================================*/
    public function changingFeatures(){
        return view('backend.add-feature');
    }
    /*=============================end changingFeatures function==========================*/






    /*=============================services page=================================*/
    public function services(){
        return view('backend.add-service');
    }
    /*=============================end services function==========================*/





    /*=============================generalInformation page=================================*/
    public function generalInformation(){
        return view('backend.add-gallery-img');
    }
    /*=============================end generalInformation function==========================*/






    /*=============================nearestHotel page=================================*/
    public function nearestHotel(){
        return view('backend.add-nearest-hotel');
    }
    /*=============================end nearestHotel function==========================*/






    /*=============================termsandCondition page=================================*/
    public function termsandCondition(){
        return view('backend.add-trams');
    }
    /*=============================end termsandCondition function==========================*/






    /*=============================map page=================================*/
    public function map(){
        return view('backend.add-google-map');
    }
    /*=============================end map function==========================*/






    /*=============================settings page=================================*/
    public function settings(){
        return view('backend.password-setting');
    }
    /*=============================end settings function==========================*/





    /*=============================help page=================================*/
    public function help(){
        return view('backend.help');
    }
    /*=============================end help function==========================*/






    /*=============================home page=================================*/

    /*=============================end home function==========================*/


}
