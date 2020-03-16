<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;


class Provincia extends Model
{
    protected static function get_provincia($idDepartamento){

    	$list  = DB::select('exec Ubigeo_ComboProvincia ?', array($idDepartamento));

    	return $list;
    
    }

    protected static function get_ubigeo($idUbigeo){

    	$list  = DB::select('SELECT * FROM Ubigeo where IdUbigeo = ?', array($idUbigeo));

    	return $list;
    
    }
}
