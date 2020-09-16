
<?php

class ControladorUsuarios{


   static public function  ctrIngresoUsuario(){

       
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


   /*    REGISTRO DE USUARIO */

   static public function  ctrCrearUsuario(){
        
     if(isset($_POST["RegistroUsuario"])){

          if (preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["RegistroNombre"]) && 
              preg_match('/^[a-zA-Z0-9]+$/', $_POST["RegistroUsuario"]) &&
              preg_match('/^[a-zA-Z0-9]+$/', $_POST["ReistroPassword"])) {
          
          }else{

               echo "<script>
               
                    Swal.fire({
                         icon: 'error',
                         title: 'Oops...',
                         text: '¡El usuario no debe ir en blanco o llevar caracteres especiales!',
                         showConfirmButton: true,
                         confirmButtonText:'Cerrar ',
                         closeOnConfirm: false

                         })

                     </script>";



          }


     }


   }




}