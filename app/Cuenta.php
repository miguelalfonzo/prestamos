<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;


class Cuenta extends Model
{
    protected static function get_cuenta($idTabla){

    	$list  = DB::select('exec TablaMaestra_Combo ?', array($idTabla));

    	return $list;
    
    }
}
