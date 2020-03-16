<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Distrito extends Model
{
    protected static function get_distrito($idProvincia){

    	$list  = DB::select('exec Ubigeo_ComboDistrito ?', array($idProvincia));

    	return $list;
    
    }
}
