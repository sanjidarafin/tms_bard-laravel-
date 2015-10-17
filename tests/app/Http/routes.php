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

//Route belongs to SliderController  by polo dev
Route::get('slider/all', 'SliderController@slider_index');
Route::get('slider/create', 'SliderController@upload_slider_image');
Route::post('slider/create', 'SliderController@slider_image_store');
Route::post('slider/{id}/delete', 'SliderController@destroy');

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
Route::get('admin/clients', 'BardClientsController@admin_clients');
Route::get('/clients/create', 'BardClientsController@create');
Route::post('/clients/create', 'BardClientsController@store');
Route::get('/clients/{id}', 'BardClientsController@show');
Route::get('/clients/{id}/edit', 'BardClientsController@edit');
Route::post('/clients/{id}/edit', 'BardClientsController@update');
Route::post('/clients/{id}/delete', 'BardClientsController@destroy');
//UsersController by polo dev
Route::get('/user/registration', 'UsersController@show_user_registration_form');
Route::post('/user/registration', 'UsersController@store_user_and_assign_role_to_them');
Route::get('/user/create_user_role', 'UsersController@create_user_role');
Route::post('user/create_user_role', 'UsersController@store_user_role');
Route::get('/user/all', 'UsersController@all_user');
Route::get('/user/single/{id}', 'UsersController@single_user');
Route::get('/user/single/{id}/edit', 'UsersController@edit_user');
Route::post('/user/single/{id}/edit', 'UsersController@update_user');
Route::post('/user/single/{id}/delete', 'UsersController@deleteUser');

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
Route::resource('/traineeCourse','traineeCoursesController');
Route::resource('/trainer_course','TrainerCourseController');


//Route belongs to HealthController by Sajib
Route::get('/healthCreate', 'HealthController@create');
Route::post('/healthCreate', 'HealthController@store');
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
Route::get('/training_status/{id?}','TrainingsController@statusUpdate');
//Route::post('/training/{id?}','TrainingsController@active_status_update');
//Route::post('/training/{id?}','TrainingsController@inactive_status_update');
Route::get('/training/{id?}', 'TrainingsController@show');
Route::get('/training/{id?}/edit','TrainingsController@edit');
Route::post('/training/{id?}/edit','TrainingsController@update');
Route::post('/training/{id?}/delete','TrainingsController@destroy');

//for training public pages
Route::get('/public_trainings', 'TrainingsController@publicIndex');
Route::get('/public_training/{id?}', 'TrainingsController@publicShow');


//for announcement for AnnouncementController
Route::get('/announcement_create', 'AnnouncementController@announcement');
Route::post('/announcement_create', 'AnnouncementController@store');
Route::get('/announcements', 'AnnouncementController@index');
Route::get('/announcement/{id?}', 'AnnouncementController@show');
Route::get('/announcement/{id?}/edit','AnnouncementController@edit');
Route::post('/announcement/{id?}/edit','AnnouncementController@update');
Route::post('/announcement/{id?}/delete','AnnouncementController@destroy');
//for public announcement pages
//Route::get('/public_announcements', 'AnnouncementController@publicIndex');
Route::get('/public_announcement/{id?}', 'AnnouncementController@publicShow');
//routes belong to Testimonial
Route::get('/create_testimonial', 'TestimonialController@create');
Route::post('/create_testimonial', 'TestimonialController@store');
Route::get('/testimonials', 'TestimonialController@show');
Route::post('/training/{id?}/delete','TestimonialController@destroy');
//routes belong to FAQs
Route::get('/create_frequently_asked_question', 'FAQsController@create');
Route::post('/create_frequently_asked_question', 'FAQsController@store');
Route::get('/frequently_asked_questions', 'FAQsController@adminList');
Route::get('/frequently_asked_question/{id?}/edit', 'FAQsController@edit');
Route::post('/frequently_asked_question/{id?}/edit', 'FAQsController@update');
Route::post('/frequently_asked_question/{id?}/delete', 'FAQsController@destroy');

//public pages
Route::get('/frequently_asked_question/{id?}', 'FAQsController@show');

//route belongs to Hasan vai
Route::get('/trainee_create', 'InfosController@create');
Route::post('/trainee_create', 'InfosController@store');
Route::get('/trainees', 'InfosController@index');
Route::get('/trainee_show/{slug?}/edit', 'InfosController@show');
Route::get('/trainee_show/{slug?}/edit','InfosController@edit');
Route::post('/trainee_show/{slug?}/edit','InfosController@update');
Route::get('trainee',function(){
    return view(('trainee.trainee'));
});
/*Route::get('trainee',function(){
    $info = Info::whereSlug($slug)->firstOrFail();
    return view('trainee.trainee', compact('info'));
});
*/

Route::get('/trainee_profile/{slug?}/show_profile', 'InfosController@show_profile');
Route::get('/trainee_profile/{slug?}/edit_profile','InfosController@edit_profile');
Route::post('/trainee_profile/{slug?}/edit_profile','InfosController@update_profile');


//route belongs to TrainersController by Hasan vai
Route::get('/trainer_create', 'TrainersController@create');
Route::post('/trainer_create', 'TrainersController@store');
Route::get('/trainers', 'TrainersController@index');
Route::get('/trainer_show/{slug?}', 'TrainersController@show');
Route::get('/trainer_show/{slug?}/edit','TrainersController@edit');
Route::post('/trainer_show/{slug?}/edit','TrainersController@update');

Route::get('trainer',function(){
    return view(('trainer'))->with('trainer', 'active');
});




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
Route::get('master', ['middleware'=>'admin',function () {
    return view('admin.layouts.master');
}]);


Route::get('/healthCreate', 'AdminController@create');
Route::post('/healthCreate', 'AdminController@store');
Route::get('/adminHealthInfos', 'AdminController@index');
Route::get('/healthInfo/{id?}', 'AdminController@show');
Route::get('/healthInfo/{id?}/edit', 'AdminController@edit');
Route::post('/healthInfo/{id?}/edit', 'AdminController@update');

//attendance by 5 apaches

Route::get('/attendance_preform', 'AttendanceController@preform_fill');

Route::post('/attendance_preform', 'AttendanceController@show_attendance_form_function');
Route::post('/attendance_create', 'AttendanceController@store_attendance');
Route::get('/show_attendance', 'AttendanceController@show_attendance');

Route::get('/UserHealthCreate', 'AdminController@create');
Route::post('/UserHealthCreate', 'AdminController@store');
Route::get('/UserHealthInfos', 'AdminController@index');
Route::get('/UserHealthInfo/{id?}', 'AdminController@show');
Route::get('/UserHealthInfo/{id?}/edit', 'AdminController@edit');
Route::post('/UserHealthInfo/{id?}/edit', 'AdminController@update');

//BARD   trainer

Route::get('/bardtrainer_create', 'BardTrainersController@create');
Route::post('/bardtrainer_create', 'BardTrainersController@store');
Route::get('/bardtrainers', 'BardTrainersController@index');
Route::get('/bardtrainer_show/{slug?}', 'BardTrainersController@show');
Route::get('/bardtrainer_show/{slug?}/edit','BardTrainersController@edit');
Route::post('/bardtrainer_show/{slug?}/edit','BardTrainersController@update');
Route::get('bardtrainer',function(){
    return view(('bardtrainer'));
});

//by tahmina for trainer
Route::resource('/exam_create','ExamController@create');

//Route::get('/notallowed/{role?}','');


