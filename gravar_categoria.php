<?php

require("verificar_sessao.php");
require('conexao.php');

$_varnomecategoria = $_POST['txtCategoria'];

$_sql = "INSERT INTO tbcategoria (nome_categoria) VALUES ('$_varnomecategoria');";

$resultado = mysqli_query($con, $_sql);

if($resultado) {
    echo "Registrado com sucesso!";
}
else {
    echo "Erro ao registrar!";
}
mysqli_close($con);

?>