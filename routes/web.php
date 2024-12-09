<?php

use Illuminate\Support\Facades\Route;
use App\Models\Employee;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/error', function () {
    throw new \Exception("test error");
});


Route::get('/employees', function () {
    $employees = Employee::all();
    return response()->json($employees->toArray());
});