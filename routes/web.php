<?php

Route::group(['prefix'=>'relatorio', 'where'=>['id'=>'[0-9]+']], function (){
    Route::get('',              ['as'=>'customer',            'uses'=>'ReportController@index']);
});