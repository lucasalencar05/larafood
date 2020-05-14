<?php

use Illuminate\Support\Facades\Route;


Route::prefix('admin')->namespace('Admin')->group(function () {
        /*
        | Rotas de detalhes
        */
        Route::get('plans/{url}/details/create', 'DetailPlanController@create')->name('details.plans.create');
        Route::delete('plans/{url}/details/{id}', 'DetailPlanController@destroy')->name('details.plans.destroy');
        Route::get('plans/{url}/details/{id}', 'DetailPlanController@show')->name('details.plans.show');
        Route::put('plans/{url}/details/{id}', 'DetailPlanController@update')->name('details.plans.update');
        Route::get('plans/{url}/details/{id}/edit', 'DetailPlanController@edit')->name('details.plans.edit');
        Route::post('plans/{url}/details', 'DetailPlanController@store')->name('details.plans.store');
        Route::get('plans/{url}/details', 'DetailPlanController@index')->name('details.plans.index');
        /*
        | Rotas de planos
        */

        Route::get('plans/create', 'PlanController@create')->name('plans.create');
        Route::any('plans/search', 'PlanController@search')->name('plans.search');
        Route::delete('plans/{url}', 'PlanController@destroy')->name('plans.destroy');
        Route::get('plans/{url}', 'PlanController@show')->name('plans.show');
        Route::post('plans', 'PlanController@store')->name('plans.store');
        Route::get('plans', 'PlanController@index')->name('plans.index');
        Route::get('plans/{id}/edit', 'PlanController@edit')->name('plans.edit');
        Route::put('plans/{id}', 'PlanController@update')->name('plans.update');

        /*
         *Home Dashboard
         */
        Route::get('/', 'PlanController@index')->name('admin.index');
    });



Route::get('/', function () {
    return view('welcome');
});
