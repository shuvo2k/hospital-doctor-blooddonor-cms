<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------

*/


Route::get('/', 'FrontendController@index')->name('home');
Route::get('/schedules', 'FrontendController@scheduleList')->name('schedules');
Route::get('/signup', 'FrontendController@signup')->name('signup');
Route::post('/signup/post', 'FrontendController@signupPost')->name('signup.post');
Route::get('/signin', 'FrontendController@signin')->name('signin');
Route::post('/signin/post','FrontendController@signinPost')->name('signin.post');



Route::group(['as' => 'dashboard.' ,'prefix' => 'dashboard', 'middleware' => ['hospital_middleware']], function () {
    //schedules
    Route::get('schedule/add', 'HospitalBackendController@doctorschedule')->name('schedule');

    //blog posts
    Route::get('blog/posts/add', 'HospitalBackendController@blogpost')->name('blogpost');

    //description
    Route::get('description/add', 'HospitalBackendController@description')->name('description');

    //gallery images
    Route::get('gallery/images', 'HospitalBackendController@galleryimage')->name('gallery');

    //patients
    Route::get('patient/comments', 'HospitalBackendController@patientComments')->name('patient.comments');

    //changing feature
    Route::get('changing-features/add', 'HospitalBackendController@changingFeatures')->name('changing.feature');

    //services feature
    Route::get('services/add', 'HospitalBackendController@services')->name('services');

    //general information
    Route::get('general-information/add', 'HospitalBackendController@generalInformation')->name('general.info');

    //nearest hotel
    Route::get('nearest-hotel/add', 'HospitalBackendController@nearestHotel')->name('nearest.hotel');

    //terms and condition
    Route::get('terms-condition/add', 'HospitalBackendController@termsandCondition')->name('terms');

    //map
    Route::get('map/add', 'HospitalBackendController@map')->name('map');

    //settings
    Route::get('settings', 'HospitalBackendController@settings')->name('settings');

    //help
    Route::get('help', 'HospitalBackendController@help')->name('help');


});