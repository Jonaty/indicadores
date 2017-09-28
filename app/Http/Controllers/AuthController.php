<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Auth;

class AuthController extends Controller
{
   
    public function __construct()
    {
       $this->middleware('auth', ['except' => ['login', 'datosLogin', 'registro', 'datosRegistro']]);
    }
	public function homeAlumno()
	{
		return view('alumno.homeAlumno');
	}

    public function login()
    {
    	return view('alumno.login');
    }

    public function datosLogin(Request $request)
    {
    	$no_cuenta = $request->input('no_cuenta');
    	$password = $request->input('password');

    	if (Auth::attempt(['no_cuenta' => $no_cuenta, 'password' => $password, 'activo' => 1])) 
    		{
    			return redirect()->route('homeAlumno')->with('info', 'Bienvenido');
    		}
    		else
    		{
    			return redirect()->back()->with('info2', 'Datos incorrectos');    	
    		}
    }

    public function registro()
    {
    	return view('alumno.registro');
    }

    public function datosRegistro(Request $request)
    {
    	User::create([
        'nom_user' => $request->input('nom_user'),
        'no_cuenta' => $request->input('no_cuenta'),
        'password' => bcrypt($request->input('password')),
        'semestre' => $request->input('semestre'),
        'carrera' => $request->input('carrera'),
        'facultad' => $request->input('facultad'),
        'campus' => $request->input('campus'),
        'activo' => $request->input('activo'),
        'rol' => $request->input('rol'),
    	]);
      
      return redirect()->route('login')->with('info', 'Registro Exitoso');

    }

    public function salirAlumno()
    {
    	Auth::logout();

    	return redirect()->route('login');
    }
}
