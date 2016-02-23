<html>
    <head>
        <title>Nueva Categoria</title>
        <style>
            body{
                margin: 20px auto;
                
            }
        </style>
    </head>
    <body>
        <?php 
            if(isset($_GET['id'])){
                //requerimos la conexion
                require_once '../conexion.php';
                //recuperamos id
                $categoria_id = $_GET['id'];
                //creamos la consulta
                $query_categoria = "SELECT * FROM categoria_productos WHERE id=" . $categoria_id;
                //hacemos la consulta a la base de datos
                $result = mysql_query($query_categoria);
                //recuperamos los resultados de la base de datos
                $categoria = mysql_fetch_array($result, MYSQLI_ASSOC);
                $checked = "checked";
                if(!$categoria['activo']){
                    $checked = "";
                }
            }else{
                $checked = "checked";
            }
        ?>
        <div style="border: 1px solid black; width: 50%">
            <h1>Crear Categoría</h1>
            <form action="guardar_categoria.php" 
                  method="POST">
                <input type="hidden" name="id" value="<?php if (isset($_GET['id'])) {echo $categoria['id'];} ?>"/>
                Nombre: <input type="text" name="categoria" 
                               autofocus required
                               value="<?php if(isset($_GET['id'])){echo $categoria['nombre'];}  ?>"
                               placeholder="categoria"/>
                </br>
                
                Activo: <input type="checkbox" <?php echo $checked; ?>
                               name="activo" />
                </br>
                <input type="submit" value="Guardar" />
                <input type="reset" value="Cancelar" />
            </form>
        </div>
        
    
        
    </body>
</html>
