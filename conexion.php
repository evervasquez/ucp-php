<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$link = mysql_connect('localhost', 'root', '')
        or die('No se pudo conectar: ' . mysql_error());

//seleccione mi base de datos
mysql_select_db("database001")
        or die("no se pudo seleccionar la base de datos" . mysql_error());
