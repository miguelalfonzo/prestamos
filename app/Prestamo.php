<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Prestamo extends Model
{
   protected static function get_prestamo($activo){

    	$list  = DB::select('exec TipoPrestamo_List ?', array($activo));

    	return $list;
    
    }

    protected static function get_cab_monto_tipo_prestamo($monto,$idTipoPrestamo){

    	$list  = DB::select('exec TipoPrestamoCab_GetByMonto ?,?', array($idTipoPrestamo,$monto));

    	return $list;
    
    }

    protected static function get_det_monto_tipo_prestamo($cuotas,$idTipoPrestamo){

    	$list  = DB::select('exec TipoPrestamoDet_GetByCuota ?,?', array($idTipoPrestamo,$cuotas));

    	return $list;
    
    }
    
}
