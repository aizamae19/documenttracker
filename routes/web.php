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
            Route::post('/admin/files/store', [App\Http\Controllers\Admin\FileController::class, 'storefile'])->name('storefile');

            #APPLICATION{{$locators->office}} FOR LEAVE
            Route::get('/admin/files/applicationforleave', [App\Http\Controllers\Admin\FileController::class, 'applicationforleave'])->name('applicationforleave');
            Route::post('/admin/files/applicationforleave/store', [App\Http\Controllers\Admin\FileController::class, 'storeapplicationforleave'])->name('applicationforleave.store');

            #TRAVEL ORDER
            Route::get('/admin/files/travelorder', [App\Http\Controllers\Admin\FileController::class, 'travelorder'])->name('travelorder');
            Route::post('/admin/files/travelorder/store', [App\Http\Controllers\Admin\FileController::class, 'storetravelorder'])->name('travelorder.store');

            #CERTIFICATE OF APPEARANCE
            Route::get('/admin/files/certificateofappearance', [App\Http\Controllers\Admin\FileController::class, 'certificateofappearance'])->name('certificateofappearance');
            Route::post('/admin/files/certificateofappearance/store', [App\Http\Controllers\Admin\FileController::class, 'storecertificateofappearance'])->name('certificateofappearance.store');

            #TRIP TICKET
            Route::get('/admin/files/tripticket', [App\Http\Controllers\Admin\FileController::class, 'tripticket'])->name('tripticket');
            Route::post('/admin/files/tripticket/store', [App\Http\Controllers\Admin\FileController::class, 'storetripticket'])->name('tripticket.store');

            #LOCATOR
            Route::get('/admin/files/locator', [App\Http\Controllers\Admin\FileController::class, 'locator'])->name('locator');
            Route::post('/admin/files/locator/store', [App\Http\Controllers\Admin\FileController::class, 'storelocator'])->name('locator.store');

            Route::get('/admin/files/add',  [App\Http\Controllers\Admin\FileController::class, 'dispatchfile'])->name('getDispatch');
            Route::post('/admin/files/save',  [App\Http\Controllers\Admin\FileController::class, 'saveDispatch'])->name('DispatchSave'); 

            #USERS
            Route::get('/admin/users', [App\Http\Controllers\Admin\UsersController::class, 'users'])->name('usersdashboard');

            //Delete
            Route::get('/admin/files/index/delete/{id}', [App\Http\Controllers\Admin\FileController::class, 'deletefile'])->name('file.delete');
            Route::post('/admin/files/index/delete', [App\Http\Controllers\Admin\FileController::class, 'deletefile'])->name('file.delete');

            //View
            Route::get('/admin/files/index/view/{id}', [App\Http\Controllers\Admin\FileController::class, 'viewfile'])->name('file.view');
            Route::post('/admin/files/index/view', [App\Http\Controllers\Admin\FileController::class, 'viewfile'])->name('fileview');


            #ADD USER
            Route::get('/admin/users/add', [CustomAuthController::class, 'register'])->name('register');
            Route::post('admin/users/add', [CustomAuthController::class, 'customRegistration'])->name('register.custom');

            #DOCUMENTTRACKER
            Route::get('/admin/documenttracker', [App\Http\Controllers\Admin\DocumentController::class, 'documenttracker'])->name('documenttrackerdashboard');
        });
});
