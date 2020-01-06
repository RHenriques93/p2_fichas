<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-UA-compatible" content="IE-edge">
    
     <title>Ex.1</title>

    <meta name="description" content="Exercicio 1 - Programação II">
    <meta name="keywords" content="Exercicios, Programação, PHP">
    <meta name="authors" content="Rafael Henriques">

</head>

<body>

        <?php
        if (isset($_GET["numero"])) {

            $numero = $_GET["numero"];

if ($numero < 100) echo "O Nº -> $_GET[numero] que inseriu é menor que 100.";

elseif ($numero == 100) echo "O Nº -> $_GET[numero]  que inseriu é igual a 100.";

else echo "O Nº -> $_GET[numero] que inseriu é maior que 100.";

       
        } 
        
        
        ?>

<form name="ex1" method="GET" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
<label for="numero">Insira um Nº:</label>
<input type="number" name="numero"><br>
<input type="submit">
</form>

</body>