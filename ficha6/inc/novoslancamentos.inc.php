  <!-- Page Content -->
  <div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-5 bg-primary whitetext text-center">
    <img class="" width="100px" src="img/83519.png"><br><br>
      <h1 class="display-3">Novos Lançamentos</h1><hr>
      <p class="lead">Descobre os ultímos filmes que temos para ti.</p>
        </header>

    <!-- Page Features -->

    <div class="row text-center justify-content-center">

    <?php

$db = new PDO("mysql:host=localhost; dbname=cinema","root","");
$dados = $db->query("SELECT filme.genero, filme.id_filme, filme.imgdir, filme.nome_pt, filme.ano_lancamento, realizador.nome FROM filme JOIN realizador ON filme.id_realizador = realizador.id_realizador ORDER BY id_filme DESC LIMIT 9");

foreach ($dados as $row) {

echo  '<div class="col-lg-3 col-md-3 mb-3">
  <div class="card h-100">
    <a href="filme.inc.php?id='.$row["id_filme"].'"><img class="card-img-top" src="img/'.$row["imgdir"]. '" alt=""></a>
   
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
