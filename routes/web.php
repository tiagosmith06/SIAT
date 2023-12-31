<?php

use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GestionController;






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


Route::controller(FrontController::class)->group(function () {
    Route::get('/biogeografico', [MunicipioController::class, 'page.biogeografico'])->name('biogeografico');
    Route::get('/municipios')->name('pages.municipios');
    Route::get('/', 'index')->name('pages.index');
    Route::get('/posts/{post}', 'show_articulo')->name('posts.show');
    Route::get('/searches', 'search')->name('posts.search');
    Route::get('/etiquetas/{tag}', 'tag')->name('posts.tag');
    Route::get('/geovisor', 'geovisor')->name('pages.geovisor');
    Route::get('/catalogo', 'catalogo')->name('pages.catalogo');
    Route::get('/vision', 'vision')->name('pages.vision');

    Route::get('/quienes_somos', 'quienes_somos')->name('pages.quienes_somos');
    Route::get('/dashboard', 'dashboard')->name('pages.dashboard');
    Route::get('/comunicacion', 'comunicacion')->name('pages.comunicacion');
    Route::get('/atencionintegral', 'atencionintegral')->name('pages.atencionintegral');
    Route::get('/proyectosambientales', 'proyectosambientales')->name('pages.proyectosambientales');
    Route::get('/gestiondocumental', 'gestiondocumental')->name('pages.gestiondocumental');
    Route::get('/contratacion/{post}', 'show_contratacion')->name('pages.show-contratacion');
    Route::get('/estructura', 'estructura')->name('pages.estructura');
    Route::get('/documentos', 'documents')->name('pages.documents');
    Route::get('/biogeografico', 'biogeografico')->name('pages.biogeografico');
    Route::get('/biogeografico/{post}', 'show_biogegrafico')->name('pages.show-biogeografico');
    Route::get('/comunicacion/{post}', 'show_comunicacion')->name('pages.show-comunicacion');
    Route::get('/comment/{post}', 'storeComment')->name('comments.show');
    Route::get('/contador', 'counter')->name('contador');
    Route::get('/gestiondocumental', 'gestiondocumental')->name('pages.gestiondocumental');
    Route::get('/pages/create', 'create')->name('pages.create');
    Route::post('/pages', [GestionController::class, 'store'])->name('pages.store');
    Route::get('/pages/{gestiondocumental}', [GestionController::class, 'show_gestion'])->name('pages.show_gestion');
    Route::get('/pages/{gestiondocumental}/edit', [GestionController::class, 'edit'])->name('pages.edit_gestion');
    Route::put('/pages/{gestiondocumental}', [GestionController::class, 'update'])->name('pages.update');
    Route::delete('/pages/{gestiondocumental}', [GestionController::class, 'destroy'])->name('pages.destroy');


});



Route::controller(ContactController::class)->group(function () {
    Route::get('/contactanos', 'showContactForm')->name('pages.contactanos');
    Route::get('/contactanos/thankyou', 'showThankYouPage')->name('pages.thankyou');
    Route::post('/contactanos', 'submitContactForm')->name('contact.submit');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/admin', function () {
        return view('admin');
    })->name('admin');
});
