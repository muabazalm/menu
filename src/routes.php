<?php
Route::get('demo', function () {
    return "DEMO TEST";
});

Route::get('view', function () {
    return view('muabazalm.admin::index');
});
