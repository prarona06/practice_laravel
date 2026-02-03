<?php

use Illuminate\Support\Facades\Route;
Route::get('/admin', function () {
return 'Admin Dashboard';
})
;

Route::get('/view-students/{id}', function ($id) {
    return 'User ID: ' . $id;
});

Route::prefix('learn')->group(function () {

Route::get('/admin/dashboard', function () {
        return 'Admin Dashboard'
        ;})->name('admin.dashboard');
    Route::get('/admin/settings', function () {
        return 'Admin Settings';
    }) ->name('admin.settings');


});
//create,update,delete,show,edit,index
Route::resource('students', App\Http\Controllers\IndexController::class);
