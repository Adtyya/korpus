<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WordsFrequency;
use App\Http\Controllers\KorkondasiController;
use App\Http\Controllers\BooksController;
use App\Models\Korkondasi;

Route::get('/', function () {
    return view('home');
});

Route::get("/is-admin/word-frequency", [WordsFrequency::class, "adminpage"]);
Route::get("/is-admin/korkondasi", [KorkondasiController::class, "adminpage"]);
Route::get("/is-admin/books", [BooksController::class, "adminpage"]);

Route::delete("/delete-freq/{id}", [WordsFrequency::class, "destroy"])->name('del.freq');
Route::get("/freq-w/edit/{id}", [WordsFrequency::class, "editpage"]);
Route::post("/freq-w/update", [WordsFrequency::class, "update"]);
Route::post("/new-frequency", [WordsFrequency::class, "store"]);
Route::get("/new-frequency", [WordsFrequency::class, "storepage"]);

Route::get("/korkondasi/edit/{id}", [KorkondasiController::class, "editpage"]);
Route::post("/update-korkondasi", [KorkondasiController::class, "update"]);
Route::get("/new-korkondasi", [KorkondasiController::class, "storepage"]);
Route::post("/new-korkondasi", [KorkondasiController::class, "store"]);
Route::delete("/delete-korkondasi/{id}", [KorkondasiController::class, "destroy"])->name("del.korkondasi");

Route::get("/buku-pedoman", [BooksController::class, "show"]);
Route::get("/new-book", [BooksController::class, "storepage"]);
Route::get("/new-book", [BooksController::class, "storepage"]);
Route::post("/new-book", [BooksController::class, "store"]);
Route::delete("/delete-book/{id}", [BooksController::class, "destroy"])->name('del.book');
Route::get("/book/edit/{id}", [BooksController::class, "editpage"]);
Route::post("/update-book", [BooksController::class, "update"]);


Route::get("/frekuensi-kata", [WordsFrequency::class, "show"]);
Route::get("/korkondasi", [KorkondasiController::class, "show"]);

Route::get("/struktur-debat", function () {
    return view("struktur");
});
