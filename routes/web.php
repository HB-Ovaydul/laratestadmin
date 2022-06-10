<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\staffcontroller;
use App\Http\Controllers\admin\studentcontroller;
use App\Http\Controllers\admin\teachercontroller;
use App\Http\Controllers\admin\deshboardcontroller;
/**
 * Admin Penal Routes
 */
Route::get('deshboard', [ deshboardcontroller::class, 'deshboard' ]) -> name('deshboard');

/**
 * All Student Routes
 */
Route::get('student', [ studentcontroller::class, 'index' ]) -> name('student.index');
Route::get('student-create', [ studentcontroller::class, 'create' ]) -> name('student.create');
Route::post('student-store', [ studentcontroller::class, 'store' ]) -> name('student.store');
Route::get('student-single/{id}', [ studentcontroller::class, 'show' ]) -> name('student.show');
Route::get('student-edit/{id}', [ studentcontroller::class, 'edit' ]) -> name('student.edit');
Route::get('destroy/{id}', [ studentcontroller::class, 'destroy' ]) -> name('student.destroy');
Route::post('update/{id}', [ studentcontroller::class, 'update' ]) -> name('student.update');

/**
 * All teacher Routes
 */
Route::get('teacher', [ teachercontroller::class, 'index' ]) -> name('teacher.index');
Route::get('teacher-create', [ teachercontroller::class, 'create' ]) -> name('teacher.create');
Route::post('teacher-store', [ teachercontroller::class, 'store' ]) -> name('teacher.store');
Route::get('teacher-single/{id}', [ teachercontroller::class, 'show' ]) -> name('teacher.show');
Route::get('teacher-edit/{id}', [ teachercontroller::class, 'edit' ]) -> name('teacher.edit');
/**
 * All Staff Routes
 */
Route::get('staff', [ staffcontroller::class, 'index' ]) -> name('staff.index');
Route::get('staff-create', [ staffcontroller::class, 'create' ]) -> name('staff.create');
Route::post('staff-store', [ staffcontroller::class, 'store' ]) -> name('staff.store');
Route::get('staff-single/{id}', [ staffcontroller::class, 'show' ]) -> name('staff.show');
Route::get('staff-edit/{id}', [ staffcontroller::class, 'edit' ]) -> name('staff.edit');
