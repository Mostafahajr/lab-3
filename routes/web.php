<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TrackController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

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
Route::get("/students/create",[StudentController::class,"create"])->name("student.create");
Route::get("/students",[StudentController::class,"list"])->name("students");
Route::get("/students/{id}",[StudentController::class,"view"])->name("student.view");
Route::get("/students/del/{id}",[StudentController::class,"delete"])->name("student.delete");
Route::post("/students",[StudentController::class,"store"])->name("student.add");
Route::get("/students/update/{id}",[StudentController::class,"update"])->name("student.update");
Route::post("/students/{id}",[StudentController::class,"edit"])->name("student.edit");


// ----------------------------------

Route::get("/tracks/create",[TrackController::class,"create"])->name("tracks.create");
Route::get("/tracks",[TrackController::class,"list"])->name("tracks");
Route::post("/tracks",[TrackController::class,"store"])->name("tracks.add");
Route::get("/tracks/update/{id}",[TrackController::class,"update"])->name("track.update");
Route::post("/tracks/{id}",[TrackController::class,"edit"])->name("track.edit");
Route::get("/tracks/del/{id}",[TrackController::class,"delete"])->name("track.delete");
Route::get("/tracks/view/{id}",[TrackController::class,"view"])->name("track.view");


Route::resource("/tracks",[TrackController::class]);






