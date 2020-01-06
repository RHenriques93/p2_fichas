<?php
/* 
************ DESCRIÇÃO DO DOCUMENTO ************
* Nome do ficheiro: ex1.php *
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
    
     <title>Ex.1</title>

    <meta name="description" content="Exercicio 1 - Programação II">
    <meta name="keywords" content="Exercicios, Programação, PHP">
    <meta name="authors" content="Rafael Henriques">

</head>

<body>

        <?php
        if (isset($_GET["numero"])) {

           switch ($numero = $_GET["numero"]) {
    

 case "1": echo "Janeiro";
 break;
 case "2": echo "Fevereiro";
 break;
 case "3": echo "Março";
 break;
 case "4": echo "Abril";
 break;
 case "5": echo "Maio";
 break;
 case "6": echo "Junho";
 break;
 case "7": echo "Julho";
 break;
 case "8": echo "Agosto";
 break;
 case "9": echo "Setembro";
 break;
 case "10": echo "Outubro";
 break;
 case "11": echo "Nobembro";
 break;
 case "12": echo "Dezembro";
 break;
 default: echo "Nº Inválido.";
}
}
    ?>

<form name="ex1" method="GET" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
<label for="numero">Insira um Nº de 1 a 12:</label>
<input type="number" name="numero"><br>
<input type="submit">
</form>

</body>