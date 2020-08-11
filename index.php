<?php

require_once "Controllers/plantilla.controlador.php";

require_once "Controllers/categorias.controlador.php";
require_once "Controllers/clientes.controlador.php";
require_once "Controllers/productos.controlador.php";
require_once "Controllers/usuarios.controlador.php";
require_once "Controllers/ventas.controlador.php";


require_once "Models/categorias.modelo.php";
require_once "Models/clientes.modelo.php";
require_once "Models/productos.modelo.php";
require_once "Models/usuarios.modelo.php";
require_once "Models/ventas.modelo.php";


$plantilla = new ControladorPlantilla();
$plantilla -> strPlantilla();



