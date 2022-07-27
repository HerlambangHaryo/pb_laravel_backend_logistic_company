<?php

use Illuminate\Support\Facades\Route;

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
    
    //-----------------------------------------------------------
        Route::get('/', function () {
            return redirect()->route('Dashboard.index');
        });

        Route::resource('Dashboard', DashboardController::class); 
            Route::get('Orders/{Order}/deletedata', 'OrdersController@deletedata')
                ->name('Orders.deletedata');
            Route::get('Orders/{Order}/approve', 'OrdersController@approve')
                ->name('Orders.approve');
            Route::get('Orders/{Order}/cancel', 'OrdersController@cancel')
                ->name('Orders.cancel');
        Route::resource('Orders', OrdersController::class); 
         
        
Route::group(['middleware' => ['auth']], function() { 
   Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
