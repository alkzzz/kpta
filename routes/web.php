<?php

// FrontEnd
// Route::group(['middleware' => 'menu'], function () {
//       Route::get('/', 'HomeController@index');
// });



// BackEnd
Route::group(['middleware' => 'auth'], function () {
      Route::get('/', 'DashboardController@index');
});
