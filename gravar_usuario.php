<?php

require("verificar_sessao.php");
require('conexao.php');

$_varnomeusuario = $_POST['txtNomeUsuario'];
$_vardescusuario = $_POST['txtDescUsuario'];
$_varsenhausuario = $_POST['txtSenhaUsuario'];
$_vartipoausuario = $_POST['txtSenhaUsuario'];


$_sql = "INSERT INTO tbusuarios (nome_usuario, descricao_usuario, descricao_senha, tipo_usuario)
 VALUES ('$_varnomeusuario', '$_vardescusuario', '$_varsenhausuario', '$_vartipoausuario');";

$resultado = mysqli_query($con, $_sql);

if($resultado) {
    echo "Registrado com sucesso!";
}
else {
    echo "Erro ao registrar!";
}
mysqli_close($con);

?>