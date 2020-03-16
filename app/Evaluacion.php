<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;


class Evaluacion extends Model
{
     protected static function get_evaluacion($idTabla){

    	$list  = DB::select('exec TablaMaestra_Combo ?', array($idTabla));

    	return $list;
    
    }
}
