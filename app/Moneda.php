<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Moneda extends Model
{
    protected static function get_moneda($idTabla){

    	$list  = DB::select('exec TablaMaestra_Combo ?', array($idTabla));

    	return $list;
    
    }
}
