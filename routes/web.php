<?php

// FrontEnd
// Route::group(['middleware' => 'menu'], function () {
//       Route::get('/', 'HomeController@index');
// });

Route::group(['prefix' => 'seminar/{bulan}/{tahun}'], function () {
      Route::get('/', 'SeminarTugasAkhirController@index');
});

// BackEnd
Route::group(['middleware' => 'auth'], function () {
      Route::get('/', 'DashboardController@index');
});
