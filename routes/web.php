<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SocialMediaController;
use App\Http\Controllers\TextSettingController;
use Illuminate\Support\Facades\Auth;
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

// Frontend  pages start
Route::get('/', [PagesController::class, 'home'])->name('home');

Route::get('/locale/{locale}', function ($locale) {
      session()->put('locale', $locale);
      return  back();
});

Route::get('/news', [PagesController::class, 'news'])->name('news');
Route::get('/news/{slug}', [PagesController::class, 'newsShow'])->name('newsShow');

Route::get('/new', [PagesController::class, 'New'])->name('new');
Route::get('/allphoto', [PagesController::class, 'allPhoto'])->name('allPhoto');
Route::get('/about', [PagesController::class, 'aboutShow'])->name('about');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::post('/contact', [PagesController::class, 'contactSend'])->name('contactSend');
Route::get('/flag', [PagesController::class, 'flag'])->name('flag');
Route::get('/gerb', [PagesController::class, 'gerb'])->name('gerb');
Route::get('/madhiya', [PagesController::class, 'madhiya'])->name('madhiya');
Route::get('/slug', [PagesController::class, 'slug'])->name('slug');




// Frontend  pages end

// Backend  pages  start
Route::prefix('admin')->middleware('auth')->name('admin.')->group(function () {
      Route::get('/', function () {
            return  view('admin.index');
      })->name('index');
      Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
      Route::post('/changeData', [AdminController::class, 'data'])->name('data');
      Route::post('/changePassword', [AdminController::class, 'password'])->name('password');

      Route::resources([
            'slider' => SliderController::class,
            'news' => NewsController::class,
            'photo' => PhotoController::class,
            'result' => ResultController::class,
            'link' => LinkController::class,
            'textsetting' => TextSettingController::class,
            'socialmedia' => SocialMediaController::class,
            'about' => AboutController::class,
            'contact' => ContactController::class,
      ]);

      Route::post('activation', [AdminController::class, 'activation'])->name('activation');
});
// Backend  pages  end

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home1');
