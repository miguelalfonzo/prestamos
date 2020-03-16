<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Mes extends Model
{
    protected static function get_mes($idTabla){

    	$list  = DB::select('exec TablaMaestra_Combo ?', array($idTabla));

    	return $list;
    
    }
}
