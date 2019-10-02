<?php

namespace App\Http\Controllers\API;

use App\emi01;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class emi01Controller extends Controller
{
    //Servicio rest para guardar datos de transaccion
    public function verificarTransaccion(Request $request, estadoTransaccione $estadoTransaccion){
        $input = $request->all();

        $validator = Validator::make($input, [
            'nroemision' => 'required',
            'transaccion' => 'required',
            'estado' => 'required',
            'codigo_bancario' => 'required',
            'valor' => 'required'
        ]);

        if ($validator->fails()) {
            $response = [
                'success' => false,
                'data' => 'Validation Error.',
                'message' => $validator->errors()
            ];
            return response()->json($response, 404);
        }

        $estadoTransaccion->nroemision = $input['nroemision'];
        $estadoTransaccion->transaccion = $input['transaccion'];
        $estadoTransaccion->estado = $input['estado'];
        $estadoTransaccion->codigo_bancario = $input['codigo_bancario'];
        $estadoTransaccion->valor = $input['valor'];
        $estadoTransaccion->save();

        $data = $estadoTransaccion->toArray();

        $response = [
            'success' => true,
            'data' => $data,
            'message' => 'ok'
        ];

        return response()->json($response, 200);
    }

    public function pago(Request $request, emi01 $pago)
    {
        $input = $request->all();

        $pago->EMI01FPAG = $input['emi01fpag'];
        $pago->EMI01LPAG = 'TRANSFER';
        $pago->EMI01ESTA = 'P';
        $pago->save();

        $data = $pago->toArray();

        $response =  $data;

        return response()->json($response, 200);

    }

    public function reverso(Request $request, emi01 $pago)
    {
        $input = $request->all();

        $pago->EMI01FPAG = '';
        $pago->EMI01LPAG = '';
        $pago->EMI01ESTA = 'E';
        $pago->save();

        $data = $pago->toArray();

        $response =  $data;

        return response()->json($response, 200);
    }
}
