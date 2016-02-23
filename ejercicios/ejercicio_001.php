<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <h1>CATEGORÍAS</h1>
        <a href="ejercicio_002.php">Crear Categoría</a>
        <?php 
        require '../conexion.php';
        
        $query = "SELECT * FROM categoria_productos";
        $result = mysql_query($query)
        or die("hubo un error al hacer la consulta" . mysql_error());
        
        while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
                {    
        ?>
        </br>
        </br>
        
        <span style="font-size: 28;">
            <strong><?php echo $line['id'] . '.-' . $line['nombre'] ?></strong>
        </span>
        
        <a href="ejercicio_002.php?id=<?php echo $line['id'] ?>" >Editar</a>
        <a href="eliminar_categoria.php?id=<?php echo $line['id'] ?>" >Eliminar</a>
            
        <table border="1">
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>STOCK</th>
                    <th>CATEGORIA</th>
                    <th>IGV</th>
                    <th>SEXO</th>
                    <th>ACTIVO</th>
                </tr>
            <?php 
            $query2 = "SELECT * FROM productos WHERE categoria_id=".$line['id'];
            $result2 = mysql_query($query2);
                while ($product = mysql_fetch_array($result2, MYSQL_ASSOC)){ ?>
                        
                <tr>
                    <td><?php echo $product["producto_id"] ?></td>
                    <td><?php echo $product["nombre"] ?></td>
                    <td><?php echo $product["stock"] ?></td>
                    <td><?php echo $line['nombre'] ?></td>
                    <td><?php echo $product["is_igv"] ?></td>
                    <td><?php echo $product["sexo"] ?></td>
                    <td><?php echo $product["activo"] ?></td>
                </tr>
            
        </table>
                    
                        <?php }?>
            <?php }?>
    </body>
</html>
