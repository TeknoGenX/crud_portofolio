<?php




use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di sini kamu bisa mendefinisikan semua route web untuk aplikasi CRUD
| portofolio. Route default mengarah ke halaman daftar portofolio.
|
*/

// Redirect root ke halaman portofolio
Route::get('/', function () {
    return redirect('/portofolios');
});

// Resource route untuk controller CRUD
Route::resource('portofolios', PortfolioController::class);
