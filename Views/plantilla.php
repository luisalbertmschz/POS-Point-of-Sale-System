<?php

session_start();

?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MM Sistema de ventas e inventario</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">


  <link rel="shortcut icon" href="Views/img/Plantilla/sofa.png" type="image/x-icon">


  <!-- 
//-------------------------------------------------//
//               Plugins de  CSS                   //
//-----------------------------------------------//
 -->

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="Views/bower_components/bootstrap/dist/css/bootstrap.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="Views/bower_components/font-awesome/css/font-awesome.min.css">

  <script src="https://kit.fontawesome.com/36bc7112ac.js" crossorigin="anonymous"></script>

  <!-- Ionicons -->
  <link rel="stylesheet" href="Views/bower_components/Ionicons/css/ionicons.min.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="Views/dist/css/AdminLTE.css">
  
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="Views/dist/css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">


<!-- 
//-------------------------------------------------//
//               Plugins de JavaScript            //
//-----------------------------------------------//
 -->

    <!-- jQuery 3 -->
  <script src="Views/bower_components/jquery/dist/jquery.min.js"></script>

  <!-- Bootstrap 3.3.7 -->
  <script src="Views/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

  <!-- FastClick -->
  <script src="Views/bower_components/fastclick/lib/fastclick.js"></script>

  <!-- AdminLTE App -->
  <script src="Views/dist/js/adminlte.min.js"></script>
</head>


<!-- 
//-------------------------------------------------//
//               Cuerpo Documentos           //
//-----------------------------------------------//
 -->


<body class="hold-transition skin-blue sidebar-collapse sidebar-mini login-page">
<!-- Site wrapper -->


<?php

if (isset($_SESSION["IniciarSesion"]) && $_SESSION["IniciarSesion"] == "Iniciada"){


echo '<div class="wrapper">';


include "Modules/HeaderPrincipal.php";


include "Modules/SideMenu.php";



if(isset($_GET["ruta"])){
  
      if($_GET["ruta"] == "Inicio" ||
         $_GET["ruta"] == "Usuarios" ||
         $_GET["ruta"] == "Categorias" ||
         $_GET["ruta"] == "Productos" ||
         $_GET["ruta"] == "Clientes" ||
         $_GET["ruta"] == "AdministrarVentas" ||
         $_GET["ruta"] == "CrearVenta" ||
         $_GET["ruta"] == "Reportes" ||
         $_GET["ruta"] == "LoggedOut"){

        include "Modules/".$_GET["ruta"].".php";
        
      }else{

        include "Modules/404.php";
 
      }
       
    }else{
  
        include "Modules/Inicio.php";

    } 






include "Modules/Footer.php";

echo'</div>';

}else {
  include "Modules/LoginPage.php";
}
?>

  <!-- =============================================== -->


  <!-- =============================================== -->


</div>
<!-- ./wrapper -->

<script src="Views/Js/plantilla.js"></script>
</body>
</html>
