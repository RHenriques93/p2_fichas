<header>

<!-- Grey with black text -->

<nav class="navbar navbar-expand-sm bg-primary navbar-dark font-weight-bold whitetext">
<a class="navbar-brand" href="home.php"><img class="img-responsive" style="width:25px; margin-bottom:10px;" src="img/83519.png"></a>
  <ul class="navbar-nav">
    <li class="nav-item <?php if (isset($_GET["op"])) if ($_GET["op"] == 0) echo "active";?>">
      <a class="nav-link" href="home.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?php if (isset($_GET["op"])) if ($_GET["op"] == 1) echo "active";?>" href="home.php?op=1">Novos Lançamentos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?php if (isset($_GET["op"])) if ($_GET["op"] == 2) echo "active";?>" href="home.php?op=2">Mais Populares</a>
    </li>

    <li class="nav-item">
      <a class="nav-link <?php if (isset($_GET["op"])) if ($_GET["op"] == 3) echo "active";?>" href="home.php?op=3">Todos os Filmes</a>
    </li>

  </ul>

  <nav class="navbar navbar-expand-sm ml-auto">
  <form class="form-inline" action="actionpage.inc.php">
    <input class="form-control mr-sm-2" type="text" placeholder="Nome do Filme" name="search">
    <button class="btn btn-success" type="submit">Procurar</button>
  </form>
</nav>

</nav>

</header>





