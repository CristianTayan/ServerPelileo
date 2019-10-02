<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class emi01 extends Model
{
    protected $table = 'EMI01';
    protected $primaryKey = 'EMI01CODI';
    public $timestamps = false;
    protected $fillable = [
        'EMI01CODI',
        'GEN01CODI',
        'EMI01SERI',
        'EMI01CLAVE',
        'EMI01ANIO',
        'EMI01MES',
        'EMI01DIA',
        'EMI01FOBL',
        'EMI01FEMI',
        'EMI01NELI',
        'EMI01FELI',
        'EMI01LELI',
        'EMI01FEST',
        'EMI01FPAG', //FECHA PAGO
        'EMI01LPAG', //usuario TRANSFER
        'EMI01NPAG',
        'EMI01VTOT',
        'EMI01INTE',
        'EMI01DESC',
        'EMI01RECA',
        'EMI01EXO',
        'EMI01ESTA',// de E a R
        'EMI01TITU',
        'EMI01FCRE',
        'EMI01LCRE',
        'EMI01LMOD',
        'EMI01FMOD',
        'EMI01NCRE',
        'EMI01NROTIT',
        'EMI01PMER',
        'EMI01EVALO',
        'EMI01COA',
        'EMI01MERCA',
        'EMI01IVA',
        'EMI01DESCMERCA',
        'EMI01MSRI',
        'EMI01ISRI',
        'EMI01MOTBAJA',
        'EMI01MOTLANC',
        'EMI01PLANC',
        'EMI01RLANC',
        'EMI01CRENTA',
        'EMI01NROTRAS',
        'EMI01NROCOA',
        'EMI01TMP',
        'GEN01CODI_RECAUD',
        'EMI01CODIFPM',
        'EMI01VALORABONOS',
        'EMI01CODIANTERIOR',
        'EMI01FLEYANCIANO',
        'EMI01AVALUOSIMPUESTO',
        'EMI01DIRECCIONPREDIO',
        'EMI01PARROQUIA',
        'EMI01AVALUOTERRENO',
        'EMI01AVALUOEDIF',
        'TEXTOTMP',
        'EMI01N1',
        'EMI01N2',
        'EMI01N3',
        'EMI01N4',
        'EMI01N5',
        'EMI01C1',
        'EMI01C2',
        'EMI01C3',
        'EMI01C4',
        'EMI01C5',
        'EMI01C6',
        'EMI01FCOA',
        'FACELEPRO',
        'FACELEFEC',
        'FACELETDOC'

    ];
}
