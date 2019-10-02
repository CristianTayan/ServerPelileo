<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class web_deudas extends Model
{
    protected $table = 'web_deudas';

    public $timestamps = false;

    protected $fillable = [
        'ESTADO',
        'NROEMISION',
        'CIU',
        'CEDULA_RUC',
        'NOMBRES',
        'IMP',
        'EMISION',
        'VAL_ABONOS',
        'INTERES',
        'COACTIVA',
        'RECARGO',
        'DESCUENTO',
        'IVA',
        'ANIO',
        'MES',
        'FEMI',
        'FOBL',
        'PLAN_COACTIVO',
        'ABONOS',
        'CLAVE',
        'DESCRIPCION',
        'IMPUESTO',
        'FACILIDADES'

    ];
}
