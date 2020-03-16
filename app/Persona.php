<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;


class Persona extends Model
{
    protected static function get_persona($dni){

    	$list  = DB::select('exec PersonaByDni ?', array($dni));

    	return $list;
    
    }
}
