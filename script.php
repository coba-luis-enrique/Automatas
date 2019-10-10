<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto</title>
    <link rel="stylesheet" href="estilo.css">

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

    <div class="container">
    <h1 style="font-size:30px;
    text-align: center;
    color:yellow;">Project two operations:</h1>
    <h2 style="font-size:25px;
    text-align: center;
    color:yellow;">welcome to my project, simple but functional</h2>
    <details>   
	<summary>Mi contenido </summary>
     <p class="catsandstars">

        <button type="button" onclick="Fuente()"class="boton">Codigo Html</button>
        <button type="button" onclick="imagen()"class="boton">Imagenes</button>
        <button type="button" onclick="Title()"class="boton">Title</button>
        <button type="button" onclick="con()"class="boton">Comentarios</button>
        <button type="button" onclick="sin_con()"class="boton">Eliminar Comentarios</button>
        <button type="button" onclick="parrafo()"class="boton">Etiqueta Parrafo</button>
        <button type="button" onclick="enc()"class="boton">Encriptar</button>
    </div>
    <div id="operacion">

    </div>
    
</body>
</html>



