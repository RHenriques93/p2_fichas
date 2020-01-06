<?php
/* 
************ DESCRIÇÃO DO DOCUMENTO ************
* Nome do ficheiro: ex1.php *
* UC: P2 *
* @author Rafael Henriques *
* @version 1.0 *
* Data: Setembro 2019 *
* Descrição: primeiro exercício prático da ficha 4 *
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

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script src="js/jquery-3.4.1.min.js" async></script>
    <script src="js/bootstrap.min.js" async></script>

</head>

<body>
<header>
<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link <?php if (isset($_GET["op"])) if ($_GET["op"] == 1) echo "active";?>" href="ex1.php?op=1">Ínicio</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php if (isset($_GET["op"])) if ($_GET["op"] == 2) echo "active";?>" href="ex1.php?op=2">Quem Somos</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?php if (isset($_GET["op"])) if ($_GET["op"] == 3) echo "active";?>" href="ex1.php?op=3">Contatos</a>
  </li>
 
</ul>
</header>

<main>

<?php 
    if(isset($_GET["op"])) 
{    
    
    $op= $_GET["op"];
    if($op == 1)
        require("inicio.php");
        else if ($op == 2)
        require("quemsomos.php");
        else if($op == 3)
        require("contatos.php");
        else 
        echo "Erro";
       
 }
?>

</main>

</body>
</html>