<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\User;

use App\Materia;

class AuthDocenteController extends Controller
{

	public function __construct()
    {
       $this->middleware('auth', ['except' => ['loginDocente', 'datosLoginDocente', 'registroDocente', 'datosRegistroDocente']]);
    }

	public function homeDocente()
	{
		return view('docente.homeDocente');
	}

    public function loginDocente()
    {
    	return view('docente.login');
    }

    public function datosLoginDocente(Request $request)
    {
    	$no_cuenta = $request->input('no_cuenta');
    	$password = $request->input('password');

    	if (Auth::attempt(['no_cuenta' => $no_cuenta, 'password' => $password, 'activo' => 1])) 
    		{
    			return redirect()->route('homeDocente')->with('info', 'Bienvenido');
    		}
    		else
    		{
    			return redirect()->back()->with('info2', 'Datos incorrectos');    	
    		}
    }

    public function registroDocente()
    {
    	return view('docente.registro');
    }

    public function datosRegistroDocente(Request $request)
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

    	return redirect()->route('loginDocente')->with('info', 'Registro Exitoso');
    }

    public function salirDocente()
    {
    	Auth::logout();

    	return redirect()->route('loginDocente');
    }

    public function asignarAlumnoMaterias()
    {
        $alumnos = User::where('rol', 2)->get();

        return view('docente.asignarAlumnoMaterias', compact('alumnos'));
    }

    public function asignarMateriasForm($id)
    {
        $alumno = User::findOrFail($id);
        $materias = Materia::where('semestre', Auth::user()->semestre)->where('carrera', Auth::user()->carrera)->orderBy('nom_materia', 'ASC')->pluck('nom_materia', 'id');

        return view('docente.asignarMateriasForm', compact('alumno', 'materias'));
    }

    public function datosAsignarMaterias(Request $request, $id)
    {
        $alumno = User::find($id);
        $alumno->materias()->sync($request->get('materias', []));

        return redirect()->route('asignarAlumnoMaterias')->with('info', 'Materias Asignadas');
    }

    public function verMateriasAlumno($id)
    {
        $alumno = User::findOrFail($id);

        return view('docente.verMateriasAlumno', compact('alumno'));
    }

    public function calificacionMateriaForm($id)
    {
        $materia = Materia::findOrFail($id);

        return view('docente.calificacionMateriaForm', compact('materia'));
    }

  /*  public function asignarCalificacion()
    {
        $materias = Materia::where('semestre', Auth::user()->semestre)->where('carrera', Auth::user()->carrera)->get();

        return view('docente.asignarCalificacion', compact('materias'));
    }*/

    public function datosAsignarCalificacion(Request $request, $id)
    {
        /*$id_materia = $request->input('id_materia');*/
        $p1 = $request->input('p1');
        $p2 = $request->input('p2');
        $p3 = $request->input('p3');
        
        $suma = $p1 + $p2 +$p3;
        $final = $suma / 3;

        Materia::where('id', $id)->update(['p1' => $p1, 'p2' => $p2, 'p3' => $p3, 'final' => $final]);

        return redirect()->route('asignarAlumnoMaterias')->with('info', 'Calificación asignada');
    }
}
