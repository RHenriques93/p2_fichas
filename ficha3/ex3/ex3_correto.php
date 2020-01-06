<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="utf-8">
<title>Estudo Mini-Teste 2</title>
</head>

<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]?>">
<label for="numero">Insira um nº</label>
<input type="number" min=1 max=12 name="numero" required>
<label for="numero2">Insira </label>
<input type="number" min=1 max=12 name="numero2" required>

<input type="submit" value="Enviar">

<?php 

if(isset($_REQUEST["numero"],$_REQUEST["numero2"])) {

        $n = $_REQUEST["numero"];
        $n2 = $_REQUEST["numero2"];

while ($n <= $n2) {

    for($i=$n; $i<=$n2; $i++){
    echo "<br>$n x $i =".($n * $i);
    }
    echo "<br>";
 $n++;   
}





}
