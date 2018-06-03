<?php


 Auth::routes();

 Route::get('/painel/usuarios', 'AdminController@ListUsers')->name('usuarios');
 Route::get('/painel/cadastrar', 'AdminController@CreateUsers')->name('cadastrar');
 Route::post('/painel/cadastrar', 'AdminController@create')->name('cadastrar');
 Route::get('/painel/alterar', 'AdminController@UsersUpdate')->name('alterar');
 Route::get('/painel/deletar', 'AdminController@deletar')->name('deletar');

 /* List stock */

 Route::get('/painel/produto_estoques','Product\ProductController@ShowProduct')->name('produto_estoques');
 Route::post('/painel/produto_estoques','Product\ProductController@getProdutos')->name('produto_estoques');