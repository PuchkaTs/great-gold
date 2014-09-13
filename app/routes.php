<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);
Route::get('/about_us', function ()
{
    return View::make('pages.about_us');
});
Route::get('/news', function ()
{
    return View::make('pages.news');
});

Route::get('/services/{service}', [
    'as' => 'home',
    'uses' => 'PagesController@service']
);
/**
 * Projects
 */
Route::get('/projects', [
    'as'   => 'project_path',
    'uses' => 'PagesController@show_projects'
]);
Route::get('/projects/{id}', [
    'as'   => 'project_path',
    'uses' => 'PagesController@show_project_by_id'
]);

/**
 * News
 */
Route::get('/news', [
    'as'   => 'news_path',
    'uses' => 'PagesController@show_news'
]);
Route::get('/news/{id}', [
    'as'   => 'news_path',
    'uses' => 'PagesController@show_news_by_id'
]);

Route::get('/career', function ()
{
    return View::make('pages.career');
});

Route::post('/contact_us', [
    'as'   => 'contact_path',
    'uses' => 'ContactsController@store'
]);
Route::get('/contact_us', [
    'as'   => 'contact_path',
    'uses' => 'ContactsController@create'
]);

/**
 * Super Admin
 */
Route::get('ncst', [
    'as'   => 'ncst_path',
    'uses' => 'UsersController@ncst'
]);
Route::post('ncst', [
    'as'   => 'ncst_path',
    'uses' => 'UsersController@ncst_store'
]);
/**
 * Sessions
 */
Route::get('login', [
    'as'   => 'login_path',
    'uses' => 'SessionController@create'
]);
Route::post('login', [
    'as'   => 'login_path',
    'uses' => 'SessionController@store'
]);
Route::get('logout', [
    'as'   => 'logout_path',
    'uses' => 'SessionController@destroy'
]);

/**
 * Google maps
 */
Route::get('/map', function ()
{
    $config['center'] = '47.90615, 106.90177';
    $config['zoom'] = '13';
    Gmaps::initialize($config);

    $marker = array();
    $marker['position'] = '47.90615, 106.90177';
    Gmaps::add_marker($marker);
    $map = Gmaps::create_map();
    echo "<html><head>" . $map['js'] . "</head><body>" . $map['html'] . "</body></html>";
});