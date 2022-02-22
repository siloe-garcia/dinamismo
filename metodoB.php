<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metodo Burbuja</title>
</head>
<body style="background-color: #4567;">
    <br>
    <br>
    <a style="margin-top: 100px; background: red; border: 1px solid black;" href="index.php">Regresar</a>
</body>
</html>    

<?php
 if (isset($_POST['valores'])) {
    $valores = explode(",",$_POST['valores']);
 }else{
    $valores = array('valores');
 }

 array_push($valores);

    echo '<h1 style="text-align: center;"> ORDENACION BURBUJA </h1>';
//se rrecorren los elementos del arreglo  con un ciclo for para ordenarlo
    $tamano=count($valores);
    for ($i=0; $i <$tamano ; $i++) { 
        for ($j=0; $j <$tamano-1 ; $j++) { 
            if ($valores[$j]>$valores[$j+1]) {
                $aux=$valores[$j];
                $valores[$j]=$valores[$j+1];
                $valores[$j+1]=$aux;
            }
        }
    }
    $i=0;
    foreach($valores as $a) {
        echo'Arreglo['.$i.']='.$a.'<br>';
        $i++;      
    }

?>
