<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataInicio;

class InicioController extends Controller
{
    public function index(){

        $data=DataInicio::all();

        $title='Controlador Index prueba';
        return view('welcome', ['title'=>$title, 'data'=>$data]);
    }

    public function guardar(Request $request){
        //$data_inicio=new DataInicio;
        // $data_inicio->name=$request->input('name');
        // $data_inicio->password=$request->input('password');
        // $data_inicio->save();

        // $data_inicio = new DataInicio($request->input());
        // $data_inicio->save();

        DataInicio::create($request->all());

        return 'GUARDADO EXITOSO';
    }
}
