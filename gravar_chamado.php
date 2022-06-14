<?php

require("verificar_sessao.php");
require('conexao.php');

$_vardescchamado = $_POST['txtDesChamado'];
$_vartitulochamado = $_POST['txtTituloChamado'];
$_varcodcategoria = $_POST['txtCdCategoria'];


$_sql = "INSERT INTO tbchamados (descricao_chamado, titulo_chamado, codigo_categoria)
 VALUES ('$_vardescchamado', '$_vartitulochamado', '$_varcodcategoria');";

$resultado = mysqli_query($con, $_sql);

if($resultado) {
    echo "Registrado com sucesso!";
}
else {
    echo "Erro ao registrar!";
}
mysqli_close($con);

?>