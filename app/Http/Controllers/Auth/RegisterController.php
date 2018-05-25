<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Alumno;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use DB;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
           // 'name' => 'required|string|max:255',
           // 'email' => 'required|string|email|max:255|unique:users',
           // 'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {   
        $mensaje1="Se ha registrado con éxito ";
        $mensaje2="No se ha podido completar tu registro, por favor dirigete al departamento de division de estudios";

       // $alumno = DB::table('alumnos')->where('no_control', $data['no_control'])->get()->first();
        $alumno = Alumno::where('no_control','=',$data['no_control'])->where('registrado','=','N')->get()->first(); 


        if ($alumno!=""){

        //echo $alumno;

        User::create([
            'name' => $data['nombre'],
            'email' => $data['email'],
            'rol' => 'alum',
            'password' => bcrypt($data['password']),
            
        ]);

        $actualizar= Alumno::find($alumno->id);
        $actualizar->registrado='S';
        $actualizar->save();

            return $mensaje1;
        }
        else{
            return $mensaje2;
        }


    }
}
