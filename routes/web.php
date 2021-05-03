<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatisticController;

Route::get('/', function () {
    return view('/auth/login');
});

Auth::routes();

view()->composer('auth.register', function ($view) {
    $view->with('ward',\App\Ward::where('rec_status','1')->get());
});

view()->composer('auth.register', function ($view) {
    $view->with('prefix',\App\Prefix::all());
});

view()->composer('auth.register', function ($view) {
    $view->with('role', \App\Role::where('role', '!=', 'พยาบาลหัวหน้าเวร')
        ->where('role', '!=', 'SuperAdmin')
        ->where('role', '!=', 'AdminWard')->get());
});



// Route::group(['prefix' => 'v1'], function () {
//     Route::get('sendmail', 'MailController@sendEmail');
// });

Route::get('/home', 'HomeController@index')->name('home');

// error
Route::get('/error500', function () {
    return view('/pageError/error500');
});


Route::group(['middleware' => ['auth']], function () {


    Route::group(['middleware' => ['superadmin']], function () {

        Route::resource('superadmin', 'SuperAdminController');
        Route::get('superadmin', 'SuperAdminController@index')->name('superadmin');
        Route::get('manageuser', 'SuperAdminController@manageuser')->name('manageuser');

        Route::get('index-superadmin', 'SuperAdminController@index')->name('index-superadmin');
        Route::get('manageward', 'SuperAdminController@manageward')->name('manageward');
        Route::get('manageadmin', 'SuperAdminController@manageadmin')->name('manageadmin');

        //- manage profile -
        Route::get('manageprofile-superadmin', 'SuperAdminController@manageprofile')->name('manageprofile-superadmin');


        view()->composer('superadmin.layouts.app-admin', function ($view) {
            $view->with('lward', \App\Ward::all());
        });
    });

    Route::group(['middleware' => ['adminward']], function () {

        Route::resource('adminward', 'AdminWardController');
        Route::resource('schedule', 'ChiefnurseScheduleController');
        Route::get('adminward', 'AdminWardController@index')->name('adminward');
        Route::get('reserveadminward', 'AdminWardController@reserveadminward')->name('reserveadminward');
        Route::get('wardadmin', 'AdminWardController@ward')->name('wardadmin');
        Route::get('statistic', 'AdminWardController@statistic')->name('statistic');

        Route::get('index-admin', 'AdminWardController@index')->name('index-admin');
        Route::get('managebed', 'AdminWardController@managebed')->name('managebed');
        Route::get('healline', 'AdminWardController@healline')->name('healline');
        Route::get('managedoctor', 'AdminWardController@doctor')->name('managedoctor');
        Route::get('manageoperative', 'AdminWardController@operative')->name('manageoperative');
        Route::get('healrole', 'AdminWardController@healrole')->name('healrole');
        Route::get('userwards', 'AdminWardController@userwards')->name('userwards');
        Route::get('manageuserwards', 'AdminWardController@manageuserwards')->name('manageuserwards');
        //- manage profile -
        Route::get('manageprofile-admin', 'AdminWardController@manageprofile')->name('manageprofile-admin');
    });

    Route::group(['middleware' => ['chiefnurse']], function () {

        Route::resource('chiefnurse', 'ChiefNurseController');
        Route::get('chiefnurse', 'ChiefNurseController@index')->name('chiefnurse');
        Route::get('chief-statistic', 'ChiefNurseController@statistic')->name('chief-statistic');
        Route::get('cancelreserv', 'ChiefNurseController@cancelreserv')->name('cancelreserv');

        Route::get('index-chief', 'ChiefNurseController@index')->name('index-chief');
        Route::get('bedstatus', 'ChiefNurseController@bedstatus')->name('bedstatus');
        Route::get('quotareserv', 'ChiefNurseController@quotareserv')->name('quotareserv');
        Route::get('normalreserv', 'ChiefNurseController@normalreserv')->name('normalreserv');
        Route::get('approvedreserv', 'ChiefNurseController@approvedreserv')->name('approvedreserv');
        Route::get('operativechief', 'ChiefNurseController@operative')->name('operativechief');
        Route::get('formreserv', 'ChiefNurseController@formreserv')->name('formreserv');

        Route::get('formreserv1', 'ChiefNurseController@formreserv1')->name('formreserv1');
        Route::get('managepatient', 'ChiefNurseController@patient')->name('managepatient');

        Route::get('/ward-statistic', 'StatisticController@index');
        Route::get('/ward-statistic/getEvent', 'StatisticController@getEvent');
        Route::post('/ward-statistic/getEventbyDate','StatisticController@getEventbyDate');
        
        
        //- manage profile -
        Route::get('manageprofile-chief', 'ChiefNurseController@manageprofile')->name('manageprofile-chief');
    });

    Route::group(['middleware' => ['nurse']], function () {

        Route::resource('nurse', 'NurseController');
        Route::get('nurse', 'NurseController@index')->name('nurse');
        Route::get('reservenurse/{id}', 'NurseController@reservenurse')->name('reservenurse');
        Route::get('operativenurse', 'NurseController@operativenurse')->name('operativenurse');

        Route::get('index-nurse', 'NurseController@index')->name('index-nurse');
        Route::get('bedstatus-nurse', 'NurseController@bedstatus')->name('bedstatus-nurse');
        Route::get('quotareserv-nurse', 'NurseController@quotareserv')->name('quotareserv-nurse');
        Route::get('normalreserv-nurse', 'NurseController@normalreserv')->name('normalreserv-nurse');
        Route::get('approvedreserv-nurse', 'NurseController@approvedreserv')->name('approvedreserv-nurse');
        Route::get('operativenurse', 'NurseController@operative')->name('operativenurse');
        // Route::get('formreserv-nurse/{id}', 'NurseController@formreserv')->name('formreserv-nurse');
        Route::get('ward-statistic-nurse', 'NurseController@wardstatistic')->name('ward-statistic-nurse');
        Route::get('formreserv-nurse', 'NurseController@formreserv')->name('formreserv-nurse');
        //- manage profile -
        Route::get('manageprofile-nurse', 'NurseController@manageprofile')->name('manageprofile-nurse');

        Route::get('managepatient-nurse', 'NurseController@patient')->name('managepatient-nurse');

    });

    Route::group(['middleware' => ['user']], function () {

        Route::resource('user', 'UserController');
        Route::get('user', 'UserController@index')->name('user');
        Route::get('reserveuser/{id}', 'UserController@reserveuser')->name('reserveuser');
        // Route::get('operativeuser', 'UserController@operativeuser')->name('operativeuser');

        Route::get('index-user', 'UserController@index')->name('index-user');
        Route::get('reserve-user', 'UserController@reserve')->name('reserve-user');
        Route::get('approvedreserv-user', 'UserController@approvedreserv')->name('approvedreserv-user');
        Route::get('operativeuser', 'UserController@operative')->name('operativeuser');
        // Route::get('formreserv-user/{id}', 'UserController@formreserv')->name('formreserv-user');
        Route::get('formreserv-user', 'UserController@formreserv')->name('formreserv-user');
        //- manage profile -
        Route::get('manageprofile-user', 'UserController@manageprofile')->name('manageprofile-user');
    });

    Route::get('search', 'ReservationController@index');
    Route::get('/autocomplete', 'ReservationController@search')->name('autocomplete');
    Route::post('/movebed', 'ReservationController@movebed')->name('movebed');
    Route::post('/cancelreserve', 'ReservationController@cancelreserve')->name('cancelreserve');
    Route::post('reservuser', 'ReservationController@reservuser')->name('reservuser');
    Route::get('GetOpt/{id}', 'ReservationController@getopt')->name('getopt');
    Route::get('getValueOpt/{id}', 'ReservationController@getvalueopt')->name('getvalueopt');

    Route::post('/savepre', 'PreoperativeController@store')->name('savepre');


    Route::post('/manageprofile', 'ManageUserController@manageprofile')->name('manageprofile');
    Route::post('/disableadmin', 'ManageUserController@disableadmin')->name('disableadmin');
    Route::post('/enableadmin', 'ManageUserController@enableadmin')->name('enableadmin');

    Route::post('/enterbed', 'EventController@enterbed')->name('enterbed');
    Route::post('/stay', 'EventController@stay')->name('stay');
    

    Route::post('/editbed', 'BedController@editbed')->name('editbed');

    Route::post('editphone', 'WardController@update')->name('editphone');

    Route::get('/findPatient', 'PatientController@getPatient')->name('getPatient');

    Route::resource('bed', 'BedController');
    Route::resource('doctor', 'DoctorController');
    Route::resource('operative', 'OperativeController');
    Route::resource('ward', 'WardController');
    Route::resource('department', 'DepartmentController');
    Route::resource('reserve', 'ReservationController');
    Route::resource('event', 'EventController');
    Route::resource('payment', 'PaymentController');
    Route::resource('manage-user', 'ManageUserController');
    Route::resource('preopt', 'PreoperativeController');
    Route::resource('patient', 'PatientController');
    Route::resource('expenses', 'ExpensesController');




       



});