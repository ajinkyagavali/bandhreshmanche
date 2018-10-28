<?php

Route::get('/sidebar_profile', function () {
    return view('layouts.sidebar_profile');
});


// insert controller
Route::post('/insert_personal','insertcontroller@insert_personal');
Route::post('/insert_horoscope','insertcontroller@insert_horoscope');
Route::get('/insert_education','insertcontroller@insert_education');
Route::post('/insert_address','insertcontroller@insert_address'); 
Route::post('/insert_family','insertcontroller@insert_family');
Route::post('/insert_expectation','insertcontroller@insert_expectation');
Route::post('/contactus','insertcontroller@contactus');
Route::get('/insertmatches/{id}','insertcontroller@insert_matches');
Route::get('/update_family','insertcontroller@update_family');
Route::get('/update_horoscope','insertcontroller@update_horoscope');
Route::get('/update_hobbies','insertcontroller@update_hobbies');
//Route::get('/update_profile','insertcontroller@update_profile');
Route::get('insertexpectation','insertcontroller@insertExpectation');
Route::Post('/index_photo_upload','insertcontroller@index_photo_upload');

//display controller
Route::get('/get_personal','displaycontroller@get_personal');
Route::get('/get_horoscope','displaycontroller@get_horoscope');
Route::get('/get_education','displaycontroller@get_education');
Route::get('/get_address','displaycontroller@get_address');
Route::get('/get_family','displaycontroller@get_family');
Route::get('/get_expecation','displaycontroller@get_expecation');

//update controller
Route::get('/education','updateController@create');
Route::Post('/profile_image_upload','updateController@upload');

Route::get('/update_matches/{user_log_id}','updateController@update_matches');
Route::get('/payment/{id}','updateController@acceptPayment');
Route::get('/isaccepted/{id}','updateController@isaccepted');
Route::get('/isdeleted/{id}/{isdeleted}','updateController@isdeleted');

//view controller
Route::get('/','viewController@display');
Route::get('/index','viewController@display');
Route::get('/aboutus','viewController@aboutus');
Route::get('/enroll','viewController@enroll');
Route::get('/profile','viewController@profile');
Route::get('/profile/{id}','viewController@profileid');
Route::get('/education','viewController@education_details');
Route::get('/family','viewController@family_details');
Route::get('/hobbies','viewController@hobbies_details');
Route::get('/contact','viewController@contact_details');
Route::get('/horoscope','viewController@horoscope_details');
Route::get('/expectation','viewController@expectation_details');
Route::get('/matches','viewController@matches');
Route::get('/contactus','viewController@contactus');
Route::get('/help','viewController@help');
Route::get('/offers','viewController@offers');
Route::get('/getrequest','viewController@getrequest');
Route:: get('/getnotificationcount','viewController@getnotificationcount');
//adminmidlware
Route::get('/admin_page', 'viewController@admin_page')->middleware('mainadmin');
Route::get('/customer','viewController@customer')->middleware('mainadmin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/home', 'viewController@display');


