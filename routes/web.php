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
Route::get('/signout', 'FrontendController@signout')->name('signout');
Route::post('/signin/post','FrontendController@signinPost')->name('signin.post');
Route::get('/{$id}/dfd', 'FrontendController@orgDetail')->name('org.detail');
Route::get('profile/{slug}', 'FrontendController@profileDetail')->name('profile.detail');

Route::get('/test/blog/', 'FrontendController@testblog')->name('test.blog');

Route::group(['as' => 'dashboard.' ,'prefix' => 'dashboard', 'middleware' => ['hospital_middleware']], function () {
    //schedules
    Route::get('schedule/', 'HospitalBackendController@doctorschedule')->name('schedule');
    Route::post('schedule/add/post', 'HospitalBackendController@doctorSchedulePost')->name('schedule.post');
    Route::get('schedule/list', 'HospitalBackendController@doctorscheduleList')->name('schedule.list');
   // Route::get('schedule/edit/{id}', 'HospitalBackendController@scheduleEdit')->name('schedule.edit.form');
    Route::get('/schedule/doctor/edit/{id}', 'HospitalBackendController@docScheduleEdit')->name('schedule.edit.form');
    Route::post('schedule/edit/submit', 'HospitalBackendController@doctorScheduleEditSubmit')->name('schedule.edit.submit');
    Route::post('schedule/delete/{id}', 'HospitalBackendController@doctorScheduleDelete')->name('schedule.delete');

    //blog posts
    Route::get('blog/posts/list', 'HospitalBackendController@blogPostList')->name('blogpost.list');
    Route::get('blog/posts/add', 'HospitalBackendController@blogpost')->name('blogpost');
    Route::post('blog/posts/submit', 'HospitalBackendController@blogpostSubmit')->name('blogpost.submit');
    Route::get('blog/posts/edit/{id}', 'HospitalBackendController@blogpostEdit')->name('blogpost.edit');
    Route::post('blog/posts/edit/submit', 'HospitalBackendController@blogpostEditSubmit')->name('blogpost.edit.submit');
    Route::post('blog/posts/delete/{id}', 'HospitalBackendController@blogpostDelete')->name('blogpost.delete');


    //description
    Route::get('description/add', 'HospitalBackendController@description')->name('description');
    Route::post('description/submit', 'HospitalBackendController@descriptionSubmit')->name('description.submit');

    //gallery images
    Route::get('gallery/images', 'HospitalBackendController@galleryimage')->name('gallery');
    Route::get('/gallery/image/list', 'HospitalBackendController@galleryList')->name('gallery.list');
    Route::post('gallery/images/submit', 'HospitalBackendController@galleryimageSubmit')->name('gallery.submit');
    //Route::get('gallery/edit/{id}', 'HospitalBackendController@galleryimageEdit')->name('gallery.edit');
    Route::post('gallery/edit/submit', 'HospitalBackendController@galleryimageEdigSubmit')->name('gallery.edit.submit');
    Route::post('gallery/delete/{id}', 'HospitalBackendController@galleryimageDelete')->name('gallery.delete');


    //patients
    Route::get('patient/comments', 'HospitalBackendController@patientComments')->name('patient.comments');
    Route::get('patient/comments/list', 'HospitalBackendController@patientCommentsList')->name('patient.comments.list');
    Route::post('patient/comment/submit', 'HospitalBackendController@patientCommentsSubmit')->name('patient.comments.submit');
    Route::get('patient/comment/edit/{id}', 'HospitalBackendController@patientCommentsEdit')->name('patient.comments.edit');
    Route::post('patient/comment/edit/submit', 'HospitalBackendController@patientCommentsEditSubmit')->name('patient.comments.edit.submit');
    Route::post('patient/comment/delete/{id}', 'HospitalBackendController@patientCommentsDelete')->name('patient.comments.delete');


    //changing feature
    Route::get('changing-features/add', 'HospitalBackendController@changingFeatures')->name('changing.feature');
    Route::get('changing-feature/list', 'HospitalBackendController@changingFeaturesList')->name('changing.feature.list');
    Route::post('changing-features/submit', 'HospitalBackendController@changingFeaturesSubmit')->name('changing.feature.submit');
    Route::get('changing-features/edit/{id}', 'HospitalBackendController@changingFeaturesEdit')->name('changing.feature.edit');
    Route::post('changing-features/edit/submit', 'HospitalBackendController@changingFeaturesEditSubmit')->name('changing.feature.edit.submit');
    Route::post('changing-features/delete/{id}', 'HospitalBackendController@changingFeaturesDelete')->name('changing.feature.delete');


    //services feature
    Route::get('services/add', 'HospitalBackendController@services')->name('services');
    Route::get('services/list', 'HospitalBackendController@servicesList')->name('services.list');
    Route::post('services/submit', 'HospitalBackendController@servicesSubmit')->name('services.submit');
    Route::get('schedule/edit/{id}', 'HospitalBackendController@servicesEdit')->name('services.edit');
    Route::post('services/edit/submit', 'HospitalBackendController@servicesEditSubmit')->name('services.edit.submit');
    Route::post('services/delete/{id}', 'HospitalBackendController@servicesDelete')->name('services.delete');


    //general information
    Route::get('general-information/add', 'HospitalBackendController@generalInformation')->name('general.info');
    Route::get('general-information/list', 'HospitalBackendController@generalInformationList')->name('generalinfo.list');
    Route::post('general-information/submit', 'HospitalBackendController@generalInfoSubmit')->name('generalinfo.submit');
    Route::get('general-information/edit/{id}', 'HospitalBackendController@generalInformationEdit')->name('generalinfo.edit');
    Route::post('general-information/edit/submit', 'HospitalBackendController@generalInformationEditSubmit')->name('generalinfo.edit.submit');
    Route::post('general-information/delete/{id}', 'HospitalBackendController@generalInformationDelete')->name('generalinfo.delete');


    //nearest hotel
    Route::get('nearest-hotel/add', 'HospitalBackendController@nearestHotel')->name('nearest.hotel');
    Route::get('nearest-hotel/list', 'HospitalBackendController@nearestHotelList')->name('nearest.hotel.list');
    Route::post('nearest-hotel/submit', 'HospitalBackendController@nearestHotelSubmit')->name('nearest.hotel.submit');
    Route::get('nearest-hotel/edit/{id}', 'HospitalBackendController@nearestHotelEdit')->name('nearest.hotel.edit');
    Route::post('nearest-hotel/edit/submit', 'HospitalBackendController@nearestHotelEditSubmit')->name('nearest.hotel.edit.submit');
    Route::post('nearest-hotel/delete/{id}', 'HospitalBackendController@nearestHotelDelete')->name('nearest.hotel.delete');


    //terms and condition
    Route::get('terms-condition/add', 'HospitalBackendController@termsandCondition')->name('terms');
    Route::get('terms-condition/list', 'HospitalBackendController@termsandConditionList')->name('terms.list');
    Route::post('terms-condition/submit', 'HospitalBackendController@termsandConditionSubmit')->name('terms.submit');
    Route::get('terms-condition/edit/{id}', 'HospitalBackendController@termsandConditionEdit')->name('terms.edit');
    Route::post('terms-condition/edit/submit', 'HospitalBackendController@termsandConditionEditSubmit')->name('terms.edit.submit');
    Route::post('terms-condition/delete/{id}', 'HospitalBackendController@termsandConditionDelete')->name('terms.delete');


    //map
    Route::get('map/add', 'HospitalBackendController@map')->name('map');
    Route::post('map/submit', 'HospitalBackendController@mapSubmit')->name('map.submit');
    Route::get('map/edit/{id}', 'HospitalBackendController@mapEdit')->name('map.edit');
    Route::post('map/edit/submit', 'HospitalBackendController@mapEditSubmit')->name('map.edit.submit');
    Route::post('map/delete/{id}', 'HospitalBackendController@mapDelete')->name('map.delete');


    //settings
    Route::get('settings', 'HospitalBackendController@settings')->name('settings');
    Route::post('settings/submit', 'HospitalBackendController@settingsSubmit')->name('settings.submit');
    Route::get('settings/edit/{id}', 'HospitalBackendController@settingsEdit')->name('settings.edit');
    Route::post('settings/edit/submit', 'HospitalBackendController@settingsEditSubmit')->name('settings.edit.submit');
    Route::post('settings/delete/{id}', 'HospitalBackendController@settingsDelete')->name('settings.delete');


    //help
    Route::get('help', 'HospitalBackendController@help')->name('help');
    Route::post('help/submit', 'HospitalBackendController@helpSubmit')->name('help.submit');
    Route::get('help/edit/{id}', 'HospitalBackendController@helpEdit')->name('help.edit');
    Route::post('help/edit/submit', 'HospitalBackendController@helpEditSubmit')->name('help.edit.submit');
    Route::post('help/delete/{id}', 'HospitalBackendController@helpDelete')->name('help.delete');



});



Route::get('donor/profile/{id}', 'FrontendController@donorProfile')->name('donor.profile');
Route::post('/send/message/donor', 'FrontendController@sendMessageToDonor')->name('donor.send.message');

Route::group(['as' => 'donor.' ,'prefix' => 'donor', 'middleware' => ['blooddonor_middleware']], function () {
Route::get('/', 'DonorController@index')->name('index');
Route::post('/profile/update', 'DonorController@profileUpdate')->name('profile.update');
Route::get('/create/message', 'DonorController@createMessage')->name('create.message');
Route::post('/send/blood/request', 'DonorController@postBloodRequest')->name('post.blood.message');
});
