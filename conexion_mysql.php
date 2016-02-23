<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//crear el objeto para la conexión
$link = mysql_connect('localhost', 'root', '')
        or die('No se pudo conectar: ' . mysql_error());

//seleccione mi base de datos
mysql_select_db("database001") 
or die("no se pudo seleccionar la base de datos". mysql_error());

$query = "SELECT * FROM categoria_productos";

$result = mysql_query($query) 
        or die("hubo un error al hacer la consulta"  . mysql_error());

echo "<table border='1' align='center' >\n";
echo "<tr>"
        . "<th>ID</th>"
        . "<th>NOMBRE</th>"
        . "<th>ACTIVO</th>"
        . "</tr>";

while ($line = mysql_fetch_array($result, MYSQL_ASSOC)){
    echo "<tr>"
            . "<td>".$line['categoria_producto_id']."</td>"
            . "<td>".$line['nombre']."</td>"
            . "<td>".$line['activo']."</td>"
            . "</tr>";
}

echo "</table>";
