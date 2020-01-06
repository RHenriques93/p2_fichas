<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="utf-8">
<title>Estudo Mini-Teste 2</title>
</head>

<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]?>">
<label for="numero">Insira um nº</label>
<input type="number" min=1 max=12 name="numero" required>

<input type="submit" value="Enviar">

<?php 

if(isset($_REQUEST["numero"])) {

function tabuada() {

        $n = $_REQUEST["numero"];
        
       for($i=1; $i<=10;$i++) {

                echo "<br>$n x $i = ".($n * $i);
       }
} 

tabuada();



}
?>