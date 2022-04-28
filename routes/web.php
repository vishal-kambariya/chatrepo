<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Events\BrodcastingMessageToUser;
use App\Http\Controllers\ChatsController;
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

Route::get('/', function () {
    return view("welcome");
});
Route::get('notification-sender',function(Request $request){
    $message=request('message');
    event(new BrodcastingMessageToUser($message));

});
Route::get("notification",function(){
    return view("notification");
});
// Route::group(['middleware'=>'auth:sanctum'],function(){
//     Route::get('/chat',[ChatsController::class,'index'])->name('chat.user');
// });


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/chat',[ChatsController::class,'index']);

});
// Route::group(['middleware'=>'auth:sanctum'],function(){

// });
