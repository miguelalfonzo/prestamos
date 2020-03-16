<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Departamento extends Model
{
    protected static function get_departamento(){

    	$list  = DB::select('exec Ubigeo_ComboDepartamento');

    	return $list;
    
    }
}
