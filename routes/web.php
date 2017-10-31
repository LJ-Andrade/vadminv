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

Route::get('maderas', function () {
    return view('web.maderas');
});

Route::get('/home', 'HomeController@index');

// Main Contact Form
Route::post('ajax_mail', 'WebController@mail_sender');
Route::post('ajax_mail_mayorist', 'WebController@mail_sender_mayorist');


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
	'as'   => 'web.blog',
	'uses' => 'WebController@blog',
]);

Route::get('esencia', function () {	
    return view('web.esencia');
});

Route::get('desayunos', function () {	
    return view('web.desayunos');
});

Route::get('accesorios', function () {	
    return view('web.accesorios');
});

Route::get('contacto', function () {
	$url = URL::route('web') . '#contacto';
	return Redirect::to($url);
});

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

// Show Article / Portfolio

Route::get('portfolio', [
	'as'   => 'web.portfolio',
	'uses' => 'WebController@portfolio',
]);

Route::get('port_article/{slug}', [
	'uses' => 'WebController@showPortArticleWithSlug',
	'as'   => 'web.portfolio.article'
])->where('slug', '[\w\d\-\_]+');

Route::get('port_categories/{name}', [
	'uses' => 'WebController@searchPortCategory',
	'as'   => 'web.search.port_category'
]);

// NewSletter
Route::get('addnewsletter', 'WebController@addnewsletter');
Route::get('newsletter', 'VadminController@newsletter');

Route::group(['prefix' => 'vadmin', 'middleware' => ['auth','admin']], function(){

	//////////////////////// BLOG ///////////////////////////////
	// ------ Blog Article ------- //
	Route::resource('blog', 'Blog\ArticlesController');
	Route::post('updateStatus/{id}', 'Blog\ArticlesController@updateStatus');
	Route::post('ajax_delete_article/{id}', 'Blog\ArticlesController@ajax_delete');
	Route::post('ajax_batch_delete_articles/{id}', 'Blog\ArticlesController@ajax_batch_delete');
	Route::post('deleteArticleImg/{id}', 'Blog\ArticlesController@deleteArticleImg');
	
	// ------ Blog Categories ------- //
	Route::resource('categories', 'Blog\CategoriesController');
	Route::post('ajax_delete_category/{id}', 'Blog\CategoriesController@destroy');
	Route::post('ajax_batch_delete_categories/{id}', 'Blog\CategoriesController@ajax_batch_delete');
	Route::post('ajax_update_category/{id}', 'Blog\CategoriesController@update');

	// ------ Blog Tags ------- //
	Route::resource('tags', 'Blog\TagsController');
	Route::post('ajax_delete_tag/{id}', 'Blog\TagsController@destroy');
	Route::post('ajax_batch_delete_tags/{id}', 'Blog\TagsController@ajax_batch_delete');
	Route::post('ajax_update_tag/{id}', 'Blog\TagsController@update');	
	Route::get('ajax_list_tags/{page?}', 'Blog\TagsController@ajax_list');
	Route::get('ajax_list_articles/{page?}', 'Blog\ArticlesController@ajax_list');

	//////////////////////// PORTFOLIO ///////////////////////////////
	
	// ------ Portfolio Article ------- //
	Route::resource('portfolio', 'Portfolio\ArticlesController');
	Route::post('updatePortItemStatus/{id}', 'Portfolio\ArticlesController@updateStatus');
	Route::post('ajax_delete_port_article/{id}', 'Portfolio\ArticlesController@ajax_delete');
	Route::post('ajax_batch_delete_port_articles/{id}', 'Portfolio\ArticlesController@ajax_batch_delete');
	Route::post('deletePortArticleImg/{id}', 'Portfolio\ArticlesController@deleteArticleImg');
	
	// ------ Portfolio Categories ------- //
	Route::resource('port_categories', 'Portfolio\CategoriesController');
	Route::post('ajax_delete_port_category/{id}', 'Portfolio\CategoriesController@destroy');
	Route::post('ajax_batch_delete_port_categories/{id}', 'Portfolio\CategoriesController@ajax_batch_delete');
	Route::post('ajax_update_port_category/{id}', 'Portfolio\CategoriesController@update');

	// ------ Portfolio Tags ------- //
	// Route::resource('port_tags', 'Blog\TagsController');
	// Route::post('ajax_delete_tag/{id}', 'Blog\TagsController@destroy');
	// Route::post('ajax_batch_delete_tags/{id}', 'Blog\TagsController@ajax_batch_delete');
	// Route::post('ajax_update_tag/{id}', 'Blog\TagsController@update');	
	// Route::get('ajax_list_tags/{page?}', 'Blog\TagsController@ajax_list');
	// Route::get('ajax_list_articles/{page?}', 'Blog\ArticlesController@ajax_list');

	// ------ Newsletter ------- //
	Route::get('newsletter', 'VadminController@newsletter');
	// Route::post('delete_suscriptor/{id}', 'VadminController@delete_subscriptor');
	Route::post('delete_suscriptors/{id}', 'VadminController@delete_subscriptors');
	
});

