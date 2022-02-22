<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metodo por seleccion</title>
</head>
<body style="background-color: #4567;"> 
    <br>
    <br>
    <a style="margin-top: 2em; background: red; border: 1px solid black;" href="index.php">Regresar</a>
</body>
</html>
<?php
 if (isset($_POST['valores'])) {
    $valores = explode(",",$_POST['valores']);
 }else{
    $valores = array('valores');
 }

 array_push($valores);

    echo '<h1 style="text-align: center;"> ORDENACION POR SELECCION </h1>';
//se rrecorren los elementos del arreglo  con un ciclo for para ordenarlo
    $tamano=count($valores);
    for ($i=0; $i <$tamano-1; $i++) { 
        for ($j=$i+1; $j <$tamano; $j++) { 
            if ($valores[$i]>$valores[$j]) {
                $aux=$valores[$i];
                $valores[$i]=$valores[$j];
                $valores[$j]=$aux;
            }
        }
    }
    $i=0;
    foreach($valores as $a) {
        echo'Arreglo['.$i.']='.$a.'<br>';
        $i++;      
    }

?>
