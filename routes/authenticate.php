 <?php
 Route::get('/' , 'LoginController@showLoginForm');
 Route::get('/painel', 'AdminController@dashboard')->name('painel');
 Route::post('/', 'LoginController@login')->name('painel');
 
 