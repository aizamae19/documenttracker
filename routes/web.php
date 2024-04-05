<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
        Route::get('/', function () {
            return redirect('/login');
        });
        Route::group(['middleware' => ['guest']], function() {
            Route::get('/login', [CustomAuthController::class, 'index'])->name('login');
            Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');  

        });
        Route::group(['middleware' => ['auth']], function() {
            Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
        });

        #ADMIN
        Route::group(['middleware' => ['admin']], function () {
            Route::get('/admin', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admindashboard');

            #CATEGORY
            Route::get('/admin/category', [App\Http\Controllers\Admin\CategoryController::class, 'category'])->name('categorydashboard');

            #FILES
            Route::get('/admin/files', [App\Http\Controllers\Admin\FileController::class, 'file'])->name('filedashboard');

            #LEAVEAPPLICATION
            Route::get('/admin/files/leaveform', [App\Http\Controllers\Admin\FileController::class, 'leaveform'])->name('leaveform');
            Route::post('/admin/files/leaveform/store', [App\Http\Controllers\Admin\FileController::class, 'storeleaveform'])->name('leaveform.store');

            #LEAVEAPPLICATION
            Route::get('/admin/files/travelorder', [App\Http\Controllers\Admin\FileController::class, 'travelorder'])->name('travelorder');
            Route::post('/admin/files/travelorder/store', [App\Http\Controllers\Admin\FileController::class, 'storetravelorder'])->name('travelorder.store');

            #USERS
            Route::get('/admin/users', [App\Http\Controllers\Admin\UsersController::class, 'users'])->name('usersdashboard');

            // //Delete
            // Route::get('/admin/users/delete/{id}', [App\Http\Controllers\Admin\UsersController::class, 'deleteusers'])->name('users.delete');
            // Route::post('/admin/users/delete', [App\Http\Controllers\Admin\UsersController::class, 'deleteusers'])->name('users.delete');

            #ADD USER
            Route::get('/admin/users/add', [CustomAuthController::class, 'register'])->name('register');
            Route::post('admin/users/add', [CustomAuthController::class, 'customRegistration'])->name('register.custom');

            #DOCUMENTTRACKER
            Route::get('/admin/documenttracker', [App\Http\Controllers\Admin\DocumentController::class, 'documenttracker'])->name('documenttrackerdashboard');
        });
});
