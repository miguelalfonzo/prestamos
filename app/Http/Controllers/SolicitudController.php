<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Intendencia;
use App\Moneda;
use App\Banco;
use App\Cuenta;
use App\Mes;
use App\Evaluacion;
use App\Departamento;
use App\Provincia;
use App\Distrito;
use App\Persona;
use App\Prestamo;
use App\Solicitud;

class SolicitudController extends Controller
{
    public function index(){

    	 
    	 $monedas 	   = Moneda::get_moneda(8);
    	 $meses 	   = Mes::get_mes(1004);
    	 $evaluacion   = Evaluacion::get_evaluacion(31);
    	 $departamentos= Departamento::get_departamento();
    	 $prestamos    = Prestamo::get_prestamo(1);
         
    	 return view('solicitud.solicitudes',compact('monedas','meses','evaluacion','departamentos','prestamos'));
    }

    protected function get_intendencia(){

        $intendencias = Intendencia::get_intendencia(18);

         return response()->json($intendencias);
        

    }
    protected function get_cuenta(){

        $cuentas = Cuenta::get_cuenta(6);

         return response()->json($cuentas);
        

    }
    protected function get_banco(){

        $bancos = Banco::get_banco(16);

         return response()->json($bancos);
        

    }
    protected function get_provincia(Request $request){

    	$provincias = Provincia::get_provincia($request->departamento);

    	 return response()->json($provincias);
    	

    }

    protected function get_distrito(Request $request){

    	$distritos = Distrito::get_distrito($request->provincia);

    	 return response()->json($distritos);
    	

    }


    protected function get_ubigeo(Request $request){

         $ubigeo = Provincia::get_ubigeo($request->ubigeo);

         return response()->json($ubigeo);
        

    }

    protected function get_persona(Request $request){

    	$persona = Persona::get_persona($request->dni);

    	 return response()->json($persona);
    	

    }

    protected function get_cab_monto_tipo_prestamo(Request $request){

    	$prestamo_cab = Prestamo::get_cab_monto_tipo_prestamo($request->monto,$request->idTipoPrestamo);

    	 return response()->json($prestamo_cab);
    	

    }

    protected function get_det_monto_tipo_prestamo(Request $request){

    	$prestamo_det = Prestamo::get_det_monto_tipo_prestamo($request->cuotas,$request->idTipoPrestamo);

    	 return response()->json($prestamo_det);
    	

    }

    protected function get_solicitud(){

        $solicitud_list = Solicitud::get_list();

         return response()->json($solicitud_list);
        

    }


    


}
