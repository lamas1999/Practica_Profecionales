<?php

function conexion($bd_config){
    try {
        $conexion = new PDO('mysql:host=localhost;dbname='.$bd_config['basedatos'],$bd_config['usuario'],$bd_config['pass']);
        return $conexion;
    } catch (PDOException $e)  {
        //throw $th;
        return false;
    }

}
//para evitar inyecction
function limpiarDatos($datos){
    $datos = trim($datos);
    $datos = stripcslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
}

/* para obtener la pagina actual */
/* si esta seteada obtenemos el valor deotra oforma obtenemos1 */
function pagina_actual(){
    return isset($_GET ['p'])? (int)$_GET['p'] : 1;
}


   function obtener_post($post_por_pagina, $conexion){
    
        $inicio= (pagina_actual() > 1) ? pagina_actual() * $post_por_pagina - $post_por_pagina : 0;
        $sentencia =$conexion->prepare("SELECT SQL_CALC_FOUND_ROWS oferta.id_oferta,oferta.titulo,oferta.fecha_publicado,oferta.descripcion,
        empresa.nombre,empresa.logo,pais.pais,ciudad.ciudad
        from oferta inner join empresa
        on oferta.id_empresa = empresa.id_empresa
        inner join pais 
        on oferta.id_pais=pais.id_pais
        inner join ciudad on ciudad.id_pais=pais.id_pais LIMIT $inicio, $post_por_pagina");
        $sentencia->execute();
        return $sentencia->fetchAll();
} 


function fecha($fecha){
    $timestamp = strtotime($fecha);
    $meses = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diembre'];
    $dia = date('d', $timestamp);
    $mes = date('m', $timestamp) -1;
    $year= date('Y', $timestamp);

    $fecha="$dia de ". $meses[$mes]." del $year";
    return $fecha;
}

/* 
function obtener_post1($post_por_pagina, $conexion){
    
    $inicio= (pagina_actual() > 1) ? pagina_actual() * $post_por_pagina - $post_por_pagina : 0;
    $sentencia =$conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM oferta LIMIT $inicio, $post_por_pagina");
    $sentencia->execute();
    return $sentencia->fetchAll();
}  */

function numero_paginas($post_por_pagina, $conexion){
    $total_post = $conexion-> prepare('SELECT FOUND_ROWS() as total');
    $total_post->execute();
    $total_post = $total_post->fetch()['total'];

    /* calculo de las paginas */
    $numero_paginas = ceil($total_post / $post_por_pagina);
    return $numero_paginas;
}


?>