<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/hello", function (): string {
    return "Hello World ! Ceci est ma première route Laravel.";
});

Route::get("/profile/{firstname}", function (string $firstname) {
    return "à compléter ...";
});


Route::post("/formulaire", function () {
    return "formulaire reçu !";
});

Route::view("/mentions-legales", "legal");
