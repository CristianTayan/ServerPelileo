<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\web_deudas;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class WEB_DEUDASController extends Controller
{

    public function getDeudas()
    {
        $webdeudas = web_deudas::all();
        $data = $webdeudas->toArray();

        $response = [
            'success' => true,
            'data' => $data,
            'message' => 'OK.'
        ];

        return response()->json($response, 200);
    }

    public function getDeudaById($id)
    {

        $webdeuda = web_deudas::where('estado', 'PENDIENTES')
        ->where('ciu',$id)
        ->orderBy('anio')
        ->orWhere('estado', 'PENDIENTES')
        ->where('cedula_ruc', $id)
        ->orderBy('anio');


        $data = $webdeuda->get();
        $error = 'no encontrado';


        if (count($data)==0) {
            $response = $error;
            return response()->json($response, 404);
        }

        $response = $data;

        return response()->json($response, 200);
    }

    public function totalImpuesto($id)
    {
        $valor = DB::table('web_deudas')->count()->where('estado', 'PENDIENTES')
        ->where('ciu',$id)
        ->orderBy('anio')
        ->orWhere('estado', 'PENDIENTES')
        ->where('cedula_ruc', $id)
        ->orderBy('anio');;
        $response =$valor;

        return response()->json($response, 200);
    }
}
