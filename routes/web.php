<?php

Route::get('/', function () {
    return view('index');
});

Route::group(['middleware' => ['web']], function () {
    Route::resource('blog','BlogController');
});


/*Route::get('blog', 'BlogController@index');



Route::get('/blog', function () {
    return view('blog-blog');
}); */

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
