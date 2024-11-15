<?php

use Illuminate\Support\Facades\Route;
use App\Models\Employee;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/employees', function () {
    $employees = Employee::all();
    return response()->json($employees->toArray());
});