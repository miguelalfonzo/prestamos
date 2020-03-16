
        <div class=" " role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left" style="margin-top: -10px">

                <h6>Nueva Solicitud</h6>
              </div>
                
                <div class="title_left" style="float: right;margin-top: -15px">
             
                
                <button class="btn btn-success" id="btnGuardarSol"style="padding:0 5px;float: right"><i class="fa fa-save" style="margin-right: 5px"></i>Guardar</button>
                
                
             
              </div>
              
            </div>

            
            <div class="clearfix" ></div>
            

            <div class="row" style="margin-top: -36px">
            	<div class="col-lg-4 col-md-12 " >
                <div class="x_panel">
                  <div class="x_title">
                    <h6 style="margin: 0">Informacion General del Solicitante</h6>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    

					          <div class="form-group row resize-margin-top">
                        <label class="col-sm-3 col-form-label">Dni</label>

                        <div class="col-sm-9">
                          
                          <div class="input-group">
                            <input type="number" class="form-control resize-input resize-font" id="SolDni" maxlength="8" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                            <span class="input-group-btn">
                                              <button type="button " class="btn btn-dark resize-input"id="btnConsultar" style="padding: 0 6px"><i class="fa fa-search"></i></button>
                            </span>
                          </div>
                          
                        </div>
                         
                      </div>
                      <div class="form-group row" style="margin-top:-17px">
                        <label class="control-label col-md-3 col-sm-3 ">A.Paterno</label>
                        <div class="col-md-9 col-sm-9 ">
                          <input type="text" class="form-control resize-input resize-font" id="SolApePat" readonly >
                        </div>
                      </div>

                      <div class="form-group row resize-margin-top">
                        <label class="control-label col-md-3 col-sm-3 ">A.Materno</label>
                        <div class="col-md-9 col-sm-9 ">
                          <input type="text" class="form-control resize-input resize-font" id="SolApeMat" readonly>
                        </div>
                      </div>
                      <div class="form-group row resize-margin-top">
                        <label class="control-label col-md-3 col-sm-3 ">Nombres </label>
                        <div class="col-md-9 col-sm-9 ">
                          <input type="text" class="form-control resize-input resize-font" id="SolNombres" readonly>
                        </div>
                      </div>

                      <div class="form-group row resize-margin-top">
                        <label class="control-label col-md-3 col-sm-3 ">F.Nacimiento</label>
                        <div class="col-md-9 col-sm-9 ">
                          <input type="text" class="form-control resize-input resize-font" id="SolFeNac" readonly>
                        </div>
                      </div>

                      <div class="form-group row resize-margin-top">
                        <label class="control-label col-md-3 col-sm-3 ">Email</label>
                        <div class="col-md-9 col-sm-9 ">
                          <input type="text" class="form-control resize-input resize-font" id="SolEmail" readonly>
                        </div>
                      </div>
                      
                      <div class="form-group row resize-margin-top">
                        <label class="control-label col-md-3 col-sm-3 ">Intendencia</label>
                        <div class="col-md-9 col-sm-9 ">
                          <input type="text" class="form-control resize-input resize-font" id="cmbIntendencias" readonly>
                        </div>
                      </div>

                      {{-- <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Intendencia</label>
                        <div class="col-md-9 col-sm-9 ">
                          <select class="form-control resize-input" id="cmbIntendencias">
                            @foreach($intendencias as $list)
                            <option value="{{$list->Valor}}">{{$list->Descripcion}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div> --}}
                      <div class="form-group row resize-margin-top">
                        <label class="control-label col-md-3 col-sm-3 ">Banco</label>
                        <div class="col-md-9 col-sm-9 ">
                          <input type="text" class="form-control resize-input resize-font" id="cmbBancos" readonly>
                        </div>
                      </div>

                      {{-- <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Banco</label>
                        <div class="col-md-9 col-sm-9 ">
                          <select class="form-control" id="cmbBancos">
                            @foreach($bancos as $list)
                            <option value="{{$list->Valor}}">{{$list->Descripcion}}</option>
                            @endforeach
                           
                          </select>
                        </div>
                      </div> --}}
                      
                      <div class="form-group row resize-margin-top">
                        <label class="control-label col-md-3 col-sm-3 ">Cuenta</label>
                        <div class="col-md-9 col-sm-9 ">
                          <input type="text" class="form-control resize-input resize-font" id="cmbCuentas" readonly>
                        </div>
                      </div>

                      {{-- <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Cuenta</label>
                        <div class="col-md-9 col-sm-9 ">
                          <select class="form-control" id="cmbCuentas">
                            @foreach($cuentas as $list)
                            <option value="{{$list->Valor}}">{{$list->Descripcion}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div> --}}
					
					          <div class="form-group row resize-margin-top">
                        <label class="control-label col-md-3 col-sm-3 ">N.Cuenta </label>
                        <div class="col-md-9 col-sm-9 ">
                          <input type="text" class="form-control resize-input resize-font" id="SolNumCuenta" readonly>
                        </div>
                      </div>

                      
                      <div class="form-group row resize-margin-top">
                        <label class="control-label col-md-3 col-sm-3 ">Dpto</label>
                        <div class="col-md-9 col-sm-9 ">
                          {{-- <select class="form-control resize-font" id="cmbDepartamento" style="height:30px">
                            <option value="">seleccione departamento</option>
                            @foreach($departamentos as $list)
                            <option value="{{$list->IdUbigeo}}">{{$list->DPTO}}</option>
                            @endforeach
                          </select> --}}
                          <input type="text" class="form-control resize-input resize-font" id="SolDepartamento" readonly>

                        </div>
                      </div>

                      <div class="form-group row resize-margin-top">
                        <label class="control-label col-md-3 col-sm-3 ">Provincia</label>
                        <div class="col-md-9 col-sm-9 ">
                          {{-- <select class="form-control resize-font" id="cmbProvincia" style="height:30px">
                            <option value="">seleccione provincia</option>
                           
                          </select> --}}
                          <input type="text" class="form-control resize-input resize-font" id="SolProvincia" readonly>
                        </div>
                      </div>

                      <div class="form-group row resize-margin-top">
                        <label class="control-label col-md-3 col-sm-3 ">Distrito</label>
                        <div class="col-md-9 col-sm-9 ">
                          {{-- <select class="form-control resize-font" id="cmbDistrito" style="height:30px">
                            <option value="">seleccione distrito</option>
                          
                          </select> --}}
                          <input type="text" class="form-control resize-input resize-font" id="SolDistrito" readonly>
                        </div>
                      </div>


                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h6 style="margin: 0">Informacion General del Prestamo</h6>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    

                      
					           <div class="form-group resize-margin-top row col-md-12 col-sm-12">
                        {{-- <label class="control-label col-md-3 col-sm-3 ">Tipo Prestamo </label> --}}
                        <div class="col-md-12 col-sm-12 ">
                          <select class="chosen  resize-font" id="cmbTipoPrestamo" style="height:30px">
                            <option value="">tipo de prestamo</option>
                            @foreach($prestamos as $list)
                            <option value="{{$list->IdTipoPrestamo}}">{{$list->TipoPrestamo}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
					
					         <div class="form-group row col-lg-6 col-md-12 col-sm-12">
                        {{-- <label class="control-label col-md-3 col-sm-3 ">Mes</label> --}}
                        <div class="col-md-12 col-sm-12 ">
                          <select class="chosen resize-margin-top resize-font" id="cmbMes" style="height:30px">
                            <?php
                              $mes_actual = date("n");
                            ?>
                            @foreach($meses as $list)

                              @if($list->IdColumna==$mes_actual)

                                  <option value="{{$list->Valor}}">{{$list->Descripcion}}</option>

                              @endif
                            
                            @endforeach
                          </select>
                        </div>
                      </div>
                      

                       <div class="form-group row col-lg-6 col-md-12 col-sm-12">
                        {{-- <label class="control-label col-md-3 col-sm-3 ">Año </label> --}}

                        <div class="col-md-12 col-sm-12 " >
                          <select class="chosen resize-margin-top" id="cmbAnio" style="height:30px">
                            <option>2020</option>
                          </select>
                        </div>
                      </div>


                  {{-- row de monto --}}
					           <div class="form-group row col-lg-12 col-md-12 col-sm-12" style="margin-left:-10px">
                        {{-- <label class="control-label col-md-2 col-sm-2 " style="margin-left:-5px">Monto</label> --}}
                        {{-- <div class="col-md-3 col-sm-3 ">
                          <input type="text" class="form-control" id="SolMontoSol">
                        </div> --}}
                        
                        <div class="col-sm-5">
                          
                          <div class="input-group">
                            <input type="text" class="form-control resize-input" id="SolMontoSol" data-toggle="tooltip" data-placement="bottom" title="monto solicitud" style="font-size: 12px">
                            <span class="input-group-btn">
                                              <button type="button" class="btn btn-dark resize-input"id="btnRptaMonto" style="padding:0 5px"><i class="fa fa-fax" style="font-size: 13px"></i></button>
                            </span>
                          </div>
                        </div>


                        <div class="col-md-7 col-sm-7 ">
                          <input type="text" class="form-control resize-input text-success" id="rptaMontoSol" disabled style="font-size: 11.5px;">
                        </div>
                      </div>



                      <div class="form-group row col-lg-12 col-md-12 col-sm-12">
                        {{-- <label class="control-label col-md-2 col-sm-2 " style="margin-left:-5px">Cuotas</label> --}}
                        {{-- <div class="col-md-3 col-sm-3 ">
                          <input type="text" class="form-control" id="SolNumCuotas">
                        </div> --}}

                        <div class="col-sm-5">
                          
                          <div class="input-group">
                            <input type="text" class="form-control resize-input" id="SolNumCuotas" data-toggle="tooltip" data-placement="bottom" title="numero cuotas" style="font-size: 12px">
                            <span class="input-group-btn">
                                              <button type="button" class="btn btn-dark resize-input"id="btnRptaCuotas" style="padding:0 5px"><i class="fa fa-fax" style="font-size: 13px"></i></button>
                            </span>
                          </div>
                        </div>

                        <div class="col-md-7 col-sm-7 ">
                          <input type="text" class="form-control resize-input text-success"  id="rptaCuotasSol" disabled style="font-size: 11.5px;">
                        </div>
                      </div>
                      

                    {{-- fin de los montos --}}
    

                      <div class="form-group row col-md-12 col-sm-12" style="margin-top:-10px">
                        {{-- <label class="control-label col-md-3 col-sm-3 " >Evaluacion</label> --}}
                        <div class="col-md-12 col-sm-12 ">
                          <select class="chosen resize-font resize-margin-top" id="SolResultado" style="height:30px">
                            <option value="">resultado evaluacion</option>
                            @foreach($evaluacion as $list)
                            <option value="{{$list->Valor}}">{{$list->Descripcion}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
						
                    <div class="form-group row col-md-12 col-sm-12">
                        {{-- <label class="control-label col-md-3 col-sm-3 ">Moneda </label> --}}
                        <div class="col-md-12 col-sm-12 ">
                          <select class="chosen resize-font resize-margin-top" id="cmbTipoMoneda" style="height:30px" data-toggle="tooltip" data-placement="bottom" title="moneda">
                            @foreach($monedas as $list)
                            <option value="{{$list->Valor}}">{{$list->Descripcion}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
					 <div class="form-group row col-md-12 col-sm-12">
                        {{-- <label class="control-label col-md-2 col-sm-2 ">F.Obs </label> --}}
                        <div class="col-md-12 col-sm-12 ">
                          <input type="date" class="form-control resize-margin-top" id="SolFeObs" style="height:30px" data-toggle="tooltip" data-placement="bottom" title="fecha observacion">
                        </div>
                      </div>
					
					 <div class="form-group row col-md-12 col-sm-12" >
                        {{-- <label class="control-label col-md-3 col-sm-3 "> Estado </label> --}}
                        <div class="col-md-12 col-sm-12 ">
                          <select class="chosen resize-font resize-margin-top" id="SolEstado" style="height:30px" data-toggle="tooltip" data-placement="bottom" title="estado">
                            <option>ACTIVO</option>
                            <option>INACTIVO</option>
                          </select>
                        </div>
                      </div>
					
				

					  <div class="form-group row col-12">
                        <label class="control-label col-md-3 col-sm-3 " style="margin-left:-5px">Observacion </label>
                        <div class="col-md-12 col-sm-12 " style="margin-left:-5px;padding-right: 0; ">
                          <textarea  id="SolObservacion" class="form-control" style="height: 65px;resize: none;font-size: 13px"></textarea>
                        </div>
                      </div>
          
                  </div>
                </div>

              </div>
				


				  <div class="col-lg-4 col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h6 style="margin: 0">Requisitos</h6>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    
					  
					           <div class="form-group row">
                          <div class="checkbox" style="margin-right: 5px;">
                            <label>
                              <input type="checkbox" class="flat" id="chckRequisitos"> Compromiso Descuento
                            </label>
                          </div>
                          <div class="checkbox" style="margin-right: 5px;">
                            <label>
                              <input type="checkbox" class="flat"> Pagare-Fianza
                            </label>
                          </div>
                         <div class="checkbox">
                            <label>
                              <input type="checkbox" class="flat"> Sustento/DDJJ
                            </label>
                          </div>
                          
                        </div>

					           <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">F.Recepcion </label>
                        <div class="col-md-9 col-sm-9 ">
                          <input type="date" class="form-control resize-font resize-margin-top" id="SolFeRecepcion">
                        </div>
                      </div>

					             <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">F.Giro </label>
                        <div class="col-md-9 col-sm-9 ">
                          <input type="date" class="form-control resize-font resize-margin-top" id="SolFeGiro">
                        </div>
                      </div>
                      
                      <div class="x_title" style="margin-top:20px">
                        <h6 style="margin: 0">Cronograma de Pago - Cuota Doble</h6>
                    
                        <div class="clearfix"></div>
                      </div>
                      
                      <div class="form-group row" style="margin:0px auto;">
                          <div class="checkbox" style="margin-right:100px">
                            <label >
                              <input type="checkbox" class="flat" id="chckCronograma">&nbsp Julio
                            </label>
                          </div>
                          <div class="checkbox" >
                            <label>
                              <input type="checkbox" class="flat" id="chckCronograma"> &nbsp Diciembre
                            </label>
                          </div>
  
                        </div>

                      {{-- <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Departamento</label>
                        <div class="col-md-9 col-sm-9 ">
                          <select class="form-control" id="cmbDepartamento">
                            <option value="">seleccione departamento</option>
                            @foreach($departamentos as $list)
                            <option value="{{$list->IdUbigeo}}">{{$list->DPTO}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Provincia</label>
                        <div class="col-md-9 col-sm-9 ">
                          <select class="form-control" id="cmbProvincia">
                            <option value="">seleccione provincia</option>
                           
                          </select>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label class="control-label col-md-3 col-sm-3 ">Distrito</label>
                        <div class="col-md-9 col-sm-9 ">
                          <select class="form-control" id="cmbDistrito">
                            <option value="">seleccione distrito</option>
                          
                          </select>
                        </div>
                      </div> --}}
					           
                     
                     <div class="x_title" style="margin-top: 10px">
                        <h6 class="col-md-9 col-sm-9" style="margin-left:-7px "> Fondo Intangible</h6>
                        <div class="form-group row" >
                            <div class="col-md-3 col-sm-3 ">
                                <div class="">
                                  <label>
                                    <input type="checkbox" class="js-switch" id="chckIntangible"/> 
                                    
                                  </label>
                                </div>
                            </div>
                          </div>
                          
                        <div class="clearfix" style="margin-top: -30px"></div>
                      </div>

              

                    <div class="form-group row" >

                         <div class="radio col-md-1 col-sm-1">
                            <label>
                              <input type="radio" class="flat" checked name="iCheck" id="rdioCuota" disabled>
                            </label>
                            </div>

                          <label class="control-label col-md-3 col-sm-3 ">Cuota </label>
                            <div class="col-md-8 col-sm-8 ">
                                <input type="text" class="form-control resize-input" id="SolCuota" readonly>
                            </div>
                        </div>

                      <div class="form-group row resize-margin-top">

                           <div class="radio col-md-1 col-sm-1">
                            <label>
                              <input type="radio" class="flat " name="iCheck" id="rdioPorcentaje" disabled>
                            </label>
                            </div>

                          <label class=" control-label col-md-3 col-sm-3 ">Porcentaje </label>
                            <div class="col-md-8 col-sm-8 ">
                                <input type="text" class="form-control resize-input " id="SolPorcentaje" readonly> 
                            </div>
                        </div>
                        

                        
                        <div class="form-group row " style="margin-top:25px">

                          <button class="btn btn-warning" id="btnGarante" data-toggle="modal" data-target="#modal-garante"style="padding:0 5px;float: right"><i class="fa fa-child" style="margin-right: 5px"></i>Garante</button>

                          <span id="rptaGarantes" class="text-danger">no hay garantes</span>
                        </div>



                    </div>
                  </div>
                </div>


            </div>

          </div>
        </div>
        <!-- /page content -->

 @include('solicitud.modals.garante')

