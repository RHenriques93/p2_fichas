<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-UA-compatible" content="IE-edge">
    
    <title>Clube de Vídeo Online</title>

     <link rel="stylesheet" type="text/css" href="css/mystyle.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="icon" href="img/83519.png">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <script src="js/jquery-3.4.1.min.js" async></script>
    <script src="js/bootstrap.min.js" async></script>

</head>
<body class="bckgr">


<?php include("inc/header.inc.php");?>

<br>

<div class="container-fluid">
<div class="row text-center justify-content-center">

<?php


$values = $_GET["search"];

$db = new PDO("mysql:host=localhost; dbname=cinema","root","");
$dados = $db->query("SELECT filme.nome_original, filme.elenco, filme.genero, filme.sinopse, filme.link, filme.id_filme, filme.imgdir, filme.nome_pt, filme.ano_lancamento, realizador.nome FROM filme JOIN realizador ON filme.id_realizador = realizador.id_realizador WHERE filme.nome_pt LIKE '%$values%' OR filme.nome_original LIKE '%$values%' OR realizador.nome LIKE '%$values%' OR filme.genero LIKE '%$values%' OR filme.ano_lancamento LIKE '%$values%' ");

foreach ($dados as $row) {

  echo  '<div class="col-lg-3 col-md-3 mb-3">
    <div class="card h-100">
      <a href="filme.inc.php?id='.$row["id_filme"].'">
      <img class="card-img-top" src="img/'.$row["imgdir"]. '" alt="">
      </a>
     
      <div class="card-body">
        <h4 class="card-title">
          <a href="filme.inc.php?id='.$row["id_filme"].'">'.$row["nome_pt"].'</a>
        </h4>
        <p class="card-text">Género: '.$row["genero"].'</p>
        <p class="card-text">Realizador: '.$row["nome"].'</p>
        <p class="card-text">Data de Lançamento: '.$row["ano_lancamento"].'</p>
      </div>
      <div class="card-footer">
      <a href="filme.inc.php?id='.$row["id_filme"].'" class="btn btn-primary">Mais Informação!</a>
    </div>
    </div>
  </div>';
  
  
      }
  
  ?>
</div>
</div>


<?php include("inc/footer.inc.php");?>