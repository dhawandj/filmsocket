<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    // return Inertia::render('Welcome', [
    //     'canLogin' => Route::has('login'),
    //     'canRegister' => Route::has('register'),
    //     'laravelVersion' => Application::VERSION,
    //     'phpVersion' => PHP_VERSION,
    // ]);

    return Inertia::render('Home');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/test', function () {
    return Inertia::render('Test2');
})->name('home');
Route::get('/commingSoon', function () {

    return Inertia::render('CommingSoon');
})->name('soon');

Route::prefix('film-making')->group(function () {
    Route::get('/pre-production', function () {
        return Inertia::render('PreProduction');
    })->name('preproduction');
});

Route::get('/fileUpload', function () {
    // Storage::disk('local')->put('example.txt', 'Contents');
    // dd(env('FILESYSTEM_DISK'));
    // ini_set('post_max_size',"80M");
    // dd(ini_get('post_max_size'));
    // dd(phpinfo());
    
    return Inertia::render('FileUpload');
})->name('fileUpload');

Route::post('/upload', function () {
    // dd(get_class_methods(request()->file('avatar')));
    // request()->file('avatar')->store('avatars');
    // dd(request()->file('avatars'));
    foreach (request()->file('avatars') as $file) {
        $path = $file->store('avatars', 'public'); // Store in "storage/app/public/avatars"
    }
    return back();
})->name('upload');