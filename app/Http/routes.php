<?php
//Route::get('insert','HelloController@insertform');
Route::get('form','HelloController@form_function');

//Route::get('sayhello', function () {
 // return view('hello');
//});
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('cric_index','HelloController@cric_form');
Route::post('cric_index','HelloController@cric_fun')->name('cric_get_value');
Route::get('display_index','HelloController@display_cric');
Route::get('edit_cric_form/{id}','HelloController@edit_cric_function')->name('edit_cric_form');




















Route::get('/', function () {
    return view('welcome');
});

Route::get('reset_link','HelloController@reset')->name('reset_link');
Route::post('credential_details','HelloController@credential')->name('credential_details');

//Auth::routes();


Route::post('create','HelloController@insert')->name('stu_details');
Route::post('create1','HelloController@insert1')->name('emp_details');

Route::get('employee','HelloController@view');

Route::get('display_form','HelloController@display_form_function');

Route::get('edit-form/{id}','HelloController@edit_form_function')->name('edit-form');
Route::post('emp/{id}','HelloController@update_form_function')->name('emp_update_details');

Route::get('display_form/{id}','HelloController@delete_form_function')->name('delete-form');