<?php

class ConexionDB{

    public function Conectar(){

        $link = new PDO("mysql:host=localhost:3307;dbname=oss_mmdb",
        "root",
        "");

        $link ->exec("set names utf8");

        return $link;

        

    }




}