<?php

use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\ClassroomSettings;
use App\Http\Controllers\ClassworkController;
use App\Http\Controllers\CustomiseApperanceClassroomController;
use App\Http\Controllers\JoinClassroomController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SendInvidationLinkController;
use App\Http\Controllers\TopicController;
use App\Models\Classroom;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';

// Route::view('/test', 'index');
Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    Route::middleware('auth')->group(function () {
        Route::prefix('/classrooms')->group(function () {
            Route::controller(ClassroomController::class)->group(function () {
                Route::get('/trash', 'trash')->name('classroom.trashed');
                Route::put('/{classroom}/trash', 'restore')->name('classroom.restore');
                Route::delete('/{classroom}/force-delete', 'forceDelete')->name('classroom.forceDelete');
            });
            Route::get('/{classroom:code}/peoples', [PeopleController::class, 'index'])->name('classroom.people');
            Route::get('/{classroom}/join', [JoinClassroomController::class, 'create'])->middleware('signed')->name('classroom.join');
            Route::post('/{classroom}/join', [JoinClassroomController::class, 'store'])->middleware('signed');
            Route::put('/customise/{classroom}/update', [CustomiseApperanceClassroomController::class, 'update'])->name('classroom.customise.update');
            Route::controller(TopicController::class)->prefix('/{classroom:code}')->as('topic.')->group(function () {
                // Route::get('/topics', 'index')->name('index');
                Route::put('/{topic}', 'update')->name('update');
                Route::post('/topics', 'store')->name('store');
                Route::delete('{topic}/destroy', 'destroy')->name('destory');
            });
        });
        Route::post('/send-invitation-link/{classroom}', SendInvidationLinkController::class)->middleware('send.invitation')->name('send.invitation');
        // Route::get('/', [ClassroomController::class, 'index'])->name('classroom.index');
        Route::resource('classrooms.classworks', ClassworkController::class)->names('classwork');
        Route::resource('classrooms', ClassroomController::class)->names('classroom');
        Route::post('/profile', ProfileController::class)->name('profile.update');
    });
    Route::get('/people', fn () => view('people', ['classroom' => Classroom::all()->first()]));
    Route::get('/join', fn () => view('join', ['classroom' => Classroom::all()->first()]));
    Route::get('/test', fn () => view('test', ['classroom' => Classroom::all()->first()]));
});
// Route::resource('classrooms.topics', TopicController::class)->except('index')->names('topic');
