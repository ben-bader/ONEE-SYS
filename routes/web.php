<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeripheriqueController;
use App\Models\peripherique;
use Illuminate\Http\Request;
use App\Http\Controllers\OptionsController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [PeripheriqueController::class , 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/peripherique', [PeripheriqueController::class, 'create'])->middleware(['auth', 'verified'])->name('peripherique');
Route::post('/peripherique', [PeripheriqueController::class, 'store'])->middleware(['auth', 'verified'])->name('peripherique.store');
Route::delete('/peripherique/{id}', [PeripheriqueController::class, 'destroy'])->middleware(['auth', 'verified'])->name('peripherique.destroy');
Route::get('/peripherique/edit/{id}', [PeripheriqueController::class, 'edit'])->middleware(['auth', 'verified'])->name('peripherique.edit');
Route::patch('/peripherique/{id}', [PeripheriqueController::class, 'update'])->middleware(['auth', 'verified'])->name('peripherique.update');
Route::get('/peripherique/{id}',[PeripheriqueController::class , 'show'])->middleware(['auth', 'verified'])->name('peripherique.show');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/options', function () {
    return view('options');
})->middleware(['auth', 'verified'])->name('options');
Route::get('/options/marque', [OptionsController::class, 'marque'])->name('options.marque');

Route::post('/options/marque', [OptionsController::class, 'storeMarque']);

Route::put('/options/marque/{id}', [OptionsController::class, 'updateMarque']);

Route::delete('/options/marque/{id}', [OptionsController::class, 'deleteMarque']);



Route::get('/options/employe', [OptionsController::class, 'employe'])->name('options.employe');

Route::post('/options/employe', [OptionsController::class, 'storeEmploye']);

Route::put('/options/employe/{matricule}', [OptionsController::class, 'updateEmploye']);

Route::delete('/options/employe/{matricule}', [OptionsController::class, 'deleteEmploye']);



Route::get('/options/site', [OptionsController::class, 'site'])->name('options.site');

Route::post('/options/site', [OptionsController::class, 'storeSite']);

Route::put('/options/site/{id}', [OptionsController::class, 'updateSite']);

Route::delete('/options/site/{id}', [OptionsController::class, 'deleteSite']);

Route::get('/print-database', function () {
    $excludedTables = [
        'migrations',
        'users',
        'password_reset_tokens',
        'sessions',
        'cache',
        'cache_locks',
        'jobs',
        'job_batches',
        'failed_jobs',
    ];
    $tables = DB::select("SELECT name FROM sqlite_master WHERE type='table' AND name NOT LIKE 'sqlite_%'");

    $allData = [];

    foreach ($tables as $table) {
        $tableName = $table->name;
        if (in_array($tableName, $excludedTables)) {
            continue;
        }
        $data = DB::table($tableName)->get();
        $columns = Schema::getColumnListing($tableName);

        $allData[] = [
            'name' => $tableName,
            'columns' => $columns,
            'rows' => $data,
        ];
    }

    return view('print-database', ['tables' =>$allData]);
});
require __DIR__.'/auth.php';
