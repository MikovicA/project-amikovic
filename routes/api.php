<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get("/users", function() {
    $users = [
        [
            "name" => "John Doe",
            "email" => "johndoe@example.com",
            "password" => "password123"
        ],
        [
            "name" => "Jane Doe",
            "email" => "janedoe@example.com",
            "password" => "password123"
        ],
    ];
    return response()->json($users);
});