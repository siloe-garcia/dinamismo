<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orden por definir</title>
</head>
<body style="background-color: #4567;">
<br>
<a style="margin-top: 100px; background: red; border: 1px solid black;" href="index.php">Regresar</a> 
</body>
</html>    
<?php  
    if(isset($_GET['submit'])){
        //se crea la variable para el indice dado por el usuario a traves del formulario
        $n=$_GET['n'];
        ?>
        <h2>Arreglo aleatorio desordenado</h2>
        <?php

        //se crea el ciclo con el tamaño dado y se rellena el arreglo con numeros aleatorios
        
        for ($i=0;$i<$n;$i++) {
            $aleatorio = rand(1,100);
            $arreglo[]=$aleatorio;
            echo 'Arreglo['.$i.']='.$aleatorio.'<br>';
        }
        
        ?>
        <h3>¿Con que método deseas ordenar el arreglo?</h3>
        <!--Se crean 2 formularios con el metodo post para agarrar los datos del array-->
        <form action="metodoB.php" method="POST">
            <label for="valor">Valores del arreglo:</label>
            <input type="text"  name="valores" id="valores" value="<?php echo  implode(",",$arreglo) ?>">        
            <input style=" background: green;"type="submit" name="b" value="Ordenar con burbuja"><br><br>
        </form>
        <form action="metodoS.php" method="POST">
            <label for="valor">Valores del arreglo:</label>
            <input type="text" name="valores" id="valores" value="<?php echo implode(",",$arreglo) ?>">        
            <input style=" background: green;" type="submit" name="s" value="Ordenar por seleccion">
        </form>  
      <?php       
    }    
?>

