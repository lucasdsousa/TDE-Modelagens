<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $users = DB::table('users')->get();
    $coletas = DB::table('coletas')->get();

    return view('dashboard', compact('users', 'coletas'));
    
})->middleware(['auth'])->name('dashboard');

Route::post('/dashboard/{id}', function($id) {
    $coletas = DB::table('coletas')->where('id', $id)->first();
    //print_r($coletas->status);

    if($coletas->status == "Aguardando Coleta") {
        DB::table('coletas')->where('id', $id)->update(['status' => 'Aguardando Entrega']);
    }
    else {
        DB::table('coletas')->where('id', $id)->update(['status' => 'Finalizado']);
    }

    return redirect()->route('dashboard');
});

require __DIR__.'/auth.php';
