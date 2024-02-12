<?php
/**
 * Realiza una petición a la API de Cat Fact para obtener un hecho aleatorio sobre gatos.
 *
 * @return object Retorna un objeto JSON con la información del hecho sobre gatos.
 */
function obtenerCatFact() {
    $catfact_json = file_get_contents('https://catfact.ninja/fact?max_length=140');
    return json_decode($catfact_json);
}

$fact = obtenerCatFact();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea 9</title>
    <style>
        body{
            text-align: center;
        }
        h1 {
            color: #333;
        }

        #fact {
            font-style: italic;
            color: #666;
        }
        footer {
            position: fixed;
            width: 100%;
            background-color: #ffb2ff;
            padding: 10px 0;
            bottom: 0;
            left: 0px;
        }
        #pie {
            color: black;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            //Cada 5 segundos (5000 milisegundos) se ejecutará la función refrescar
            setTimeout(refrescar, 5000);
        });

        /**
         * Función para refrescar la página cada 5 segundos.
         */
        function refrescar(){
            //Actualiza la página
            location.reload();
        }
    </script>
</head>
<body>
<h1> Cat Fact </h1>
<p id="fact"><cite><?php echo $fact->fact; ?></cite></p>
<footer><p id="pie"> By: Joel Felipe Díaz Carissimi</p></footer>
</body>
</html>
