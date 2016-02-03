<?php

//declarar variables
$edadJuan = 10;
$edadPedro = 19;

//condicional
if ($edadJuan > $edadPedro) {
    echo "Juan con $edadJuan años es mayor";
} else {
    echo "Pedro con $edadPedro años es mayor";
}

//for
for ($i = 0; $i < 100; $i++) {
    echo "hola\n";
}


$contador = 0;

while ($contador >= 0) {

    echo "<p>Hola</p>";
    $contador++;

    if($contador == 100){
        $contador = -1;
    }
}
