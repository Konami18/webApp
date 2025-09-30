<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student;

Route::get('/', [Student::class, 'index'])->name('students.index');

Route::get('/add', [Student::class, 'add'])->name('students.add');

Route::get('/edit/{id}', [Student::class, 'edit'])->name('students.edit');

Route::get('/delete/{id}', [Student::class, 'delete'])->name('students.delete');