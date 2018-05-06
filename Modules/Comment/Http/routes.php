<?php

Route::group(['middleware' => 'web', 'prefix' => 'comment', 'namespace' => 'Modules\Comment\Http\Controllers'], function()
{
    Route::get('/', 'CommentController@index');
});
