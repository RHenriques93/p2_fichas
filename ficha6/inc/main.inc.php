<br>

<div class="container-fluid">
  
<section id="about">
    
      <div class="row">

      
        
        <div class="col-lg-8 jumbotron my-4 bg-primary mx-auto text-center whitetext">
        <img class="" width="100px" src="img/83519.png"><br><br>
          <h1 class="font-weight-bold">Bem Vindo ao Vídeo Clube Online</h1><hr>
          <p class="lead">Aqui podes encontrar os mais recentes filmes.</p>
        </div>
      </div>
    
  </section>


 
<hr>


<div class="row justify-content-center">




  <?php

$db = new PDO("mysql:host=localhost; dbname=cinema","root","");
$dados = $db->query("SELECT filme.genero, filme.id_filme, filme.imgdir, filme.nome_pt, filme.ano_lancamento, realizador.nome FROM filme JOIN realizador ON filme.id_realizador = realizador.id_realizador ORDER BY id_filme DESC LIMIT 3");

foreach ($dados as $row) {

echo  '<div class="col-md-2">
  <div class="card h-100">
    <a href="filme.inc.php?id='.$row["id_filme"].'">
    <img class="card-img-top" src="img/'.$row["imgdir"]. '" alt="">
    </a>
   
    <div class="card-body">
      <h4 class="card-title">
        <a href="filme.inc.php?id='.$row["id_filme"].'">'.$row["nome_pt"].'</a>
      </h4>
      <p class="card-text"><strong>Género:</strong> '.$row["genero"].'</p>
      <p class="card-text"><strong>Realizador:</strong> '.$row["nome"].'</p>
      <p class="card-text"><strong>Data de Lançamento:</strong> '.$row["ano_lancamento"].'</p>
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

<br>
