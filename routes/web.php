<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TsilaController;
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
// user = variable name create; call in page web after (nameprojet.test/user)
// Route::get('/user',[TsilaController::class, 'page']);
// Route::get('/',function () {
//     return view('page');
// });
Route::get('/user',[StudentController::class, 'page']);
// show 
// Route::get('/user/update/{id}',[StudentController::class, 'page']);

// // Route::resource('user', StudentController::class);

Route::get('/students', [StudentController::class, 'page'])
    ->name('student.page');

Route::get('/students/create', [StudentController::class, 'create'])
    ->name('student.create');

Route::post('/students/store', [StudentController::class, 'store'])
    ->name('student.store');

Route::get('/students/show/{id}', [StudentController::class, 'show'])
    ->name('student.show');

Route::put('/students/update/{id}', [StudentController::class, 'update'])
    ->name('student.update');
    
Route::delete('/students/delete/{id}', [StudentController::class, 'destroy'])
    ->name('student.delete');

