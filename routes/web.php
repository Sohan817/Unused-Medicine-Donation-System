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
use App\Http\Controllers\UserControllers;
use Illuminate\Support\Facades\Routes;
use App\Http\Controllers\UserController;
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/main','MainController@index');
Route::view('/home1',"home1");
Route::view('/register',"register");
Route::post('/reg',"UserController@reg");
Route::post("/logs","Usercontroller@logs");
Route::get('login',function(){

    if(session()->has('user')){
        return redirect('hom');
    }
    return view('login');
});
Route::get('/logout',function()
{

    if(session()->has('user')){
       session()->pull('user');
    }
    return redirect('hom');
});
Route::view('/request',"request");
Route::post('/req',"UserController@req");
Route::post('/don',"UserController@don");
Route::view('/ngor',"ngor");
Route::post('/ngoreg',"UserController@ngoreg");
Route::view('/ngol',"ngol");
Route::post('/ngolog',"UserController@ngolog");
Route::get('ngol',function(){

    if(session()->has('ngo')){
        return redirect('ngoi');
    }
    return view('ngol');
});
Route::get('/logoutn',function()
{

    if(session()->has('ngo')){
       session()->pull('ngo');
    }
    return redirect('hom');
});
Route::view('/ngoi',"ngoi");
Route::get('/ce',"UserController@even");
Route::view('/vrm',"vrm");
Route::get('vrm','UserController@vrm');
Route::view('/vrn',"vrn");
Route::get('vrn','UserController@vrn');
Route::view('/saregi',"saregi");
Route::view('/alogin',"alogin");
Route::view('/md',"md");
Route::view('/donatem',"donatem");
Route::get('md','UserController@md');
Route::view('/profile',"profile");
Route::get('profile','UserController@profile');
Route::view('/useredit',"useredit");
Route::get('useredit','UserController@useredit');
Route::post('update',"UserController@update");
Route::view('/ngoedit',"ngoedit");
Route::get('ngoedit','UserController@ngoedit');
Route::view('/ngopro',"ngopro");
Route::get('ngopro','UserController@ngopro');
Route::post('ngoupdate',"UserController@ngoupdate");
Route::view('/nd',"nd");
Route::get('nd','UserController@nd');
Route::view('/rm',"rm");
Route::get('rm','UserController@rm');
Route::get('/hom',function()
{
    return view('hom');
})->name('home');
Route::get('/about',function()
{
    return view('about');
});
Route::get('/donate',function()
{
    return view('donate');
});
Route::view('/requp',"requp");
Route::get('/request',function()
{
    return view('request');
});
Route::view('/contact',"contact");
Route::post('/contacta',"UserController@contacta");
Route::view('/cont',"cont");
Route::get('cont','UserController@cont');
Route::get('/admin',function()
{
    return view('admin');
});
Route::view('/salogin',"salogin");
Route::post('/salogs',"UserController@salogs");
Route::view('/sap',"sap");
Route::view('/regadmin',"regadmin");
Route::get('regadmin','UserController@regadmin');
Route::view('/manageadmin',"manageadmin");
Route::get('manageadmin','UserController@manageadmin');
Route::view('/adminsregister',"adminsregister");
Route::post('/adminsreg',"UserController@adminsreg");
Route::post('/adminslog',"UserController@adminslog");
Route::post('/delete',"UserController@delete");
Route::view('/adminspage',"adminspage");
Route::view('/apd',"apd");
Route::get('apd','UserController@apd');
Route::post('/deleted',"UserController@deleted");
Route::view('/apr',"apr");
Route::get('apr','UserController@apr');
Route::post('/deleter',"UserController@deleter");
Route::view('/mu',"mu");
Route::get('mu','UserController@mu');
Route::post('/deleteu',"UserController@deleteu");
Route::view('/mnp',"mnp");
Route::get('mnp','UserController@mnp');
Route::post('/deleten',"UserController@deleten");
Route::post('/addevents',"UserController@estore")->name('addevents');
Route::view('/createevents',"createevents");
Route::get('createevents','UserController@createevents');
Route::view('/feedback',"feedback");
Route::post('/feed',"UserController@feed");
Route::view('/feedb',"feedb");
Route::get('feedb','UserController@feedb');
Route::view('/rating',"rating");
Route::post('/ret',"UserController@rat")->name('starting');
Route::view('buysell',"buysell");
Route::view('sellrequest',"sellrequest");
Route::post('/sell',"UserController@sell");
Route::view('/vsr',"vsr");
Route::get('vsr','UserController@vsr');
Route::view('/buy',"buy");
Route::get('/buy/{id}','UserController@buy')->name('buy');
Route::post('/buym',"UserController@buym");

