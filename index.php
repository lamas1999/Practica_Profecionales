<?php

/* include_once("clases/conexion.php");


//---------- USES DE LAS CLASES DE NAMESPACES ----
use \clases\conexion\Conexion;
//-----------------------------------------------

$conexion = new Conexion();

if (!$conexion) {
    header('Location: error.php');
    //echo 'error';
    # code...
} */
require 'config/database.php';
require 'funciones/functions.php';

$conexion= conexion($bd_config);
if (!$conexion) {
    header('Location: error.php');
    //echo 'error';
    # code...
}

$post = obtener_post($blog_config['post_por_pagina'], $conexion);
if (!$post) {
    header('Location: error.php');
 
} 
//print_r($post);  
//echo pagina_actual();


require 'views/index.view.php';
?>