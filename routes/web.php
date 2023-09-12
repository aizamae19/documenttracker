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


            Route::get('/register', [CustomAuthController::class, 'register'])->name('register');
            Route::post('/register', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 

        });
        Route::group(['middleware' => ['auth']], function() {
            Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
        });

        #ADMIN
        Route::group(['middleware' => ['admin']], function () {
            Route::get('/admin', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admindashboard');
            Route::get('/ams', [App\Http\Controllers\ams\amsController::class, 'index'])->name('ams');
            Route::get('/printdtr', [App\Http\Controllers\ams\PrintDTRController::class, 'index'])->name('printdtr.index');
            Route::get('/printdtr/{id}/{dateFrom}/{dateTo}', [App\Http\Controllers\ams\PrintDTRController::class, 'printdtr'])->name('printdtr');

            
            #ORGANIZATION-DEPARTMENT
            
            Route::get('/organization/department', [App\Http\Controllers\Admin\DepartmentController::class, 'departmentorganization'])->name('organization.department');
            Route::post('/organization/department/store', [App\Http\Controllers\Admin\DepartmentController::class, 'storeorganization'])->name('organization.store');

            //Update
            Route::get('/index/edit/{id}', [App\Http\Controllers\Admin\DepartmentController::class, 'editorganization'])->name('organization.edit');
            Route::post('/index/edit/store', [App\Http\Controllers\Admin\DepartmentController::class, 'updateorganization'])->name('organization.edit.store');

            //Delete
            Route::get('/index/delete/{id}', [App\Http\Controllers\Admin\DepartmentController::class, 'deleteorganization'])->name('organization.delete');
            Route::post('/index/delete', [App\Http\Controllers\Admin\DepartmentController::class, 'deleteorganization'])->name('organization.delete');

            #ORGANIZATION-DESIGNATION
            Route::get('/organization/designation', [App\Http\Controllers\Admin\DesignationController::class, 'designationorganization'])->name('organization.designation');
            Route::post('/organization/designation/store', [App\Http\Controllers\Admin\DesignationController::class, 'storedesignation'])->name('designation.store');

            //Update
            Route::get('/designation/index/edit/{id}', [App\Http\Controllers\Admin\DesignationController::class, 'editdesignation'])->name('designation.edit');
            Route::post('/designation/index/edit/store', [App\Http\Controllers\Admin\DesignationController::class, 'updatedesignation'])->name('designation.edit.store');

            //Delete
            Route::get('/designation/index/delete/{id}', [App\Http\Controllers\Admin\DesignationController::class, 'deletedesignation'])->name('designation.delete');
            Route::post('/designation/index/delete', [App\Http\Controllers\Admin\DesignationController::class, 'deletedesignation'])->name('organization.delete');

            #EMPLOYEES-EMPLOYEE
            Route::get('/employees/employee', [App\Http\Controllers\Admin\EmployeeController::class, 'employeeemployees'])->name('employee.employees');

            //add
            Route::get('/employees/employee/add', [App\Http\Controllers\Admin\EmployeeController::class, 'addemployee'])->name('employee.add');
            Route::post('/employees/employee/store', [App\Http\Controllers\Admin\EmployeeController::class, 'storeemployee'])->name('employee.store');

            //Update
            Route::get('/employee/index/edit/{id}', [App\Http\Controllers\Admin\EmployeeController::class, 'editemployee'])->name('employee.edit');
            Route::post('/employee/index/edit/store', [App\Http\Controllers\Admin\EmployeeController::class, 'updateemployee'])->name('employee.edit.store');

            
            #EMPLOYEES-INACTIVE USER
            Route::get('/inactiveuser', [App\Http\Controllers\Admin\InactiveUserController::class, 'index'])->name('inactiveuser');

            #LEAVE-HOLIDAY
           Route::get('/leave/holiday', [App\Http\Controllers\Admin\HolidayController::class, 'holidayleave'])->name('leave.holiday');
            Route::post('/leave/holiday/store', [App\Http\Controllers\Admin\HolidayController::class, 'storeholiday'])->name('holiday.store');

            #LEAVE-LEAVE TYPE
            Route::get('/leave/leavetype', [App\Http\Controllers\Admin\LeaveTypeController::class, 'leavetypeleave'])->name('leave.leavetype');
            Route::post('/leave/leavetype/store', [App\Http\Controllers\Admin\LeaveTypeController::class, 'storeleavetype'])->name('leavetype.store');

             //Update
            Route::get('/leavetype/index/edit/{id}', [App\Http\Controllers\Admin\LeaveTypeController::class, 'editleavetype'])->name('leavetype.edit');
            Route::post('/leavetype/index/edit/store', [App\Http\Controllers\Admin\LeaveTypeController::class, 'updateleavetype'])->name('leavetype.edit.store');

             //Delete
            Route::get('/leavetype/index/delete/{id}', [App\Http\Controllers\Admin\LeaveTypeController::class, 'deleteleavetype'])->name('leavetype.delete');
            Route::post('/leavetype/index/delete', [App\Http\Controllers\Admin\LeaveTypeController::class, 'deleteleavetype'])->name('leavetype.delete');


            #LEAVE-LEAVE APPLICATION
            Route::get('/leaveapplication', [App\Http\Controllers\Admin\LeaveApplicationController::class, 'index'])->name('leaveapplication');

            #LEAVE-EARNED LEAVE
             Route::get('/leave/earnedleave', [App\Http\Controllers\Admin\EarnedLeaveController::class, 'earnedleaveleave'])->name('leave.earnedleave');
            Route::post('/leave/earnedleave/store', [App\Http\Controllers\Admin\EarnedLeaveController::class, 'storeearnedleave'])->name('earnedleave.store');

            #LEAVE-REPORT
            Route::get('/report', [App\Http\Controllers\Admin\ReportController::class, 'index'])->name('report');

            #NOTICE
            Route::get('/notice', [App\Http\Controllers\Admin\NoticeController::class, 'index'])->name('notice');
            Route::post('/notice', [App\Http\Controllers\Admin\NoticeController::class, 'storenotice'])->name('notice.store');

            #SETTINGS
            Route::get('/accountsettings', [App\Http\Controllers\Admin\AccountSettingController::class, 'index'])->name('accountsettings');


        });

       
        #USER
        Route::group(['middleware' => ['user']], function () {
            Route::get('/user', [App\Http\Controllers\Cashier\UserController::class, 'index'])->name('userdashboard');
        });


});
