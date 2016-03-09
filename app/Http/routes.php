<?php






/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //     
	Route::get('/', function () {
	  //    return view('welcome');
  	 return 'Hello There - this is Laravel';
	});

	Route::get('/books', 'BookController@getIndex');	
  	Route::get('/book/create', 'BookController@getCreate');		
	Route::post('/book/create', 'BookController@postCreate');	
   Route::get('/book/{id}', 'BookController@getShow');
   
     Route::get('/practice', function() {
     	echo "app.env: ".config('app.env');
     	echo "<br>";
     	echo "app.url: ".config('app.url');

     	return "";
     });
	
});
