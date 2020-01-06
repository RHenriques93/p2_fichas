<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-UA-compatible" content="IE-edge">
    
         <link rel="stylesheet" type="text/css" href="css/mystyle.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="icon" href="img/83519.png">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <script src="js/jquery-3.4.1.min.js" async></script>
    <script src="js/bootstrap.min.js" async></script>

   
<?php
$db = new PDO("mysql:host=localhost; dbname=cinema","root","");

$id = $_REQUEST["id"];
$dados = $db->query("SELECT filme.elenco, filme.genero, filme.sinopse, filme.link, filme.id_filme, filme.imgdir, filme.nome_pt, filme.ano_lancamento, realizador.nome FROM filme JOIN realizador ON filme.id_realizador = realizador.id_realizador WHERE id_filme = $id");



foreach ($dados as $row) {

  echo '<title>'.$row["nome_pt"].'</title>';

}
?>




</head>


<body class="bckgr">


<?php include("inc/header.inc.php");?>

<?php


$id = $_REQUEST["id"];

$db = new PDO("mysql:host=localhost; dbname=cinema","root","");
$dados = $db->query("SELECT filme.elenco, filme.genero, filme.sinopse, filme.link, filme.id_filme, filme.imgdir, filme.nome_pt, filme.ano_lancamento, realizador.nome FROM filme JOIN realizador ON filme.id_realizador = realizador.id_realizador WHERE id_filme = $id");

foreach ($dados as $row) {

echo '<div class="container-fluid ">

<div class="row justify-content-center ">

  <div class="col-lg-8 ">

    <div class="card mt-4 ">
          
            <div class="card-body">
        <h3 class="card-title">'.$row["nome_pt"].'</h3>
        <hr>
        
        <h4>Sinopse</h4>
        <p class="card-text">'.$row["sinopse"].'</p>
        <hr>

        <div class="col-sm-4 rounded mx-auto d-block">
        <img class="card-img-top" src="img/'.$row["imgdir"]. '" alt=""></a></div>
        
        <hr>
        <h5>Realizador: '.$row["nome"].'</h5>
        <hr>
        <h6>Género: '.$row["genero"].'</h6>
        <hr>
        <h6>Data de Lançamento:'.$row["ano_lancamento"].'</h6>
        </div>
    </div>

    <br>
    <!-- /.card -->
    <div class="embed-responsive embed-responsive-21by9">
  <iframe class="embed-responsive-item" src="'.$row["link"].'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

</div>
    
    <div class="card card-outline-secondary my-4">
      <div class="card-header">
        <strong>Elenco</strong>
      </div>
      <div class="card-body">
        <p>'.$row["elenco"].'</p>
        <hr>
        </div>
    </div>
 

  </div>


</div>

</div>';

}

  ?>

<?php include("inc/footer.inc.php");?>