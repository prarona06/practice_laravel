<?php

use Illuminate\Support\Facades\Route;
Route::get('/admin', function () {
return 'Admin Dashboard';
})
;

Route::get('/view-students/{id}', function ($id) {
    return 'User ID: ' . $id;
});
