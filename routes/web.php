<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'XeonController@home');
Route::get('/home', 'XeonController@home')->name('home');

Route::get('/admin', 'AdminController@home')->name('admin');

Route::get('/admin/service', 'ServiceController@index')->name('admin.service');
Route::get('/admin/service/create', 'ServiceController@create')->name('admin.service.create');
Route::post('/admin/service/store', 'ServiceController@store')->name('admin.service.strore');
Route::get('/admin/service/edit/{id}', 'ServiceController@edit')->name('admin.service.edit');
Route::put('/admin/service/update/{id}', 'ServiceController@update')->name('admin.service.update');
Route::get('/admin/service/delete/{id}', 'ServiceController@delete')->name('admin.service.delete');
Route::delete('/admin/service/destroy/{id}', 'ServiceController@destroy')->name('admin.service.destroy');

Route::get('/admin/portafolio', 'PortafolioController@index')->name('admin.portafolio');
Route::get('/admin/portafolio/create', 'PortafolioController@create')->name('admin.portafolio.create');
Route::post('/admin/portafolio/store', 'PortafolioController@store')->name('admin.portafolio.strore');
Route::get('/admin/portafolio/edit/{id}', 'PortafolioController@edit')->name('admin.portafolio.edit');
Route::put('/admin/portafolio/update/{id}', 'PortafolioController@update')->name('admin.portafolio.update');
Route::get('/admin/portafolio/delete/{id}', 'PortafolioController@delete')->name('admin.portafolio.delete');
Route::delete('/admin/portafolio/destroy/{id}', 'PortafolioController@destroy')->name('admin.portafolio.destroy');

Route::get('/admin/team', 'TeamController@index')->name('admin.team');
Route::get('/admin/team/create', 'TeamController@create')->name('admin.team.create');
Route::post('/admin/team/store', 'TeamController@store')->name('admin.team.strore');
Route::get('/admin/team/edit/{id}', 'TeamController@edit')->name('admin.team.edit');
Route::put('/admin/team/update/{id}', 'TeamController@update')->name('admin.team.update');
Route::get('/admin/team/delete/{id}', 'TeamController@delete')->name('admin.team.delete');
Route::delete('/admin/team/destroy/{id}', 'TeamController@destroy')->name('admin.team.destroy');

Route::get('/admin/mail', 'MailController@index')->name('admin.mail');
// Route::get('/admin/mail/create', 'MailController@create')->name('admin.mail.create');
Route::post('/send/mail/store', 'MailController@store')->name('admin.mail.store');
// Route::get('/admin/mail/edit/{id}', 'MailController@edit')->name('admin.mail.edit');
// Route::put('/admin/mail/update/{id}', 'MailController@update')->name('admin.mail.update');
// Route::get('/admin/mail/delete/{id}', 'MailController@delete')->name('admin.mail.delete');
// Route::delete('/admin/mail/destroy/{id}', 'MailController@destroy')->name('admin.mail.destroy');