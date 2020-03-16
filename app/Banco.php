<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Banco extends Model
{
    protected static function get_banco($idTabla){

    	$list  = DB::select('exec TablaMaestra_Combo ?', array($idTabla));

    	return $list;
    
    }
}
