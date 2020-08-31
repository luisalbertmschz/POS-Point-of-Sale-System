<?php

require_once "ConexionDataBase_OSS_MMDB.php";


class ModeloUsuarios{



    static public function MdlMostrarUsuarios($tabla, $item, $valor){



        $stmt = ConexionDB::Conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");


        $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);


        $stmt -> execute();


        return  $stmt ->fetch();


         



    }


}




