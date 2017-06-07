<?php

use App\Mail\KryptoniteFound;

Auth::routes();

/////////////////////////////////////////////////
//                   VADMIN                    //
/////////////////////////////////////////////////

// ---------------- Home ---------------------//
Route::get('/vadmin', 'VadminController@index')->middleware('admin');
Route::get('guest', function () {
    return view('vadmin.guest');
});

/////////////////////////////////////////////////
//                   USERS                     //
/////////////////////////////////////////////////

Route::get('profile', 'UsersController@profile');
Route::post('profile', 'UsersController@updateAvatar');	


Route::group(['prefix' => 'vadmin', 'middleware' => ['auth','admin']], function(){

	Route::resource('users', 'UsersController');

	Route::post('ajax_delete_user/{id}', 'UsersController@destroy');
	Route::post('ajax_batch_delete_users/{id}', 'UsersController@ajax_batch_delete');
	Route::post('ajax_update_user/{id}', 'UsersController@update');
	
	Route::get('ajax_list_users/{page?}', 'UsersController@ajax_list');
	// Searcher
	Route::get('ajax_list_search/{search?}', 'UsersController@ajax_list_search');
	Route::get('ajax_list_search/{role?}', 'UsersController@ajax_list_search');

});

// --------------------------------------------//
// --------------------------------------------//

/////////////////////////////////////////////////
//											   //
//              PROJECT ROUTES                 //
//											   //
/////////////////////////////////////////////////

Auth::routes();

/////////////////////////////////////////////////
//                     WEB                     //
/////////////////////////////////////////////////

// ------------------- Home -------------------//
Route::get('/', [
	'as'   => 'web',
	'uses' => 'WebController@home',
]);

Route::get('home', [
	'as'   => 'web',
	'uses' => 'WebController@home',
]);

Route::get('/home', 'HomeController@index');

// Main Contact Form
Route::post('ajax_mail', 'WebController@mail_sender');


/////////////////////////////////////////////////
//               SECTIONS                      //
/////////////////////////////////////////////////


Route::group(['prefix' => 'vadmin', 'middleware' => ['auth','admin']], function(){

	// ------ Clientes ------- //
	Route::resource('clientes', 'ClientesController');
	Route::get('ajax_list_clients/{page?}', 'ClientesController@ajax_list');
	Route::post('ajax_delete_cliente/{id}', 'ClientesController@destroy');
	Route::post('ajax_batch_delete_clientes/{id}', 'ClientesController@ajax_batch_delete');

	Route::get('get_client/{id}', 'ClientesController@get_client');

});






Route::get('blog', [
	'as'   => 'web.catalogo',
	'uses' => 'WebController@catalogo',
]);


// Show Article / Catalogue
Route::get('article/{slug}', [
	'uses' => 'WebController@showWithSlug',
	'as'   => 'web.blog.article'
])->where('slug', '[\w\d\-\_]+');

// Article Searcher
Route::get('categories/{name}', [
	'uses' => 'WebController@searchCategory',
	'as'   => 'web.search.category'
]);

Route::get('tag/{name}', [
	'uses' => 'WebController@searchTag',
	'as'   => 'web.search.tag'
]);

Route::group(['prefix' => 'vadmin', 'middleware' => ['auth','admin']], function(){

	// ------ Article ------- //
	Route::resource('blog', 'Blog\ArticlesController');
	Route::post('updateStatus/{id}', 'Blog\ArticlesController@updateStatus');
	Route::post('ajax_delete_article/{id}', 'Blog\ArticlesController@ajax_delete');
	Route::post('ajax_batch_delete_articles/{id}', 'Blog\ArticlesController@ajax_batch_delete');
	Route::post('deleteArticleImg/{id}', 'Blog\ArticlesController@deleteArticleImg');
	


	// ------ Categories ------- //
	Route::resource('categories', 'Blog\CategoriesController');
	Route::post('ajax_delete_category/{id}', 'Blog\CategoriesController@destroy');
	Route::post('ajax_batch_delete_categories/{id}', 'Blog\CategoriesController@ajax_batch_delete');
	Route::post('ajax_update_category/{id}', 'Blog\CategoriesController@update');


	// ------ Tags / Sizes ------- //
	Route::resource('tags', 'Blog\TagsController');
	Route::post('ajax_delete_tag/{id}', 'Blog\TagsController@destroy');
	Route::post('ajax_batch_delete_tags/{id}', 'Blog\TagsController@ajax_batch_delete');
	Route::post('ajax_update_tag/{id}', 'Blog\TagsController@update');
	
	Route::get('ajax_list_tags/{page?}', 'Blog\TagsController@ajax_list');



	// Route::resource('articles', 'Catalogo\ArticlesController');
	// Route::get('articles/{id}/destroy', [
	// 	'uses' => 'ArticlesController@destroy',
	// 	'as'   => 'articles.destroy'
	// ]);

	// Route::get('images', [
	// 	'uses' => 'ImagesController@index',
	// 	'as'   => 'images.index',
	// ]);

	
	

	Route::get('ajax_list_articles/{page?}', 'Blog\ArticlesController@ajax_list');

	

});

