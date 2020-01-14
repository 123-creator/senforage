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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get("/produit","Productscontroller@Produit");

//  Route::get("/categorie/{id}","Productscontroller@show");
//Route::post("/Client","ClientController@store");

//client
Route::resource("Client","ClientController");
Route::get("/Client/edit/{idC}","ClientController@edit")->name('editer_client');
Route::patch("/Client/edit/{client}","ClientController@update")->name('update_client');
//compteur
Route::resource("compteur","CompteurController");
Route::get("/compteur/edit/{numC}","CompteurController@edit")->name('editer_compteur');
Route::patch("/compteur/edit/{compteur}","CompteurController@update")->name('update_compteur');
//abonnement
Route::resource("Abonnement","AbonnementController");
Route::get("/Abonnement/edit/{numA}","AbonnementController@edit")->name('editer_abonnement');
Route::patch("/Abonnement/edit/{abonnement}","AbonnementController@update")->name('update_abonnement');
//consommation
Route::resource("Consommation","ConsommationController");
Route::get("/Consommation/edit/{idcons}","ConsommationController@edit")->name('editer_consommation');
Route::patch("/Consommation/edit/{consommation}","ConsommationController@update")->name('update_consommation');





//utilisateur
Route::resource("Utilisateur","UtilisateurController");

// Route::get("/produit","Productscontroller@index");
 Route::get("/","HomeController@index");
// Route::get("/product/{id}","HomeController@Show");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
