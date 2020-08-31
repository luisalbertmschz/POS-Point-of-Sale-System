
<?php

class ControladorUsuarios{


   public function  ctrIngresoUsuario(){

       
        if (isset($_POST["UsuarioIngresado"] ) ) {

           
            if ( preg_match('/^[a-zA-Z0-9]+$/', $_POST["UsuarioIngresado"]) &&
                 preg_match('/^[a-zA-Z0-9]+$/', $_POST["ContraseñaIngresada"])){

                 $tabla = "mm_usuarios";

                 $item = "MMU_Usuario";

                 $valor = $_POST["UsuarioIngresado"];

                 $respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla,$item,$valor);



                 if ( is_array($respuesta) && $respuesta["MMU_Usuario"] == $_POST["UsuarioIngresado"] && $respuesta["MMU_Password"] == $_POST["ContraseñaIngresada"]) {

                 $_SESSION["IniciarSesion"] = "Iniciada";

                 echo '<script>

                       window.location = "Inicio";
                       </script>';




                 }else{


                    echo '<br> 
                          <div class = "alert alert-danger" style="text-align: center"> 
                            <i class="fas fa-exclamation-triangle"></i>Usuario o contraseña invalidos
                          </div>';
                 }

                 


              
            }



        }


   }


}