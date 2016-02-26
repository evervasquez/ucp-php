<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$id = $_GET["id"];

require_once '../conexion.php';

$query = "DELETE FROM categoria_productos WHERE id=".$id;

$result = mysql_query($query) or die("hubo un error al hacer la consulta" . mysql_error());
?>

<script type="text/javascript">
    var mensaje = 'se elimino correctamente';
    console.log(mensaje);
    alert(mensaje);
    location.href = "ejercicio_001.php";
</script>
