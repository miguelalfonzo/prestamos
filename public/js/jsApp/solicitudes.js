tipo_prestamo = "";

// $('#cmbDepartamento').on('change', function() {

//     destroy_cmb();

//     llena_provincia(this.value);

// })


// function llena_provincia(departamento) {


//     $.ajax({
//         url: 'get_provincia',
//         type: "get",
//         dataType: 'json',
//         data: {
//             _token: '{{ csrf_token() }}',
//             departamento: departamento
//         },
//         before: function() {

//         },
//         success: function(response) {

//             for (var i = 0; i < response.length; i++) {
//                 $("#cmbProvincia").append("<option value=" +
//                     response[i].IdUbigeo + ">" + response[i].PROV + "</option>");
//             }
//         },
//         error: function(error) {

//             console.log(error);
//         }

//     })

// }


// $('#cmbProvincia').on('change', function() {

//     $("#cmbDistrito").empty();
//     $("#cmbDistrito").append("<option value=''>seleccione un distrito</option>");
//     llena_distrito(this.value);


// })


// function llena_distrito(provincia) {


//     $.ajax({
//         url: 'get_distrito',
//         type: "get",
//         dataType: 'json',
//         data: {
//             _token: '{{ csrf_token() }}',
//             provincia: provincia
//         },
//         before: function() {

//         },
//         success: function(response) {

//             for (var i = 0; i < response.length; i++) {
//                 $("#cmbDistrito").append("<option value=" +
//                     response[i].IdUbigeo + ">" + response[i].DIST + "</option>");
//             }
//         },
//         error: function(error) {

//             console.log(error);
//         }

//     })

// }

// function destroy_cmb() {

//     $("#cmbProvincia").empty();
//     $("#cmbProvincia").append("<option value=''>seleccione una provincia</option>");
//     $("#cmbDistrito").empty();
//     $("#cmbDistrito").append("<option value=''>seleccione un distrito</option>");

// }

$("#btnConsultar").on('click', function() {


    clear_inputs();

    dni = $("#SolDni").val();

    consulta_dni(dni);

})

function clear_inputs() {

    $("#SolApePat").val('');
    $("#SolApeMat").val('');
    $("#SolNombres").val('');
    $("#SolFeNac").val('');
    $("#SolEmail").val('');
    $("#SolNumCuenta").val('');
    $("#SolDepartamento").val('');
    $("#SolProvincia").val('');
    $("#SolDistrito").val('');
    $("#cmbIntendencias").val('');
    $("#cmbCuentas").val('');
    $("#cmbBancos").val('');
}

function consulta_dni(dni) {

    result = valida_dni(dni);

    if (result == 1) {

        $.ajax({
            url: 'get_persona',
            type: "get",
            dataType: 'json',
            data: {
                _token: '{{ csrf_token() }}',
                dni: dni
            },
            before: function() {

            },
            success: function(response) {

                if (response.length != 0) {
                    $("#SolApePat").val(response[0].ApellidoPaterno);
                    $("#SolApeMat").val(response[0].ApellidoMaterno);
                    $("#SolNombres").val(response[0].Nombres);
                    $("#SolFeNac").val(response[0].FechaNacimiento);
                    $("#SolEmail").val(response[0].EMail);
                    get_intendencia(response[0].IdIntendencia);
                    get_banco(response[0].IdBanco);
                    get_cuenta(response[0].IdTipoCuenta);
                    get_ubigeo(response[0].IdUbigeo);
                    $("#SolNumCuenta").val(response[0].NumeroCuenta);
                } else {


                    alertify.error('no se encontraron resultados');
                }

            },
            error: function(error) {

                console.log(error);
            }

        });

    }

}




function get_ubigeo(idUbigeo) {

    $.ajax({
        url: 'get_ubigeo',
        type: "get",
        dataType: 'json',
        data: {
            _token: '{{ csrf_token() }}',
            ubigeo: idUbigeo
        },
        before: function() {

        },
        success: function(response) {

            $("#SolDepartamento").val(response[0].DPTO);
            $("#SolProvincia").val(response[0].PROV);
            $("#SolDistrito").val(response[0].DIST);


        },
        error: function(error) {

            console.log(error);
        }

    })


}


function get_intendencia(idIntendencia) {

    $.ajax({
        url: 'get_intendencia',
        type: "get",
        dataType: 'json',
        data: {
            _token: '{{ csrf_token() }}'
        },
        before: function() {

        },
        success: function(response) {


            for (var i = 0; i < response.length; i++) {

                if (response[i].Valor == idIntendencia) {

                    $("#cmbIntendencias").val(response[i].Descripcion);

                }
            }

        },
        error: function(error) {

            console.log(error);
        }

    })


}

function get_cuenta(idCuenta) {

    $.ajax({
        url: 'get_cuenta',
        type: "get",
        dataType: 'json',
        data: {
            _token: '{{ csrf_token() }}'
        },
        before: function() {

        },
        success: function(response) {


            for (var i = 0; i < response.length; i++) {

                if (response[i].Valor == idCuenta) {
                    $("#cmbCuentas").val(response[i].Descripcion);

                }
            }

        },
        error: function(error) {

            console.log(error);
        }

    })


}

function get_banco(idBanco) {

    $.ajax({
        url: 'get_banco',
        type: "get",
        dataType: 'json',
        data: {
            _token: '{{ csrf_token() }}'
        },
        before: function() {

        },
        success: function(response) {


            for (var i = 0; i < response.length; i++) {

                if (response[i].Valor == idBanco) {
                    $("#cmbBancos").val(response[i].Descripcion);

                }
            }

        },
        error: function(error) {

            console.log(error);
        }

    })


}


$('#cmbTipoPrestamo').on('change', function() {


    tipo_prestamo = this.value;

})


$("#btnRptaMonto").on('click', function() {

    monto = $("#SolMontoSol").val();

    llena_cabecera_monto(tipo_prestamo, monto);

})

function llena_cabecera_monto(idTipoPrestamo, monto) {

    $('#rptaMontoSol').val('');


    $.ajax({
        url: 'get_cab_monto_tipo_prestamo',
        type: "get",
        dataType: 'json',
        data: {
            _token: '{{ csrf_token() }}',
            monto: monto,
            idTipoPrestamo: idTipoPrestamo
        },
        before: function() {

        },
        success: function(response) {

            if (response.length == 0) {

                $('#rptaMontoSol').val('no encontrado');

            } else {

                detail = "[" + response[0].MontoMin + "--" + response[0].MontoMax + "]";

                $('#rptaMontoSol').val(detail);
            }


        },
        error: function(error) {

            console.log(error);
        }

    })


}


-

$("#btnRptaCuotas").on('click', function() {

    cuotas = $("#SolNumCuotas").val();

    llena_detalle_monto(tipo_prestamo, cuotas);


})

function llena_detalle_monto(idTipoPrestamo, cuotas) {


    agrega_cero = "";

    $.ajax({
        url: 'get_det_monto_tipo_prestamo',
        type: "get",
        dataType: 'json',
        data: {
            _token: '{{ csrf_token() }}',
            cuotas: cuotas,
            idTipoPrestamo: idTipoPrestamo
        },
        before: function() {

        },
        success: function(response) {

            if (response.length == 0) {

                $('#rptaCuotasSol').val('no encontrado');

            } else {

                if (parseInt(response[0].TasaInteresM) < 2) {

                    agrega_cero = 0;
                }

                detail = "[" + response[0].CuotasMin + "--" + response[0].CuotasMax + "  interes " + agrega_cero + response[0].TasaInteresM + "%]";

                $('#rptaCuotasSol').val(detail);
            }


        },
        error: function(error) {

            console.log(error);
        }

    })


}


$("#btnConsultarGarante").on('click', function() {

    dni = $("#SolDniGarante").val();

    result = valida_dni(dni);

    if (result == 1) {

        $.ajax({
            url: 'get_persona',
            type: "get",
            dataType: 'json',
            data: {
                _token: '{{ csrf_token() }}',
                dni: dni
            },
            before: function() {

            },
            success: function(response) {

                if (response.length != 0) {

                    if ($("#fila" + response[0].IdPersona).length) {

                        alertify.error('ya existe garante');

                    } else {

                        if ($("#table-garante tr").length < 4) {


                            $("#table-garante tbody").append("<tr id='fila" + response[0].IdPersona + "'><td>" + response[0].Codigo + "</td><td>" + response[0].ApellidoPaterno + " " + response[0].ApellidoMaterno + " " + response[0].Nombres + "</td><td>" + response[0].TipoDocumento + "</td><td>" + response[0].NumDocIdentidad + "</td><td>" + calcula_edad(response[0].FechaNacimiento) + "</td><td>" + response[0].FechaIngreso + "</td><td>" + response[0].TipoPlanilla + "</td><td><button class='btn btn-danger'  onclick='delete_garante(" + response[0].IdPersona + ")'><i class='fa fa-trash'></i></button></td></tr>");

                            $("#rptaGarantes").removeClass("text-danger");
                            $("#rptaGarantes").addClass("text-success");

                            $("#rptaGarantes").text('garantes seleccionados');

                            $("#SolDniGarante").val("");

                        } else {

                            alertify.error('numero de garantes maximo');
                        }


                    }



                } else {


                    alertify.error('no se encontraron resultados');
                }

            },
            error: function(error) {

                console.log(error);
            }

        });

    }


})

function calcula_edad(fechaNacimiento) {

    var hoy = new Date();
    var cumpleanos = new Date(fechaNacimiento);
    var edad = hoy.getFullYear() - cumpleanos.getFullYear();
    var m = hoy.getMonth() - cumpleanos.getMonth();

    if (m < 0 || (m === 0 && hoy.getDate() < cumpleanos.getDate())) {
        edad--;
    }

    return edad;

}



function delete_garante(index) {

    $("#fila" + index).remove();

    if ($("#table-garante tbody tr").length == 0) {

        $("#rptaGarantes").removeClass("text-success");
        $("#rptaGarantes").addClass("text-danger");

        $("#rptaGarantes").text("no hay garantes");

    }


}

function valida_dni(dni) {

    if (dni.trim().length != 8) {

        alertify.error('dni invalido');
    } else {

        return 1;
    }
}

// $("#salvarGarantes").on('click', function() {

//     if ($("#table-garante tbody tr").length > 0) {

//         alertify.success('garantes seleccioandos');

//         $("#rptaGarantes").removeClass("text-danger");
//         $("#rptaGarantes").addClass("text-success");

//         $("#rptaGarantes").text('garantes seleccionados');
//         $("#modal-garante").modal("hide");


//     } else {


//         alertify.error('seleccione al menos un garante');
//     }


// })





$("#btnGuardarSol").on('click', function() {

    alertify.confirm("Confirmar Solicitud", "esta seguro de guardar la solicitud.",
        function() {
            alertify.success('confirmado');
        },
        function() {
            alertify.error('Cancelado');
        });


})

function cargar_table_garante() {




}


$(document).ready(function() {

    $(".chosen").chosen();

    // Setup - add a text input to each footer cell
    $('#table-solicitud tfoot th').each(function() {
        var title = $(this).text();
        $(this).html('<input class="form-control resize-input" type="text" placeholder="buscar ' + title + '" />');
    });

    // DataTable
    var table = $('#table-solicitud').DataTable();

    // Apply the search
    table.columns().every(function() {
        var that = this;

        $('input', this.footer()).on('keyup change clear', function() {
            if (that.search() !== this.value) {
                that
                    .search(this.value)
                    .draw();
            }
        });
    });
});



$('#table-solicitud').DataTable({
    ajax: {
        url: 'get_solicitud',
        type: 'GET',
        dataSrc: ''
    },
    language: {
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ filas",
        "infoEmpty": "Mostrando 0 to 0 of 0 filas",
        "infoFiltered": "(Filtrado de _MAX_ total filas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ filas",
        "loadingRecords": "Cargando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        }
    },
    columns: [{
            data: 'Periodo'
        }, {
            data: 'NroRegistro'
        }, {
            data: 'PersonaTitular'
        }, {
            data: 'NumDocIdentidad'
        }, {
            data: 'TipoPrestamo'
        }, {
            data: 'Banco'
        }, {
            data: 'TipoCuenta'
        }, {
            data: 'NroCuenta'
        }, {
            data: 'Moneda'
        }, {
            data: 'MontoSolicitud'
        }, {
            data: 'NroCuotas'
        }, {
            data: 'ResultadoEvaluacion'
        }, {
            data: 'UsuarioResponsable'
        }


        // {
        //     data: null,
        //     "render": function(data, type, full, meta) {
        //         return '<center>' +
        //             '<span>&nbsp;&nbsp;&nbsp;</span>' +
        //             '<button  type="button" class="btn btn-success btn-sm" onclick="prepareUpdatedFamiliaGer(\'' + data.GERENTE_ID + '\',\'' + data.DESCRIPCION + '\',\'' + data.IDFAMILIA + '\')">' +
        //             '<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>' +
        //             '</button>' +
        //             '</center>';
        //     }
        // }
    ]
});


$('#chckIntangible').on('change', function() {



    if ($(this).prop('checked')) {
        $('#SolCuota').attr("readonly", false);
        $('#SolPorcentaje').attr("readonly", false);

        $("input[name='iCheck']").attr("disabled", false);

    } else {
        $('#SolCuota').attr("readonly", true);
        $('#SolPorcentaje').attr("readonly", true);

        $("input[name='iCheck']").attr("disabled", true);
    }

});