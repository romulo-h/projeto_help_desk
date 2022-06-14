<?php
include("verificar_sessao.php");

// session_start();
require('conexao.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        .card-consultar-chamado {
            padding: 30px 0 0 0;
            width: 100%;
            margin: 0 auto;
        }
        .espaco-entre-titulo{
            margin-right: 6px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="home.php">
            <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            App Help Desk
        </a>
    </nav>

    <div class="container">
        <div class="row">

            <div class="card-consultar-chamado">
                <div class="card">
                    <div style="font-weight: bold" class="card-header text-center">
                        Consultar Chamado
                    </div>
                    <div style="margin: 20px;">
                        <form action="">
                            <div class="form-group" style="display:flex; justify-content: center;">
                                <div class="col-lg-8">
                                    <input name="busca" class="form-control" type="text" placeholder="Digite o título ou a categoria...">
                                </div>                                
                                <div class="col-lg-2" style="margin-top: 8px;">
                                    <input type="checkbox" class="form-group espaco-entre-titulo" name="ckbtitulo" value="titulo" data-name="titulo">Título
                                    <input type="checkbox"  class="form-group espaco-entre-titulo" name="ckbcategoria" value="categoria" data-name="categoria">Categoria
                                </div>
                                <button type="submit" name="acao" value="pesquisar" class="btn btn-primary" >Pesquisar</button>
                            </div>
                    </div>
                </div>

                <div class="text-center">
                </div>
            </div>
            </form>
        </div>

        <div class="card-body">

            <?php
            if (!isset($_GET['busca'])) {
            ?>
            
                <div class="card mb-3 bg-light" style="display: none;">
                    <div class="card-body">
                    </div>
                </div>
                <?php
            } else {
                $pesquisa = $_GET['busca'];
                $tipoPesquisa = "T0.titulo_chamado";

                if (isset($_GET['acao']) == "pesquisar") {
                    if (isset($_GET['ckbtitulo'])) {
                        $tipoPesquisa = "T0.titulo_chamado";
                    } else if (isset($_GET['ckbcategoria'])) {
                        $tipoPesquisa = "T1.nome_categoria";
                    }
                }

                $sql = "select T0.codigo_chamado, T0.titulo_chamado, T0.descricao_chamado, T1.nome_categoria 
                            from `tbchamados` T0 INNER JOIN `tbcategoria` T1 ON T0.codigo_categoria = T1.codigo_categoria 
                            WHERE $tipoPesquisa LIKE '%$pesquisa%';";

                $resultado = mysqli_query($con, $sql);
                if ($resultado->num_rows == 0) {
                ?>
                    <div class="card mb-3 bg-light">
                        <div class="card-body">
                            <h5 class="card-title">Nenhum resultado encontrado...</h5>
                        </div>
                    </div>
                    <?php
                } else {
                    while ($linha = $resultado->fetch_assoc()) {
                    ?>
                        <div class="card mb-3 bg-light">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $linha['titulo_chamado'] ?></h5>
                                <h6 class="card-subtitle mb-2 text-muted"><?php echo $linha['nome_categoria'] ?></h6>
                                <p class="card-text"><?php echo $linha['descricao_chamado'] ?></p>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>

            <?php } ?>
            <div style="display:flex; justify-content: right;">
                <div class="col-lg-2">
                    <a href="home.php" style="text-decoration: none;">
                    <button class="btn btn-lg btn-primary btn-block">Voltar</button></a>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
</body>
</html>