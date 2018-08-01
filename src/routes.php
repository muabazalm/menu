<?php
Route::get('demo', function () {
    return \Muabazalm\Menu\Menu::method1("ua");
});

Route::get('view', function () {
    return view('muabazalm.menu::index');
});
