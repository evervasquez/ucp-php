<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$categoria = $_POST["categoria"];

$activo = 1;

$id = $_POST["id"];

if(!isset($_POST["activo"])){
    $activo = 0;
}

require_once '../conexion.php';

$query = "INSERT INTO categoria_productos (nombre, activo) VALUES('" . $categoria . "', " . $activo . ")";

if(!empty($id)){
    $query = "UPDATE categoria_productos SET activo=".$activo.", nombre='".$categoria."' WHERE id=".$id;
}


$result = mysql_query($query) or die("hubo un error al hacer la consulta" . mysql_error());
?>
<script>
    alert("La categoria se ingreso correctamente");
    
    location.href = "ejercicio_001.php";
</script>