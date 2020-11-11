<style type="text/css">
  input{
    border: 1px solid transparent;
    border-bottom: 1px solid black;
    width: 80%;
    padding-top: 15px;
    color: black;
  }

  input[type=number]::-webkit-outer-spin-button,
input[type=number]::-webkit-inner-spin-button {
  -webkit-appearance: none !important;
  margin: 0 !important;
}

input[type=number] {
  -moz-appearance:textfield !important;
}

  h2#swal2-title.swal2-title{
    color: black !important;
  }

  input:focus, input.form-control:focus {
    outline:none !important;
    outline-width: 0 !important;
    box-shadow: none;
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
  }

  .inputModal::placeholder{
    color: black !important;
  }

  .btn-per-add{
    background-color: transparent;
    border-radius: 5px;
    border: 1px solid green;
    color: green !important;
  }

  .btn-per-add:hover{
    background-color: green !important;
    color: #ffffff !important;
  }

  .btn-per-add:hover i{
    color: #ffffff !important;
  }

  .btn-per-edit{
    background-color: transparent;
    width: 35px;
    height: 35px;
    border-radius: 5px;
    border: 1px solid #F7B900;
  }

  .btn-per-edit:hover{
    background-color: #F7B900;
  }

  .btn-per-edit:hover i{
    color: #ffffff !important;
  }

  .btn-per-delete{
    background-color: transparent;
    width: 35px;
    height: 35px;
    border-radius: 5px;
    border: 1px solid red;
  }

  .btn-per-delete:hover{
    background-color: red;
  }

  .btn-per-delete:hover i{
    color: #ffffff !important;
  }

  .btnVerde{
    background-color: transparent;
    border: 1px solid #00E01B;
    color: #00E01B;
  }
  .btnVerde:hover{
    background-color: #03A516;
    color: #ffffff;
  }

  label, button.btnCentered{
    display:inline-block !important;
    width:100% !important;
    text-align: center !important;
    font-weight:bold;
  }

  select, option{
    text-align-last:center;
  }

  input{
    float: left !important;
  }



</style>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header border-0">
                <div class="d-flex justify-content-between">
                </div>
              </div>
              <div class="card-body">
                
                <div class="row">
                  <div class="col-md-12">
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <th style="font-weight: 450; color: #F7B900;">Nombres</th>
                          <th style="font-weight: 450; color: #F7B900;">Dirección</th>
                          <th style="font-weight: 450; color: #F7B900;">Teléfono</th>
                          <th style="font-weight: 450; color: #F7B900;">Cargo</th>
                          <th style="font-weight: 450; color: #F7B900;">Acciones</th>
                        </thead>
                        <tbody>
                          <?php foreach($empleados as $empleado): ?>
                            <tr>
                              <td><?php echo $empleado->nombre; ?></td>
                              <td><?php echo $empleado->direccion; ?></td>
                              <td><?php echo $empleado->telefono; ?></td>
                              <td><?php echo $empleado->cargo; ?></td>
                              <td>
                                <button class="btn-per-edit editEmpleadoBtn" style="padding: auto;" type="button" value="<?php echo $empleado->id; ?>" data-toggle="modal" data-target="#modal-lg-edit"><i class='fas fa-pencil-alt' style="color: #F7B900;"></i></button>
                                <button class="btn-per-delete deleteEmpleadoBtn" style="padding: auto;" value="<?php echo $empleado->id; ?>+<?php echo $empleado->nombre; ?>"><i class='fas fa-trash-alt' style="color: red;"></i></button>
                                
                              </td>
                            </tr>
                          <?php endforeach; ?>
                          <tr>
                            <td><button class="btn-per-add addEmpleadoBtn" type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg-add"><i class="fa fa-plus" style="color: green;"></i> Agregar empleado</button></td>
                            
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card -->

           
               
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 

<!--MODAL AÑADIR EMPLEADOS-->
  <div class="modal fade" id="modal-lg-add">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" style="color: green;"><i class="fas fa-user-plus"></i> Empleado</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
          <div class="container login-container">
            <div class="row">
                <div class="col-md-7">
                    
                <div class="col-md-12 form-group">
                      <label class="control-label">Nombre:</label>
                      <input type="text" class="form-control" name="nombre" id="nombre">
                </div>
                <div class="col-md-12 form-group">
                    <label>Dirección:</label>
                    <input type="text" class="form-control" name="direccion" id="direccion">
                </div>
                <div class="col-md-12 form-group">
                    <label>Teléfono:</label>
                    <input type="number" class="form-control" name="telefono" id="telefono">
                </div>
                <div class="col-md-12 form-group">
                    <label>Cargo:</label>
                    <select class="form-control" id="cargo">
                      <?php foreach($cargos as $cargo): ?>
                        <option value="<?php echo $cargo->id; ?>"><?php echo $cargo->nombre; ?></option>
                      <?php endforeach; ?>
                    </select>
                </div>
                    
                </div>
                <div class="col-md-5">
                  <div class="card">
                  <div style="float: left;">
                    <img class="card-img-top" style="width: 75%; height: 75%;" src="<?php echo base_url() ?>assets/img_avatar1.png" alt="Card image">
                  </div>
                  <div class="card-body">
                    <h4 class="card-title">Empleado: <span id="nombreEmpleado"> Nombre </span></h4>
                    <p class="card-text">Válido</p>
                  </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <button type="button" id="btnVerde" class="btn btnCentered btnVerde btnAddEmpleado">Guardar</button>
                </div>
            </div>
        </div>
          </div>

          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
<!--MODAL AÑADIR EMPLEADO-->



<!--EDITAR EMPLEADOS-->
<div class="modal fade" id="modal-lg-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 style="color: black;" class="modal-title text-center" id="exampleModalLongTitle"><i class='fas fa-pencil-alt' style='padding-right: 10px; color: orange; font-size: 19px;'></i>Empleado<small style="color: orange;"> editar</small></h3>
      </div>
      <div class="modal-body">
        <div class="container login-container">
            <div class="row">
                <div class="col-md-7">
                    
                <div class="col-md-12 form-group">
                      <label class="control-label">Nombre:</label>
                      <input type="text" class="form-control" name="nombreEditar" id="nombreEditar">
                </div>
                <div class="col-md-12 form-group">
                    <label>Dirección:</label>
                    <input type="text" class="form-control" name="direccionEditar" id="direccionEditar">
                </div>
                <div class="col-md-12 form-group">
                    <label>Teléfono:</label>
                    <input type="number" class="form-control" name="telefonoEditar" id="telefonoEditar">
                </div>
                <div class="col-md-12 form-group">
                    <label>Cargo:</label>
                    <select class="form-control" id="cargoEditar">
                      <option class="cargoActual"></option>
                      <?php foreach($cargos as $cargo): ?>
                        <option class="idEmpleadoEditable" value="<?php echo $cargo->id; ?>"><?php echo $cargo->nombre; ?></option>
                      <?php endforeach; ?>
                    </select>
                </div>
                    
                </div>
                <div class="col-md-5">
                  <div class="card">
                  <div style="float: left;">
                    <img class="card-img-top" style="width: 75%; height: 75%;" src="<?php echo base_url() ?>assets/img_avatar1.png" alt="Card image">
                  </div>
                  <div class="card-body">
                    <h4 class="card-title">Empleado: <span id="nombreEmpleado">Example Name</span></h4>
                    <p class="card-text">Válido</p>
                  </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <button type="button" id="btnVerde" class="btn btnCentered btnVerde btnEmpleadoEditable">Guardar</button>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--EDITAR EMPLEADOS-->


<script type="text/javascript">
  window.addEventListener('load', function() {
    $('.btnSubmit').on("click", function() {
      alert($('#emaild').val());
    })

    $('#nombre').on("keyup", function() {
      let keyUp = $(this).val();
      document.getElementById('nombreEmpleado').innerHTML = keyUp;
    })

    /* añadir empleado */

    $('.btnAddEmpleado').on('click', function(){
      let myArr = "nombre="+$('#nombre').val() +
                  "&direccion="+$('#direccion').val() +
                  "&telefono="+$('#telefono').val() +
                  "&cargo="+$('#cargo').val();
              
                $.ajax({
                  type: 'POST',
                  data: myArr,
                  dataType:'json',
                  url:"<?php echo base_url() ?>empleados/empleados/addEmpleado",
                  success:function(response){
                    if(response.success==true){
                        $('#modal-lg-add').modal("hide");

                        Swal.fire("Éxito!", "Has añadido un empleado satisfactoriamente!", "success")

                        setTimeout(function(){
                          location.href='<?php echo base_url() ?>empleados/empleados'
                        }, 1500);
                    }
                  } // fin SUCCESS function

                }) // fin ajax
        })       


        /* editar empleado */

    $('.editEmpleadoBtn').on("click", function() {
    let idEmpleado = $(this).val();

      $.ajax({
        type:'POST',
        dataType:'json',
        url:"<?php echo base_url() ?>empleados/empleados/empleadoToEdit/"+idEmpleado,
        success:function(response){
          let datos = response.empleadoEditable;

            $('#nombreEditar').val(datos.nombre);
            $('#direccionEditar').val(datos.direccion);
            $('#telefonoEditar').val(datos.telefono);
            $('#cargoEditar .cargoActual').text(datos.cargo);

            $('.btnEmpleadoEditable').on("click", function() {
              
              saveDataEmpleado(idEmpleado);

            })

        }
      })
    })

      /* petición ajax para editar empleado */

      function saveDataEmpleado(idEmpleado){
        let informacionEmpleadoEditar = "nombre="+$('#nombreEditar').val() +
                                "&direccion="+$('#direccionEditar').val() +
                                "&telefono="+$('#telefonoEditar').val() +
                                "&cargo="+$('#cargoEditar').val();
                                
                                  $.ajax({
                                    type:'POST',
                                    dataType:'json',
                                    data:informacionEmpleadoEditar,
                                    url:"<?php echo base_url() ?>empleados/empleados/updateEmpleado/"+idEmpleado,
                                    success:function(response){

                                      if (!(response.validation)) {
                                        console.log("ERROR!");
                                      }else{
                                        $('#modal-lg-edit').modal("hide");

                                        Swal.fire("Éxito!", "Has editado un empleado satisfactoriamente!", "success")

                                        setTimeout(function(){
                                          location.href="<?php echo base_url() ?>empleados/empleados"
                                        }, 1500);
                                      }
                                    }
                                  }) 
        }



        /* eliminar empleado */

    $('.deleteEmpleadoBtn').on("click", function() {
      let infoBotonEmpleado = $(this).val(),
          informacionEmpleado = infoBotonEmpleado.split("+"),
          nombreEmpleado = informacionEmpleado[1];
      let idEmpleado = informacionEmpleado[0];

        Swal.fire({
          title: 'Estás seguro de eliminar a '+nombreEmpleado+'?',
          text: "Una vez confirmado, no podrás revertir los cambios!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Sí, eliminar ahora!'
        }).then((result) => {
          if (result.value) {
            
              $.ajax({
                type: 'POST',
                dataType: 'json',
                url:"<?php echo base_url() ?>empleados/empleados/deleteEmpleado/"+idEmpleado,
                success:function(response){
                  if(response.success==true){

                    Swal.fire(
                      'Eliminado!',
                      'Has eliminado un empleado satisfactoriamente!',
                      'success'
                    )

                    setTimeout(function(){
                      location.href='<?php echo base_url() ?>empleados/empleados'
                    }, 1500);

                  }

                }
            }) // fin ajax
          } // fin if del alert
        }) // fin alert
    })         

  }) // fin carga de documento
</script>