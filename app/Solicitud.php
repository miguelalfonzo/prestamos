<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;


class Solicitud extends Model
{
    protected static function get_list(){

    	$list  = DB::select('exec Solicitud_List ?,?,?,?,?', array(0,'',0,0,1));

    	return $list;
    
    }
}
