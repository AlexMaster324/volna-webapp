<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlaylistsController;
use App\Http\Controllers\AlbumsController;
use App\Http\Controllers\BroadcastsController;
use App\Http\Controllers\PodcastsController;
use App\Http\Controllers\GenresController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ChartsController;
use App\Http\Controllers\AudiobooksController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\StaticPageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ErrorsController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\AuthorsController;

Route::prefix('authors')
    ->name('authors.')
    ->controller(AuthorsController::class)
    ->group(function () {
        Route::get('/', 'index')
            ->name('review');
        Route::get('/create', 'createGet')
            ->name('create.get');
        Route::post('/create', 'createPost')
            ->name('create.post');
        Route::get('/{id}', 'show')
            ->name('show')
            ->where('id', '[0-9]+');
        Route::get('/{id}/edit', 'editGet')
            ->name('edit.get')
            ->where('id', '[0-9]+');
        Route::post('/{id}/edit', 'editPost')
            ->name('edit.post')
            ->where('id', '[0-9]+');
        Route::match(['get', 'post'], '/{id}/delete', 'delete')
            ->name('delete')
            ->where('id', '[0-9]+');
    });

Route::prefix('playlists')
    ->name('playlists.')
    ->controller(PlaylistsController::class)
    ->group(function () {
        Route::get('/', 'index')
            ->name('playlists.review');
        Route::get('/create', 'createGet')
            ->name('playlists.create.get');
        Route::post('/create', 'createPost')
            ->name('playlists.create.post');
        Route::get('/{id}', 'show')
            ->name('playlists.show')
            ->where('id', '[0-9]+');
        Route::get('/{id}/edit', 'editGet')
            ->name('playlists.edit.get')
            ->where('id', '[0-9]+');
        Route::post('/{id}/edit', 'editPost')
            ->name('playlists.edit.post')
            ->where('id', '[0-9]+');
        Route::match(['get', 'post'], '/{id}/delete', 'delete')
            ->name('playlists.delete')
            ->where('id', '[0-9]+');
    });

Route::prefix('albums')
    ->name('albums.')
    ->controller(AlbumsController::class)
    ->group(function () {
        Route::get('/', 'index')
            ->name('review');
        Route::get('/create', 'createGet')
            ->name('create.get');
        Route::post('/create', 'createPost')
            ->name('create.post');
        Route::get('/{id}', 'show')
            ->name('show')
            ->where('id', '[0-9]+');
        Route::get('/{id}/edit', 'editGet')
            ->name('edit.get')
            ->where('id', '[0-9]+');
        Route::post('/{id}/edit', 'editPost')
            ->name('edit.post')
            ->where('id', '[0-9]+');
        Route::match(['get', 'post'], '/{id}/delete', 'delete')
            ->name('delete')
            ->where('id', '[0-9]+');
    });

Route::prefix('records')
    ->name('records.')
    ->controller(RecordController::class)
    ->group(function () {
        Route::get('/create', 'createGet')
            ->name('create.get');
        Route::post('/create', 'createPost')
            ->name('create.post');
        Route::get('/{id}', 'show')
            ->name('show')
            ->where('id', '[0-9]+');
        Route::get('/{id}/edit', 'editGet')
            ->name('edit.get')
            ->where('id', '[0-9]+');
        Route::post('/{id}/edit', 'editPost')
            ->name('edit.post')
            ->where('id', '[0-9]+');
        Route::match(['get', 'post'], '/{id}/delete', 'delete')
            ->name('delete')
            ->where('id', '[0-9]+');
    });

Route::prefix('broadcasts')
    ->name('broadcasts.')
    ->controller(BroadcastsController::class)
    ->group(function () {
        Route::get('/', 'index')
            ->name('review');
        Route::get('/create', 'createGet')
            ->name('create.get');
        Route::post('/create', 'createPost')
            ->name('create.post');
        Route::get('/{id}', 'show')
            ->name('show')
            ->where('id', '[0-9]+');
        Route::get('/{id}/edit', 'editGet')
            ->name('edit.get')
            ->where('id', '[0-9]+');
        Route::post('/{id}/edit', 'editPost')
            ->name('edit.post')
            ->where('id', '[0-9]+');
        Route::match(['get', 'post'], '/{id}/delete', 'delete')
            ->name('delete')
            ->where('id', '[0-9]+');
    });

Route::prefix('podcasts')
    ->name('podcasts.')
    ->controller(PodcastsController::class)
    ->group(function () {
        Route::get('/', ['index'])
            ->name('review');
        Route::get('/create', ['createGet'])
            ->name('create.get');
        Route::post('/create', ['createPost'])
            ->name('create.post');
        Route::get('/{id}', ['show'])
            ->name('show')
            ->where('id', '[0-9]+');
        Route::get('/{id}/edit', ['editGet'])
            ->name('edit.get')
            ->where('id', '[0-9]+');
        Route::post('/{id}/edit', ['editPost'])
            ->name('edit.post')
            ->where('id', '[0-9]+');
        Route::match(['get', 'post'], '/{id}/delete', ['delete'])
            ->name('delete')
            ->where('id', '[0-9]+');
    });

Route::prefix('genres')
    ->name('genres.')
    ->controller(GenresController::class)
    ->group(function () {
        Route::get('/', 'index')
            ->name('review');
        Route::get('/create', 'createGet')
            ->name('create.get');
        Route::post('/create', 'createPost')
            ->name('create.post');
        Route::get('/{id}', 'show')
            ->name('show')
            ->where('id', '[0-9]+');
        Route::get('/{id}/edit', 'editGet')
            ->name('edit.get')
            ->where('id', '[0-9]+');
        Route::post('/{id}/edit', 'editPost')
            ->name('edit.post')
            ->where('id', '[0-9]+');
        Route::match(['get', 'post'], '/{id}/delete', 'delete')
            ->name('delete')
            ->where('id', '[0-9]+');
    });

Route::prefix('news')
    ->name('news.')
    ->controller(NewsController::class)
    ->group(function () {
        Route::get('/', 'index')
            ->name('review');
        Route::get('/create', 'createGet')
            ->name('create.get');
        Route::post('/create', 'createPost')
            ->name('create.post');
        Route::get('/{id}', 'show')
            ->name('show')
            ->where('id', '[0-9]+');
        Route::get('/{id}/edit', 'editGet')
            ->name('edit.get')
            ->where('id', '[0-9]+');
        Route::post('/{id}/edit', 'editPost')
            ->name('edit.post')
            ->where('id', '[0-9]+');
        Route::match(['get', 'post'], '/{id}/delete', 'delete')
            ->name('delete')
            ->where('id', '[0-9]+');
    });

Route::prefix('charts')
    ->name('charts.')
    ->controller(ChartsController::class)
    ->group(function () {
        Route::get('/', 'index')
            ->name('review');
        Route::get('/create', 'createGet')
            ->name('create.get');
        Route::post('/create', 'createPost')
            ->name('create.post');
        Route::get('/{id}', 'show')
            ->name('show')
            ->where('id', '[0-9]+');
        Route::get('/{id}/edit', 'editGet')
            ->name('edit.get')
            ->where('id', '[0-9]+');
        Route::post('/{id}/edit', 'editPost')
            ->name('edit.post')
            ->where('id', '[0-9]+');
        Route::match(['get', 'post'], '/{id}/delete', 'delete')
            ->name('delete')
            ->where('id', '[0-9]+');
    });

Route::prefix('audiobooks')
    ->name('audiobooks.')
    ->controller(AudiobooksController::class)
    ->group(function () {
        Route::get('/', 'index')
            ->name('review');
        Route::get('/create', 'createGet')
            ->name('create.get');
        Route::post('/create', 'createPost')
            ->name('create.post');
        Route::get('/{id}', 'show')
            ->name('show')
            ->where('id', '[0-9]+');
        Route::get('/{id}/edit', 'editGet')
            ->name('edit.get')
            ->where('id', '[0-9]+');
        Route::post('/{id}/edit', 'editPost')
            ->name('edit.post')
            ->where('id', '[0-9]+');
        Route::match(['get', 'post'], '/{id}/delete', 'delete')
            ->name('delete')
            ->where('id', '[0-9]+');
    });

Route::prefix('users')
    ->name('users.')
    ->controller(UsersController::class)
    ->group(function () {
        Route::get('/', 'index')
            ->name('review');
        Route::get('/{id}', 'show')
            ->name('show')
            ->where('id', '[0-9]+');
        Route::get('/{id}/edit', 'editGet')
            ->name('edit.get')
            ->where('id', '[0-9]+');
        Route::post('/{id}/edit', 'editPost')
            ->name('edit.post')
            ->where('id', '[0-9]+');
        Route::match(['get', 'post'], '/{id}/delete', 'delete')
            ->name('delete')
            ->where('id', '[0-9]+');
    });


Route::name('staticpages.')
    ->controller(StaticPageController::class)
    ->group(function () {
        Route::get('/', 'main')
            ->name('home');
        Route::get('/contacts', 'contacts')
            ->name('contacts');
        Route::get('/about', 'about')
            ->name('about');
        Route::get('/privacy', 'privacy')
            ->name('privacy');
    });

Route::name('auth.')
    ->controller(AuthController::class)
    ->group(function () {
        Route::get('/signin', 'signinGet')->name('signin.get');
        Route::post('/signin', 'signinPost')->name('signin.post');
        Route::get('/signup', 'signupGet')->name('signup.get');
        Route::post('/signup', 'signupPost')->name('signup.post');
        Route::get('/forgot', 'forgotGet')->name('forgot.get');
        Route::post('/forgot', 'forgotPost')->name('forgot.post');
        Route::get('/logout', 'logout')->name('logout');
    });


Route::prefix('errors')
    ->name('errors.')
    ->controller(ErrorsController::class)
    ->group(function () {
        Route::get('/404', 'e404')
            ->name('404');
    });




