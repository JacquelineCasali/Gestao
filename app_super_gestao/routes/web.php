<?php

use Illuminate\Support\Facades\Route;


Route::get('/','PrincipalController@principal')->name('site.index');
Route::get('/contato','ContatoController@contato')->name('site.contato');
Route::post('/contato','ContatoController@contato')->name('site.contato');

Route::get('/sobre-nos','SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/login',function(){return "Login";});

// rotas agrupas para acesso restrito 
Route::prefix('/app')->group(function(){
    Route::get('/clientes',function(){return "Clientes";});
    Route::get('/fornecedores','FornecedorController@index')->name('app.Fornecedores');
    Route::get('/produtos',function(){return "Produtos";});

});


Route::fallback(function(){
    echo 'A rota acessada não existe.<a href="/">Clique aqui</a> para ir para pagina inicial';
});



