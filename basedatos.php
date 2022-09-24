<?php
$db = new mysqli('localhost', 'root', 'mysqladmin', 'parcial_miñano');
if(!$db){
    echo 'Error al conectar la Base de datos';
    exit;
}