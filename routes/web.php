<?php

/*Route::get('/admin/registro', function()
{
	$admin = new App\User;
	$admin->nom_user = 'Alejandro García';
	$admin->no_cuenta = '123456';
	$admin->password = bcrypt('panke123');
	$admin->semestre = 0;
	$admin->carrera = 'no';
	$admin->facultad = 'no';
	$admin->campus = 'no';
	$admin->activo = 1;
	$admin->rol = 0;
	$admin->save();
});*/

Route::get('/', 'AuthController@login')->name('login');

Route::get('/registro', 'AuthController@registro')->name('registro');


/*Rutas del administrador*/

Route::get('/login/admin', 'AdminController@loginAdmin')->name('loginAdmin');

Route::get('/home/admin', 'AdminController@homeAdmin')->name('homeAdmin');

Route::get('/admin/salir', 'AdminController@salirAdmin')->name('salirAdmin');

Route::post('/login/datos', 'AdminController@datosLoginAdmin')->name('datosLoginAdmin');