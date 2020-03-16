<div id="modal-garante"class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
              <div class="modal-content">

                  <div class="modal-header">
                          <h4 class="modal-title text-success" id="myModalLabel"><i class="fa fa-user" style="margin-right: 5px"></i>Garante</h4>
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                    </div>
                    <div class="modal-body">
                          
                          <div class="form-group row resize-margin-top">
                        <label class="col-sm-3 col-form-label">ingrese DNI</label>

                        <div class="col-sm-9">
                          
                          <div class="input-group">
                            <input type="number" class="form-control resize-input resize-font" id="SolDniGarante" maxlength="8" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                            <span class="input-group-btn">
                                              <button type="button " class="btn btn-dark resize-input"id="btnConsultarGarante" style="padding: 0 6px"><i class="fa fa-search"></i></button>
                            </span>
                          </div>
                          
                        </div>
                         
                      </div>
                          <div class="card-box table-responsive">
                          <table id="table-garante" class="table" style="font-size: 11px">
                            <thead>
                              <tr>
                                <th>Codigo</th>
                                <th>Nombres y Apellidos</th>
                                <th>Doc</th>
                                <th>N°Doc</th>
                                <th>Edad</th>
                                <th>Fecha ing</th>
                                <th>Tipo planilla</th>
                                <th>Accion</th>

                              </tr>
                            </thead>

                            <tbody >
                                
                            </tbody>

                            
                          </table>
                        </div>

                    </div>
                    <div class="modal-footer">
                      
                      {{-- <button type="button" id="salvarGarantes" class="btn btn-primary">aceptar</button> --}}


                    </div>

              </div>
        </div>
</div>