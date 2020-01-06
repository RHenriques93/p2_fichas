<?php
/* 
************ DESCRIÇÃO DO DOCUMENTO ************
* Nome do ficheiro: ex2.php *
* UC: P2 *
* @author Rafael Henriques *
* @version 1.0 *
* Data: Setembro 2019 *
* Descrição: segundo exercício prático *
************************************************ 
*/
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-UA-compatible" content="IE-edge">
    
     <title>Ex.2</title>

    <meta name="description" content="Exercicio 1 - Programação II">
    <meta name="keywords" content="Exercicios, Programação, PHP">
    <meta name="authors" content="Rafael Henriques">

</head>

<body>

<?php 
if (isset($_REQUEST["numeroa"],$_REQUEST["numerob"])) {

    $numeroa = $_REQUEST["numeroa"];
    $numerob = $_REQUEST["numerob"];

    if ($numeroa > $numerob) {

        $troca = $numeroa;
        $numeroa = $numerob;
        $numerob = $troca;
          }

 
for ($i=$numeroa; $i<=$numerob; $i++) {
    if ($i % 2 == 0) {
       echo $i ."<br>"; }
   
}
}

    ?>

<form name="ex1" method="GET" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
<label for="numeroa">Insira um Nº:</label>
<input type="number" min="0" name="numeroa"><br>
<label for="numerob">Insira um Nº:</label>
<input type="number" min="0" name="numerob"><br>
<input type="submit">
</form>

</body>