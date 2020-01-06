<?php
/* 
************ DESCRIÇÃO DO DOCUMENTO ************
* Nome do ficheiro: ex3.php *
* UC: P2 *
* @author Rafael Henriques *
* @version 1.0 *
* Data: Setembro 2019 *
* Descrição: terceiro exercício prático *
************************************************ 
*/
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-UA-compatible" content="IE-edge">
    
     <title>Ex.3</title>

    <meta name="description" content="Exercicio 1 - Programação II">
    <meta name="keywords" content="Exercicios, Programação, PHP">
    <meta name="authors" content="Rafael Henriques">

</head>

<body>

<?php 
if (isset($_REQUEST["numeroa"],$_REQUEST["numerob"])) {

    $numeroa = $_REQUEST["numeroa"];
    $numerob = $_REQUEST["numerob"];
    $total = 1;

    if ($numeroa > $numerob) {

        $troca = $numeroa;
        $numeroa = $numerob;
        $numerob = $troca;
          }
   
   while ($numeroa < $numerob) {

    $total = $total * ($numeroa + 1);
    echo "$numeroa X " .($numeroa+1) ." = ";  
    echo $total ."<br>";
    $numeroa++;
    
   }
  

}

    ?>

<form name="ex1" method="GET" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
<label for="numeroa">Insira um Nº:</label>
<input type="number" min="1" name="numeroa"><br>
<label for="numerob">Insira um Nº:</label>
<input type="number" min="1" name="numerob"><br>
<input type="submit">
</form>

</body>