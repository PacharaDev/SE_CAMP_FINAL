<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\MyController;
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

Route::get('/my-controller', [MyController::class, 'index']);
Route::resource('/my-controller4',MyController::class);
Route::get('/', function () {
    return view('welcome'); //welcome.blade.php
});

Route::get('new-route',function(){
    //return view('newroute');
    //         key => Value
    $data=['val_a' => 'Hello world!'];
    $data['val_b'] = "Laravel";
    return view('myfolder.newpage',$data);

});
Route::post('new-route', function(Request $req){
    $data['myinput'] = $req->input('myinput');
    return view ('newroute',$data);
});



Route::get('/my-route', function() {
    return view('newfolder.mypage');
});

Route::post('/my-route', function(Request $req) {
    $data['myinput'] = $req ->input('myinput');
    return view('myroute',$data);
});



