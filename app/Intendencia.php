<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Intendencia extends Model
{
    
    protected static function get_intendencia($idTabla){

    	$list  = DB::select('exec TablaMaestra_Combo ?', array($idTabla));

    	return $list;
    
    }
}
