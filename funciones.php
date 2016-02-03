<?php

$anio_actual = date('Y');

function recuperar_edad($anio_actual, $anio_nacimiento){
	$edad = $anio_actual - $anio_nacimiento;
    return "tu edad es $edad";
}
    
print recuperar_edad($anio_actual, 2000);