<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form class="formulario" action="index.php" method="get">
        <h1>Calculadora PHP</h1>
        <input type="text" name="numero1" placeholder="Ingrese un valor">
        <input type="text" name="numero2" placeholder="Ingrese un otro valor">
        <input type="submit" name="" value="RESPUESTA">
        <output type="number" name="">
    </form>
</body>
</html>

<?php
    if(isset($_GET['numero1']) && isset($_GET['numero2']) && is_numeric($_GET['numero1']) && is_numeric($_GET['numero2'])){
        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];
        echo $numero1 + $numero2;
    }else{
        echo "Error";
    }
?>