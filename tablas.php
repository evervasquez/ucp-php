<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tablas</title>
</head>
<body>
	<?php 
//		$alumnos = array(
//
//            "1" => array(
//                "nombre" => "Mariana",
//                "codigo" => 12312,
//                "asistencia" => 'Si'
//            ),
//            "2" => array(
//                "nombre" => "Jennifer",
//                "codigo" => 1212,
//                "asistencia" => 'Si'
//            ),
//            "3" => array(
//                "nombre" => "Liz",
//                "codigo" => 42425,
//                "asistencia" => 'Si'
//            )
//        )

        $array = [1,2,3,"Kemmer", "Mariana"];
        
        for($i=0; $i<count($array); $i++){
        	echo $array[$i]."</br>";
        }
        
        //array dimensional
        $array_without_indice = [0,2,3,1];
        
        $array_with_indice = array(
          "D1" => "Kemmer",
          "D2" => "Mariana"
        );
        
        //array multidimiensional
        $array_multi = array(
          array(
              "item" => 1,
              "nombre" =>"Mariana",
              "codigo" => 82345,
              "asistencia" => true
          ),  
          array(
              "item" => 2,
              "nombre" =>"Mariana",
              "codigo" => 82314,
              "asistencia" => true
          ),  
          array(
              "item" => 1,
              "nombre" =>"Miguel",
              "codigo" => 82345,
              "asistencia" => true
          ),  
          array(
              "item" => 1,
              "nombre" =>"Juan",
              "codigo" => 82345,
              "asistencia" => true
          ),  
          array(
              "item" => 1,
              "nombre" =>"Juan",
              "codigo" => 82345,
              "asistencia" => true
          ),  
          array(
              "item" => 1,
              "nombre" =>"Juan",
              "codigo" => 82345,
              "asistencia" => true
          ),  
          array(
              "item" => 1,
              "nombre" =>"Juan",
              "codigo" => 82345,
              "asistencia" => true
          ),  
          array(
              "item" => 1,
              "nombre" =>"Juan",
              "codigo" => 82345,
              "asistencia" => true
          ),  
        );
        
        echo "</br><h1>" . $array_with_indice["D2"]."</h1>";
    ?>
           
	<table border="1" align="center">
		<tr>
			<th>Item</th>
			<th>Nombre</th>
			<th>Codigo</th>
			<th>Asistencia</th>
		</tr>
		<?php for ($i=0; $i<count($array_multi); $i++){ ?>
		<tr>
			<td><?php echo $array_multi[$i]["item"] ?></td>
			<td><?php echo $array_multi[$i]["nombre"] ?></td>
			<td><?php echo $array_multi[$i]["codigo"] ?></td>
			<td><?php echo $array_multi[$i]["asistencia"] ?></td>
			
		</tr>
                <?php } ?>
	</table>

</body>
</html>
