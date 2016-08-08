<?php

/*
 * dependencia
 */
use App\Sample;
use Illuminate\Http\Request;


/*
 * rota por get
 */
Route::get( '/' , function () {

    return 'Bem vindo ao ged';

});


/*
 * rota por post
 */
Route::post( '/' , function () {

    return 'welcome post method';

});


/*
 * rota por get E post
 */
Route::match([ 'get' , 'post' ] , 'teste' , function () {

    return 'post or get welcome';

});


/*
 * rota por qualquer metodo
 */
Route::any( 'wte' , function () {

    return 'any welcome';

});



/**
 * controllers implicitos (TESTANDO)
 */
//Route::controller('sample', 'SampleController');


/**
 * rest api
 */
Route::group([ 'prefix' => 'api' ], function () {

    Route::get('', function(){
        return 'Welcome to the api';
    });

    /**
     * rota RESTFULL para controller Sample
     *
     * get@index "/"
     *
     * get@create "/create"
     *
     * post@store "/"
     *
     * get@show "/show"
     *
     * get@edit
     *
     * put/patch@update "/{id}"
     *
     * delete@destroy ""
     *
     */
    // Route::get( 'sample' , 'SampleController@index' );
    Route::resource('sample', 'SampleController');

    /**
     * usuarios
     */
    Route::group([ 'prefix' => 'user' ], function () {
        
        Route::get( '' , function(){
            return 'all users';
        });

        Route::get( '{id}' , function($id){
            return 'show user ' . $id;
        });

        Route::post( '/' , function(){
            return 'insert user';
        });

        Route::put( '{id}' , function($id){
            return 'update user by id '.$id;
        });

        Route::delete( '{id}' , function($id){
            return 'delete user by id '.$id;
        });

    });

});


