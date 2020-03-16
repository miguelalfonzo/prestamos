@extends('layout')

@section('css')
	<!-- bootstrap-wysiwyg -->
    <link href="{{asset('vendors/google-code-prettify/bin/prettify.min.css')}}" rel="stylesheet">
    <!-- Select2 -->
    <link href="{{asset('vendors/select2/dist/css/select2.min.css')}}" rel="stylesheet">
    <!-- Switchery -->
    <link href="{{asset('vendors/switchery/dist/switchery.min.css')}}" rel="stylesheet">
    <!-- starrr -->
    <link href="{{asset('vendors/starrr/dist/starrr.css')}}" rel="stylesheet">
    <!-- alertify -->
    <link href="{{asset('vendors/alertify/css/alertify.css')}}" rel="stylesheet">
    <!-- DataTables -->
    <link href="{{asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">
    <!-- chosen -->
    
    <link href="{{asset('vendors/chosen/chosen-bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('vendors/chosen/chosen.css')}}" rel="stylesheet">


    <style>
      .resize-input{
        height:25px !important;
      }
      .resize-font{
        font-size: 13px !important;
      }

      .resize-margin-top{
      margin-top: -7px !important;
      }
      
     /*quitar decremento*/
     input[type=number]::-webkit-outer-spin-button,

      input[type=number]::-webkit-inner-spin-button {

      -webkit-appearance: none;

     margin: 0;

    }

    input[type=number] {

    -moz-appearance:textfield;

    }

    .chosen-container{
      width: 100% !important;
    }
    
    </style>
@endsection

@section('content')
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
 
      <div class="col-12  " style="margin-top: 23px">
                <div class="x_panel">
                 
                  <div class="x_content">

                    <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist" style="margin-top: -5px">
                      <li class="nav-item" >
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Solicitudes</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Registro Solicitud</a>
                      </li>
                      
                    </ul>
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        @include('solicitud.table_solicitud')
                      </div>
                      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        @include('solicitud.register_solicitud')
                      </div>
                     
                    </div>
                  </div>
                </div>
              </div>
           
			

            

          </div>
        </div>
        <!-- /page content -->



@endsection

@section('js')
    <!-- alertify -->
    <script src="{{asset('vendors/alertify/alertify.js')}}" ></script>
    
    

    <!-- bootstrap-wysiwyg -->
    <script src="{{asset('vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js')}}"></script>
    <script src="{{asset('vendors/jquery.hotkeys/jquery.hotkeys.js')}}"></script>
    <script src="{{asset('vendors/google-code-prettify/src/prettify.js')}}"></script>
    <!-- jQuery Tags Input -->
    <script src="{{asset('vendors/jquery.tagsinput/src/jquery.tagsinput.js')}}"></script>
    <!-- Switchery -->
    <script src="{{asset('vendors/switchery/dist/switchery.min.js')}}"></script>
    <!-- Select2 -->
    <script src="{{asset('vendors/select2/dist/js/select2.full.min.js')}}"></script>
    <!-- Parsley -->
    <script src="{{asset('vendors/parsleyjs/dist/parsley.min.js')}}"></script>
    <!-- Autosize -->
    <script src="{{asset('vendors/autosize/dist/autosize.min.js')}}"></script>
    <!-- jQuery autocomplete -->
    <script src="{{asset('vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js')}}"></script>

    <!-- Datatables -->
    <script src="{{asset('vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{asset('vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
    
    
    <!-- chosen -->
    <script src="{{asset('vendors/chosen/chosen.jquery.js')}}"></script>
    
    <!-- js de la vista -->
    <script src="{{asset('js/jsApp/solicitudes.js')}}"></script>
    <!-- starrr -->
    <script src="{{asset('vendors/starrr/dist/starrr.js')}}"></script>

    
    
@endsection