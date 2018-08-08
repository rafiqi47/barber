<?php

use App\Barber;
use App\facilities;
use App\User;
use App\entries;


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

Route::get('/table', function () {
      return view('table');
      });          // home page for barber app

Auth::routes(); //idk



// barber area start

// barber add area start
Route::get('barbers','barbercontroller@view_barbers')->name('barbers'); //shows all barbers

Route::get('/add_barber', function () {
      return view('add_barber');
      });   // directs to add form

Route::post('add_barber','barbercontroller@add_barber')->name('add_barber');    // add barber
// barber add area end


// barber update area start
Route::get('ulist','barbercontroller@ulist_barbers')->name('ulist');  //shows list

Route::get('update/{id}',function($id){
    $barbers = Barber::where('id',$id)->get()->first();
      return view('update', compact('barbers'));
      })->name('update');

Route::post('update/{id}','barbercontroller@update')->name('update');  //updates barber
// barber update area end


// barber delete area start
Route::get('dlist', function () {
    $barbers = Barber::all();
      return view('dlist', compact('barbers'));
      });

Route::get('delete/{id}','barbercontroller@delete')->name('delete'); //deletes barber
// barber delete area end

// barber area end







// service area start

Route::get('/services', function () {      //shows all services
    $services = facilities::all();
      return view('services', compact('services'));
      });

// start of add service

Route::get('/add_service', function () {
      return view('add_service');
      });   // directs to add form

Route::post('add_service','barbercontroller@add_service')->name('add_service');    // add service

// end of add service

// service update area start
Route::get('slist','barbercontroller@slist_services')->name('slist');  //shows list

Route::get('update_service/{id}',function($id){
    $services = facilities::where('id',$id)->get()->first();
      return view('update_service', compact('services'));
    })->name('update_service');

Route::post('update_service/{id}','barbercontroller@update_service')->name('update_service');  //updates service
//  service update area end

// service delete area start
Route::get('dslist', function () {
    $services = facilities::all();
      return view('dslist', compact('services'));
      });

Route::get('delete_service/{id}','barbercontroller@delete_service')->name('delete_service'); //deletes service
// service delete area end


// service area end







// enteries  area start


// enteries add area start

Route::get('entries', function () {      //shows all services
    $entries = entries::all();
      return view('entries', compact('entries'));
      });



Route::get('/add_entry_barber', function () {      //shows all services
      $barbers = Barber::all();
      return view('add_entry_barber',compact('barbers'));
      });   // directs to add form

Route::get('add_entry_service/{id}','barbercontroller@add_entry_service')->name('add_entry_service');    // add entry_barber
Route::get('add_entry_entry/{id1}/{id2}','barbercontroller@add_entry_entry')->name('add_entry_entry');    // add service_entry
// entry add area end


// show single_entry area start
Route::get('tlist', function () {
    $barbers = Barber::all();
      return view('tlist', compact('barbers'));
      });

Route::get('show_entries/{id}','barbercontroller@show_entries')->name('show_entries');

// show single_entry area end





//  barber delete area start
Route::get('delist', function () {    // shows list
    $entries = entries::all();
      return view('delist', compact('entries'));
      });

Route::get('delete_entry/{id}','barbercontroller@delete_entry')->name('delete_entry'); //deletes entry
//  entry delete area end


// enteries area end


Route::get('/home', 'HomeController@index')->name('home');
