<?php
include("verificar_sessao.php");

require('conexao.php');

$sql = "select * from tbchamados t inner join tbcategoria c on c.codigo_categoria = t.codigo_categoria";

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
    <br>
    <div class="container">

        <table class='table table-bordered table-responsive'>
            <thead>
                <tr style="background-color: gainsboro;">
                    <th class="text-center">Título</th>
                    <th class="text-center">Descrição</th>
                    <th class="text-center">Categoria</th>
                </tr>
            </thead>
            <tbody>

                <?php
                while ($linha = mysqli_fetch_assoc($resultado)) {
                ?>
                    <tr class="text-center">
                        <td>
                            <?php echo $linha['titulo_chamado'] ?>
                        </td>
                        <td>
                            <?php echo $linha['descricao_chamado'] ?>
                        </td>
                        <td>
                            <?php echo $linha['nome_categoria'] ?>
                        </td>
                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
    </div>

</body>

</html>