<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route belongs to BardFrontendController by polo dev
Route::get('/', 'BardFrontendController@index');
Route::get('/trainingss', 'BardFrontendController@trainings');
Route::get('/faculty', 'BardFrontendController@faculty');
Route::get('/about', 'BardFrontendController@about');

//Route belongs to BardNewsletterController by polo dev
Route::get('/clients/create_newsletter', 'BardNewsletterController@create_newsletter');
Route::post('/clients/create_newsletter', 'BardNewsletterController@newsletter_save_and_send');
//Route belongs to BardCourseController by polo dev
Route::get('/clients', 'BardClientsController@index');
Route::get('/clients/create', 'BardClientsController@create');
Route::post('/clients/create', 'BardClientsController@store');
Route::get('/clients/{id}', 'BardClientsController@show');
Route::get('/clients/{id}/edit', 'BardClientsController@edit');
Route::post('/clients/{id}/edit', 'BardClientsController@update');
Route::post('/clients/{id}/delete', 'BardClientsController@destroy');
//UsersController by polo dev
Route::get('/user_registration', 'UsersController@show_user_registration_form');
Route::post('/user_registration', 'UsersController@store_user_and_assign_role_to_them');
Route::get('/create_user_role', 'UsersController@create_user_role');
Route::post('/create_user_role', 'UsersController@store_user_role');
//auth route
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);





//Route belongs to RegistrationController by Hasib
Route::resource('registration','RegistrationController');
Route::resource('calendar','CalenderController');
Route::resource('exam','ExamController');
Route::resource('/marksheet','MarkSheetController');
Route::get('marksheet/{id?}/traineesOfThatExam','MarkSheetController@getTrainee');
Route::get('listOfstudentsAndMarks','MarkSheetController@listOfstudentsAndMarks');


//Route belongs to HealthController by Sajib
Route::get('/create', 'HealthController@create');
Route::post('/create', 'HealthController@store');
Route::get('/healthInfos', 'HealthController@index');
Route::get('/healthInfo/{id?}', 'HealthController@show');
Route::get('/healthInfo/{id?}/edit', 'HealthController@edit');
Route::post('/healthInfo/{id?}/edit', 'HealthController@update');


//route belongs to arif
//for trainings
//route belongs to TrainingsController by arif
Route::get('/training_info', 'TrainingsController@training_info');
Route::post('/training_info', 'TrainingsController@store');
Route::get('/trainings', 'TrainingsController@index');
Route::get('/training/{id?}', 'TrainingsController@show');
Route::get('/training/{id?}/edit','TrainingsController@edit');
Route::post('/training/{id?}/edit','TrainingsController@update');
Route::post('/training/{id?}/delete','TrainingsController@destroy');
//for announcement for AnnouncementController
Route::get('/announcement_create', 'AnnouncementController@announcement');
Route::post('/announcement_create', 'AnnouncementController@store');
Route::get('/announcements', 'AnnouncementController@index');
Route::get('/announcement/{id?}', 'AnnouncementController@show');
Route::get('/announcement/{id?}/edit','AnnouncementController@edit');
Route::post('/announcement/{id?}/edit','AnnouncementController@update');
Route::post('/announcement/{id?}/delete','AnnouncementController@destroy');

//route belongs to Hasan vai
Route::get('/trainee_create', 'InfosController@create');
Route::post('/trainee_create', 'InfosController@store');
Route::get('/trainees', 'InfosController@index');
Route::get('/trainee_show/{slug?}/edit', 'InfosController@show');
Route::get('/trainee_show/{slug?}/edit','InfosController@edit');
Route::post('/trainee_show/{slug?}/edit','InfosController@update');

//route belongs to TrainersController by Hasan vai
Route::get('/trainer_create', 'TrainersController@create');
Route::post('/trainer_create', 'TrainersController@store');
Route::get('/trainers', 'TrainersController@index');
Route::get('/trainer_show/{slug?}', 'TrainersController@show');
Route::get('/trainer_show/{slug?}/edit','TrainersController@edit');
Route::post('/trainer_show/{slug?}/edit','TrainersController@update');




//route belongs to ContactController by shamim
Route::get('/contact', 'ContactController@showForm');
Route::post('/contact', 'ContactController@store');

// routes for feedback
Route::get('/feedbackCreate', 'FeedbacksController@create');   
Route::post('/feedbackCreate', 'FeedbacksController@store');   
Route::get('/feedbackInfos/{id?}', 'FeedbacksController@show');
Route::get('/feedbackIndex', 'FeedbacksController@index');



//route belongs to CourseController by localhost
Route::get('/create_course', 'CourseController@create');
Route::post('/create_course', 'CourseController@store');
Route::get('/courses', 'CourseController@index');
Route::get('/courses/{id?}', 'CourseController@show');
Route::get('/courses/{id?}/edit','CourseController@edit');
Route::post('/courses/{id?}/edit','CourseController@update');
Route::post('/courses/{id?}/delete','CourseController@destroy');


//AdminPanel Demo View With test work(Sajib)
Route::get('master', function () {
    return view('admin.layouts.master');
});

Route::get('/healthCreate', 'AdminController@create');
Route::post('/healthCreate', 'AdminController@store');
Route::get('/adminHealthInfos', 'AdminController@index');
Route::get('/healthInfo/{id?}', 'AdminController@show');
Route::get('/healthInfo/{id?}/edit', 'AdminController@edit');
Route::post('/healthInfo/{id?}/edit', 'AdminController@update');

