<?php

Route::group(['middleware' => 'web', 'prefix' => 'rekap', 'namespace' => 'Modules\Rekap\Http\Controllers'], function()
{
    Route::get('/', 'RekapController@index');
});

// Seminar Proposal TA
Route::group(['middleware' => 'web', 'prefix' => 'seminar/{bulan}/{tahun}', 'namespace' => 'Modules\Rekap\Http\Controllers'], function()
{
    Route::get('/', 'SeminarTugasAkhirController@index');
});
