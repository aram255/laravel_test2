<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('locale/{locale}', function ($locale) {
//     //App::setLocale($locale);
//     Session::put('locale',$locale);
//     return redirect()->back();
  
// });

// Route::group(['middleware' => '{locale}'], function () {

Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', function () {
    return view('home');
});

// Route::get('/ok',function(){
//       echo 'cfcf';
// })->name('kk');

//Route::get('/method','StudentController@method')->name('asssss');
Route::group([
	
  'where' => ['locale' => '[a-zA-Z]{2}'], 
  //'prefix' => '{locale}', 
  'middleware' => 'setlocale'], function() {
Route::get('/','StudentController@index');

Route::get('{locale}/add-contact','ContactController@Addcontact');
Route::get('all-contact','ContactController@Allcontact')->name('all.contact');

Route::post('insert-contact','ContactController@InsertContact');
Route::get('delete-contact/{id}','ContactController@DeleteContact')->name('delete.contact');

Route::get('show-data/{id}','ContactController@ShowContactView');
Route::get('edit-contact-view/{id}/','ContactController@EditContactView');
Route::post('edit-contact/{id}','ContactController@EditContact');



Route::get('/dummy-data','StudentController@index')->name('dummy.join');
Route::get('/all-data','StudentController@Alldata');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
