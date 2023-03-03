<?php

use App\Http\Controllers\ToolController;
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
    return view('home');
});

Route::get('/tools', [ToolController::class, 'index'])->name('tools.index');
Route::get('/tools/create', [ToolController::class, 'create'])->name('tools.create');
Route::get('/tools/{tool}', [ToolController::class, 'show'])->name('tools.show');
Route::post('/tools', [ToolController::class, 'store'])->name('tools.store');
Route::get('/tools/{tool}/edit', [ToolController::class, 'edit'])->name('tools.edit');
Route::put('/tools/{tool}', [ToolController::class, 'update'])->name('tools.update');
