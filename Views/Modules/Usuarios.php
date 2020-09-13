  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Administrar Usuarios
        <small>Panel de control</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="Inicio"><i class="fa fa-dashboard"></i>Inicio</a></li>
        <li class="active">Administrar usuarios</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">

        <div class="box-header with-border">

          <button class="btn btn-success" data-toggle="modal" data-target="#modalAñadirUsuario"><i class=" fas fa-user-plus"></i> <br> Añadir un nuevo usuario</button>


        </div>

        <div class="box-body">

          <table class="table table-bordered table-condensed table-hover dt-responsive tablaUsuarios" width="100%">

            <thead>

              <tr>
                <th>#</th>
                <th>Usuario</th>
                <th>Nombre</th>
                <th>Foto</th>
                <th>Rol</th>
                <th>Estatus</th>
                <th>Último login</th>
                <th>Acciones avanzadas</th>
              </tr>

            </thead>

            <tbody>
              <tr>
                <td>1</td>
                <td>WKNDAKNG01</td>
                <td>T'Challa</td>
                <td><img src="Views/img/Usuarios/Default/WKND.jpg" class="user-image img-thumbnail" width="60x"></td>
                <td>Admin</td>
                <td><button class="btn btn-success btn-xs">Wakanda Forever</button></td>
                <td>2020-08-29 00:00:00</td>
                <td>
                  <div class="btn-group">
                    <button class="btn btn-warning"><i class="fas fa-user-edit"></i></button>
                    <button class="btn btn-danger"><i class="fas fa-user-times"></i></button>


                  </div>


                </td>

              </tr>
              <tr>
                <td>1</td>
                <td>WKNDAKNG01</td>
                <td>T'Challa</td>
                <td><img src="Views/img/Usuarios/Default/WKND.jpg" class="user-image img-thumbnail" width="60x"></td>
                <td>Ventas</td>
                <td><button class="btn btn-danger btn-xs">Wakanda Forever</button></td>
                <td>2020-08-29 00:00:00</td>
                <td>
                  <div class="btn-group">
                    <button class="btn btn-warning"><i class="fas fa-user-edit"></i></button>
                    <button class="btn btn-danger"><i class="fas fa-user-times"></i></button>


                  </div>


                </td>

              </tr>

              <tr>
                <td>1</td>
                <td>WKNDAKNG01</td>
                <td>T'Challa</td>
                <td><img src="Views/img/Usuarios/Default/WKND.jpg" class="user-image img-thumbnail" width="60x"></td>
                <td>Admin</td>
                <td><button class="btn btn-success btn-xs">Wakanda Forever</button></td>
                <td>2020-08-29 00:00:00</td>
                <td>
                  <div class="btn-group">
                    <button class="btn btn-warning"><i class="fas fa-user-edit"></i></button>
                    <button class="btn btn-danger"><i class="fas fa-user-times"></i></button>


                  </div>


                </td>

              </tr>

              <tr>
                <td>1</td>
                <td>WKNDAKNG01</td>
                <td>T'Challa</td>
                <td><img src="Views/img/Usuarios/Default/WKND.jpg" class="user-image img-thumbnail" width="60x"></td>
                <td>Admin</td>
                <td><button class="btn btn-success btn-xs">Wakanda Forever</button></td>
                <td>2020-08-29 00:00:00</td>
                <td>
                  <div class="btn-group">
                    <button class="btn btn-warning"><i class="fas fa-user-edit"></i></button>
                    <button class="btn btn-danger"><i class="fas fa-user-times"></i></button>


                  </div>


                </td>

              </tr>


              <tr>
                <td>1</td>
                <td>WKNDAKNG01</td>
                <td>T'Challa</td>
                <td><img src="Views/img/Usuarios/Default/WKND.jpg" class="user-image img-thumbnail" width="60x"></td>
                <td>Admin</td>
                <td><button class="btn btn-warning btn-xs">Wakanda Forever</button></td>
                <td>2020-08-29 00:00:00</td>
                <td>
                  <div class="btn-group">
                    <button class="btn btn-warning"><i class="fas fa-user-edit"></i></button>
                    <button class="btn btn-danger"><i class="fas fa-user-times"></i></button>


                  </div>


                </td>

              </tr>


              <tr>
                <td>1</td>
                <td>WKNDAKNG01</td>
                <td>T'Challa</td>
                <td><img src="Views/img/Usuarios/Default/WKND.jpg" class="user-image img-thumbnail" width="60x"></td>
                <td>Admin</td>
                <td><button class="btn btn-success btn-xs">Wakanda Forever</button></td>
                <td>2020-08-29 00:00:00</td>
                <td>
                  <div class="btn-group">
                    <button class="btn btn-warning"><i class="fas fa-user-edit"></i></button>
                    <button class="btn btn-danger"><i class="fas fa-user-times"></i></button>


                  </div>


                </td>

              </tr>

            </tbody>


          </table>


        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- 
//-------------------------------------------------//
//        Ventana Modal añadir usuarios           //
//-----------------------------------------------//
 -->

  <!-- Modal -->

  <div id="modalAñadirUsuario" class="modal fade" role="dialog">

    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content ">

        <form role="form" method="pos" enctype="multipart/form-data">

          <!-- 
            //-------------------------------------------------//
            //       HHEADER VENTANA MODAL                    //
            //-----------------------------------------------//
            -->

          <div class="modal-header" style=" background-color:#00a65a; color:white; font-weight: bold; ">

            <button type="button" class="close" data-dismiss="modal">&times;</button>

            <h4 class="modal-title"><i class="fas fa-users"></i> Formulario de nuevo usuario </h4>

          </div>


          <!-- 
            //-------------------------------------------------//
            //       BODY VENTANA MODAL                    //
            //-----------------------------------------------//
            -->

          <div class="modal-body">

            <div class="box-body">

              <!-- SECCION NOMBRE COMPLETO DEL USUARIO -->

              <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"> <i class="fas fa-user-alt"></i></span>

                  <input type="text" class="form-control input-lg" name="RegitroNombre" placeholder="Ingresar nombre" required>


                </div>

              </div>


              <!-- SECCION NOMBRE DEL USUARIO -->

              <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"> <i class="fas fa-user-tag"></i></span>

                  <input type="text" class="form-control input-lg" name="RegitroUsuario" placeholder="Ingresar usuario" required>

                </div>

              </div>


              <!-- SECCION CONTRASEÑA DEL USUARIO -->

              <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"> <i class="fas fa-key"></i></span>

                  <input type="text" class="form-control input-lg" name="RegitroPassword" placeholder="Ingresar la contraseña" required>

                </div>

              </div>



              <!-- SECCION PERFIL DEL USUARIO -->

              <div class="form-group">

                <div class="input-group">

                  <span class="input-group-addon"><i class="fas fa-user-shield"></i></span>

                  <select class="form-control input-lg" name="RegistroPerfil">

                    <option value="">Seleccionar el rol</option>

                    <option value="Administrador">Administrador</option>

                    <option value="Inventario">Inventario</option>

                    <option value="Ventas">Ventas</option>

                  </select>

                </div>

              </div>

              <!-- SECCION DE FOTO DEL USUARIO -->

              <div class="form-group">

                <div class="panel">AGREGAR FOTO DE USUARIO</div>

                <input type="file" name="RegistroFoto" id="RegistroFoto">

                <p class="help-block"><i class="fas fa-exclamation-circle"></i> Foto no debe superar los 200MB</p>

                <img src="Views/img/Usuarios/Default/DefaultUser1.png" class="img-thumbnail" width="100px">


              </div>

            </div>

          </div>

          <!-- 
            //-------------------------------------------------//
            //       FOOTER VENTANA MODAL                    //
            //-----------------------------------------------//
            -->

          <div class="modal-footer">

            <button type="button" class="btn btn-primary pull-left" data-dismiss="modal"> <i class="fas fa-times"></i> Cerrar formulario</button>

            <button type="submit" class="btn btn-success" data-dismiss="modal"> Guardar usuario <i class="fa fa-user-check"></i></button>

          </div>

        </form>

      </div>

    </div>

  </div>