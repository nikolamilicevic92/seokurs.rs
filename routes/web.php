<?php


Route::map([
  '/', '/konsultacije', '/o-nama', '/kontakt', '/pravila-koriscenja', '/politika-privatnosti'
], 'PagesController');


//Controller will determine whether preview or full course page is rendered based on user status
Route::get('/seo-kurs', 'SeoKursController@index');
//This route is for updating the blog at the bottom of the page
Route::put('/seo-kurs', 'SeoKursController@update')->admin();

//Section routes are only for admin
Route::resource('section', 'SectionController')->admin();


Route::resource('video', 'VideoController')
  //Preventing guest user and registered user from accessing video via url
  ->denyTo('guest', 'user')
  //If not admin, user will only have access to show method so that video can be loaded
  ->when('purchased')->allow('show');;


Route::resource('test', 'TestsController')
  //Guest user and registered user will have no access to any test routes
  ->denyTo('guest', 'user')
  //Only user with purchased status can access a route for doing the test
  ->when('purchased')->allow('show');


Route::resource('video-user', 'VideoUserController')
  ->allowTo('purchased');

Route::resource('test-user', 'TestUserController')
  ->allowTo('purchased');


Route::resource('question', 'QuestionsController')->admin();


Route::resource('answer', 'AnswersController')->admin();


Route::resource('blog', 'BlogController')
  ->when('guest', 'user', 'purchased')->allow('index', 'show');;


Route::resource('portfolio', 'PortfolioController')
  ->when('guest', 'user', 'purchased')->allow('index', 'show');;


Route::resource('nasi-partneri', 'PartnersController')
  ->when('guest', 'user', 'purchased')->allow('index', 'show');


Route::post('/kontakt', 'ContactController@index');


Route::post('/custom-field', 'CustomFieldsController@store')->admin();

Route::put('/custom-field', 'CustomFieldsController@update')->admin();

Route::delete('/custom-field/:id', 'CustomFieldsController@destroy')->admin();


Route::resource('seo-optimizacija', 'SeoOptimizacijaController')
  ->when('guest', 'user', 'purchased')->allow('index');


Route::get('/pages', 'PagesController@pages')->admin();

Route::put('/pages', 'PagesController@update')->admin();


/**
 * Admin can switch between purchased and not purchased status in order to
 * be able to see both seo-kurs and seo-kurs-full pages and edit them.
 */

if(user()->isAdmin) {
  Route::get('/kupio-sam', function($req, $res) {
    Core\Support\Session::set('user_status', 'purchased');
    $res->redirect('/');
  });
  Route::get('/nisam-kupio', function($req, $res) {
    Core\Support\Session::set('user_status', 'user');
    $res->redirect('/');
  });
}