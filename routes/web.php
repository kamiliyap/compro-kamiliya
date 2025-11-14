    <?php

    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\LoginController;
    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\ADMIN\CategoryController;
    // use App\Http\Controllers\BelajarController;

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application.
    |
    */
//route get: ingin melihat, membaca
Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('action-login', [LoginController::class, 'action'])->name('action-login');
Route::get('sign-out', [\App\Http\Controllers\LoginController::class, 'logout'])->name('sign-out');


//awalan di depan buat pake routenya
Route::prefix('admin')->group(function(){
    Route::resource('dashboard', \App\Http\Controllers\ADMIN\DashboardController::class);
    Route::resource('user', \App\Http\Controllers\ADMIN\UserController::class);
});
Route::resource('admin/blog', \App\Http\Controllers\ADMIN\BlogController::class);
Route::prefix('admin')->group(function () {
    Route::resource('categories', CategoryController::class);
});



    Route::get('/belajar', [\App\Http\Controllers\BelajarController::class, 'index']);

    Route::get('aritmatika',[\App\Http\Controllers\BelajarController::class,'create']);
    Route::get('aritmatika/tambah',[\App\Http\Controllers\BelajarController::class,'tambah']);
    Route::get('aritmatika/kurang',[\App\Http\Controllers\BelajarController::class,'kurang']);
    Route::get('aritmatika/kali',[\App\Http\Controllers\BelajarController::class,'kali'])->name('aritmatika.kali');
    Route::get('aritmatika/bagi',[\App\Http\Controllers\BelajarController::class,'bagi'])->name('aritmatika.bagi');

    Route::post('aritmatika/tambah',[\App\Http\Controllers\BelajarController::class,'tambahAction'])->name('tambah-action');
    Route::post('aritmatika/bagi', [\App\Http\Controllers\BelajarController::class, 'bagiAction'])->name('bagi-action');
    Route::post('aritmatika/kali', [\App\Http\Controllers\BelajarController::class, 'kaliAction'])->name('kali-action');
    Route::post('aritmatika/kurang', [\App\Http\Controllers\BelajarController::class, 'kurangAction'])->name('kurang-action');
