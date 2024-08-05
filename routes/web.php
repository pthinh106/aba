<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\Users\LoginController;
use \App\Http\Controllers\Admin\MenuController;
use \App\Http\Controllers\Admin\NewsController;
use \App\Http\Controllers\Admin\UploadController;
use \App\Http\Controllers\Admin\BlockController;
use \App\Http\Controllers\Admin\MainController;
use \App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Artisan;

Route::get('admin/users/login',[LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('admin/users/login/store',[LoginController::class, 'store']);

Route::middleware(['auth'])->group(function (){
    Route::prefix('admin')->group(function (){
        Route::get('/',[MainController::class, 'index'])->name('admin');

        Route::get('home',[MainController::class, 'home']);
        Route::post('home',[MainController::class, 'updateHome']);

        Route::get('questions-answers',[MainController::class, 'questionsAnswers']);
        Route::post('questions-answers',[MainController::class, 'updateQuestionsAnswers']);

        Route::get('about-us',[MainController::class, 'aboutUs']);
        Route::post('about-us',[MainController::class, 'updateAboutUs']);

        Route::get('contact',[MainController::class, 'contact']);
        Route::post('contact',[MainController::class, 'updateContact']);

        Route::get('immigration',[MainController::class, 'immigration']);
        Route::post('immigration',[MainController::class, 'updateImmigration']);

        Route::get('new-business-establishment-product-promotion',[MainController::class, 'newBusinessEstablishmentProductPromotion']);
        Route::post('new-business-establishment-product-promotion',[MainController::class, 'updateNewBusinessEstablishmentProductPromotion']);

        Route::get('translation-and-interpretation',[MainController::class, 'translationAndInterpretation']);
        Route::post('translation-and-interpretation',[MainController::class, 'updateTranslationAndInterpretation']);

        Route::get('warranty',[MainController::class, 'warranty']);
        Route::post('warranty',[MainController::class, 'updateWarranty']);

        Route::get('representative-broker',[MainController::class, 'representativeBroker']);
        Route::post('representative-broker',[MainController::class, 'updateRepresentativeBroker']);

        Route::get('employment',[MainController::class, 'employment']);
        Route::post('employment',[MainController::class, 'updateEmployment']);

        Route::get('special',[MainController::class, 'special']);
        Route::post('special',[MainController::class, 'updateSpecial']);

        Route::get('products',[MainController::class, 'products']);
        Route::post('products',[MainController::class, 'updateProducts']);

        Route::get('profile',[MainController::class, 'profile']);
        Route::post('profile',[MainController::class, 'updateProfile']);











        // #menu
        // Route::prefix('menus')->group(function (){
        //     Route::get('add',[MenuController::class, 'create']);
        //     Route::post('add',[MenuController::class, 'store']);
        //     Route::get('list',[MenuController::class, 'index']);
        //     Route::get('edit/{menu}',[MenuController::class, 'show']);
        //     Route::post('edit/{menu}',[MenuController::class, 'update']);
        //     Route::delete('destroy',[MenuController::class, 'destroy']);
        // });
        // #news
        // Route::prefix('news')->group(function (){
        //     Route::get('add',[NewsController::class, 'create']);
        //     Route::post('add',[NewsController::class, 'store']);
        //     Route::get('list',[NewsController::class, 'index']);
        //     Route::get('edit/{new}',[NewsController::class, 'show']);
        //     Route::post('edit/{new}',[NewsController::class, 'update']);
        // });

        // #Block
        // Route::prefix('blocks')->group(function (){
        //     Route::get('add',[BlockController::class, 'create']);
        //     Route::post('add',[BlockController::class, 'store']);
        //     Route::get('list',[BlockController::class, 'index']);
        //     Route::get('edit/{block}',[BlockController::class, 'show']);
        //     Route::post('edit/{block}',[BlockController::class, 'update']);
        //     Route::post('addon-block',[BlockController::class, 'addonBlock']);

        // });

        // #upload
        // Route::post('upload/services',[UploadController::class, 'store']);
    });

});
Route::group(['middleware' => 'locale'], function() {
    Route::get('/',[HomeController::class,'index']);
    Route::get('change-language/{language}', [HomeController::class,'changeLanguage']);
    Route::get('/questions-answers',[HomeController::class,'questionsAnswers']);
    Route::get('/about-us',[HomeController::class,'aboutUs']);
    Route::get('/contact',[HomeController::class,'contact']);
    Route::get('/immigration',[HomeController::class,'immigration']);
    Route::get('/new-business-establishment-product-promotion',[HomeController::class,'newBusinessEstablishmentProductPromotion']);
    Route::get('/translation-and-interpretation',[HomeController::class,'translationAndInterpretation']);
    Route::get('/warranty',[HomeController::class,'warranty']);
    Route::get('/representative-broker',[HomeController::class,'representativeBroker']);
    Route::get('/employment',[HomeController::class,'employment']);
    Route::get('/special',[HomeController::class,'special']);
    Route::get('/products',[HomeController::class,'products']);
    Route::get('/profile',[HomeController::class,'profile']);
    Route::get('/storage-link', function() {
        $exitCode = Artisan::call('migrate', [] );
        echo storage_path();
        echo "<br>";
        echo public_path();
        // Do whatever you want either a print a message or exit
    });
});

Route::get('tin-tuc',[HomeController::class,'news']);
Route::get('lien-he',[HomeController::class,'contact']);
Route::get('tim-kiem',[HomeController::class,'search']);
//Route::get('tin-tuc/{category}',[HomeController::class,'newsCategory']);
Route::get('tin-tuc/{slug}.{id}.html',[HomeController::class,'newsDetail']);
Route::get('{category}',[HomeController::class,'category']);
Route::get('{category}/{brand}',[HomeController::class,'brand']);






