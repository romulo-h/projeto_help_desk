<?php
include("verificar_sessao.php");

// session_start();
require('conexao.php');

$sql = "select * from `tbchamados`";

$resultado = mysqli_query($con, $sql);
$linha = mysqli_num_rows($resultado);

if ($linha > 0) {
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css" />
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.3.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
</head>

<body>

  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
      App Help Desk
    </a>
  </nav>

  <div class="container">
    <div class="row">

      <div class="card-consultar-chamado">
        <div class="card">
          <div class="card-header">
            Consultar Chamado
          </div>

          <div class="card-body">

            <?php
            while ($linha = mysqli_fetch_assoc($resultado)) {
            ?>

              <div class="card mb-3 bg-light">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $linha['titulo_chamado'] ?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?php echo $linha['codigo_categoria'] ?></h6>
                  <p class="card-text"><?php echo $linha['descricao_chamado'] ?></p>

                </div>
              </div>

            <?php
            }

            ?>

            <div class="row mt-5">
              <div class="col-6">
                <button class="btn btn-lg btn-warning btn-block" type="submit">Voltar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>