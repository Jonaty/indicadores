<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Materia;

class AdminController extends Controller
{

	function __construct()
	{
		return $this->middleware('auth', ['except' => ['loginAdmin', 'datosLoginAdmin']]);
	}

    public function loginAdmin()
    {
    	return view('admin.login');
    }

    public function homeAdmin()
    {
    	return view('admin.homeAdmin');
    }

    public function datosLoginAdmin(Request $request)
    {
    	$no_cuenta = $request->input('no_cuenta');
    	$password = $request->input('password');

    	if (Auth::attempt(['no_cuenta' => $no_cuenta, 'password' => $password, 'activo' => 1, 'rol' => 0])) 
    	{
    		return redirect()->route('homeAdmin')->with('info', 'Bienvenido administrador');
    	}
    	else
    	{
    		return redirect()->back()->with('info2', 'Datos incorrectos');    	
    	}
    }

    public function salirAdmin()
    {
    	Auth::logout();

    	return redirect()->route('loginAdmin');
    }

    /*Paginas del administrador*/

    public function registrarMaterias()
    {
    	return view('admin.registrarMaterias');
    }

    public function datosRegistrarMaterias(Request $request)
    {
    	Materia::create([
    		'nom_materia' => $request->input('nom_materia'),
    		'semestre' => $request->input('semestre'),
    		'carrera' => $request->input('carrera')
    	]);

    	return redirect()->route('registrarMaterias')->with('info', 'Materia creada correctamente');
    }

}
