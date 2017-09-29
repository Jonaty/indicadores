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
});
*/
Route::get('/home/alumno', 'AuthController@homeAlumno')->name('homeAlumno');

Route::get('/salir/alumno', 'AuthController@salirAlumno')->name('salirAlumno');

Route::get('/', 'AuthController@login')->name('login');

Route::post('/datos', 'AuthController@datosLogin')->name('datosLogin');

Route::get('/registro', 'AuthController@registro')->name('registro');

Route::post('/registro/datos', 'AuthController@datosRegistro')->name('datosRegistro');

/*Rutas del docente*/

Route::get('/home/docente', 'AuthDocenteController@homeDocente')->name('homeDocente');

Route::get('/salir/docente', 'AuthDocenteController@salirDocente')->name('salirDocente');

Route::get('/login/docente', 'AuthDocenteController@loginDocente')->name('loginDocente');

Route::post('/datos/login/docente', 'AuthDocenteController@datosLoginDocente')->name('datosLoginDocente');

Route::get('/registro/docente', 'AuthDocenteController@registroDocente')->name('registroDocente');

Route::post('/datos/registro/docente', 'AuthDocenteController@datosRegistroDocente')->name('datosRegistroDocente');

/*Borrar*/
Route::get('/asignar_calificacion/docente', 'AuthDocenteController@asignarCalificacion')->name('asignarCalificacion');

Route::get('/asignar_alumno_materias/docente', 'AuthDocenteController@asignarAlumnoMaterias')->name('asignarAlumnoMaterias');

Route::get('/asignar_materias/{id}', 'AuthDocenteController@asignarMateriasForm')->name('asignarMateriasForm');

Route::post('/datos/asignar_materias/{id}', 'AuthDocenteController@datosAsignarMaterias')->name('datosAsignarMaterias');

Route::put('datos/asignar_calificacion/docente/{id}', 'AuthDocenteController@datosAsignarCalificacion')->name('datosAsignarCalificacion');

Route::get('/ver_materias/docente/{id}', 'AuthDocenteController@verMateriasAlumno')->name('verMateriasAlumno');

Route::get('/calificacion_materia/{id}', 'AuthDocenteController@calificacionMateriaForm')->name('calificacionMateriaForm');

/*Rutas del administrador*/

Route::get('/login/admin', 'AdminController@loginAdmin')->name('loginAdmin');

Route::get('/home/admin', 'AdminController@homeAdmin')->name('homeAdmin');

Route::get('/admin/salir', 'AdminController@salirAdmin')->name('salirAdmin');

Route::post('/login/datos', 'AdminController@datosLoginAdmin')->name('datosLoginAdmin');

Route::get('/admin/registrar/materias', 'AdminController@registrarMaterias')->name('registrarMaterias');

Route::post('/admin/datos/registrar/materias', 'AdminController@datosRegistrarMaterias')->name('datosRegistrarMaterias');