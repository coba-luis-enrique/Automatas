<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto</title>

    <script src="funciones.js"></script>
</head>
<body>

    <?php
    //extra el codigo fuente y lo tranpasa a un archivo text
    $x = "archivo.txt";
    if (file_exists($x)==FALSE){
        $y = fopen($x,"a") or die ("error al crear");
        if($_POST['url']){
            $lineas = file($_POST['url']); 
            foreach($lineas as $num_linea => $linea){
            $z = $linea; 
        
        
            fwrite($y,$z);
            }
        }
    }
    ?>
        <h1 class="text-center">proyecto</h1>
        <button type="button" onclick="Fuente()">Codigo Html</button>
        <button type="button" onclick="imagen()">Imagenes</button>
        <button type="button" onclick="Title()">Title</button>
        <button type="button" onclick="con()">Comentarios</button>
        <button type="button" onclick="sin_con()">Eliminar Comentarios</button>
        <button type="button" onclick="parrafo()">Etiqueta Parrafo</button>
        <button type="button" onclick="enc()">Encriptar</button>
    </div>
    <div id="operacion">

    </div>
    
</body>
</html>



