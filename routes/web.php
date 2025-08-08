<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParameterController;
use App\Http\Controllers\MethodController;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\AnalysisController;

Route::get('/parameter', [ParameterController::class, 'index'])->name('parameter.index');
Route::get('/parameter/create', [ParameterController::class, 'create'])->name('parameter.create');
Route::post('/parameter/store', [ParameterController::class, 'store'])->name('parameter.store');
Route::get('/parameter/{id}/edit', [ParameterController::class, 'edit'])->name('parameter.edit');
Route::put('/parameter/{id}', [ParameterController::class, 'update'])->name('parameter.update');
Route::delete('/parameter/{id}', [ParameterController::class, 'destroy'])->name('parameter.destroy');

Route::get('/method', [MethodController::class, 'index'])->name('method.index');
Route::get('/method/create', [MethodController::class, 'create'])->name('method.create');
Route::post('/method/store', [MethodController::class, 'store'])->name('method.store');
Route::get('/method/{id}/edit', [MethodController::class, 'edit'])->name('method.edit');
Route::put('/method/{id}', [MethodController::class, 'update'])->name('method.update');
Route::delete('/method/{id}', [MethodController::class, 'destroy'])->name('method.destroy');

Route::get('/sample', [SampleController::class, 'index'])->name('sample.index');
Route::get('/sample/create', [SampleController::class, 'create'])->name('sample.create');
Route::post('/sample/store', [SampleController::class, 'store'])->name('sample.store');
Route::get('/sample/{id}/edit', [SampleController::class, 'edit'])->name('sample.edit');
Route::put('/sample/{id}', [SampleController::class, 'update'])->name('sample.update');
Route::get('/sample/{id}', [SampleController::class, 'show'])->name('sample.show');
Route::delete('/sample/{id}', [SampleController::class, 'destroy'])->name('sample.destroy');

Route::get('/analysis', [AnalysisController::class, 'index'])->name('analysis.index');
Route::get('/analysis/create', [AnalysisController::class, 'create'])->name('analysis.create');
Route::post('/analysis/store', [AnalysisController::class, 'store'])->name('analysis.store');
Route::get('/analysis/{id}/edit', [AnalysisController::class, 'edit'])->name('analysis.edit');
Route::put('/analysis/{id}', [AnalysisController::class, 'update'])->name('analysis.update');
Route::delete('/analysis/{id}', [AnalysisController::class, 'destroy'])->name('analysis.destroy');
