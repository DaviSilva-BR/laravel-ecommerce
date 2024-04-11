<?php

use App\Http\Controllers\admin\ProdutoController;
use App\Http\Controllers\site\SiteController;
use Illuminate\Support\Facades\Route;


Route::get('/', [SiteController::class, 'index'])->name('site.index');
Route::get('/categoria', [SiteController::class, 'categoria'])->name('site.categoria');

Route::get('/admin/cadastrar', [ProdutoController::class, 'create'])->name('admin.produto.cadastrar');