<?php
include("verificar_sessao.php");
?>

<html>

<head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
    .card-abrir-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
    }
    </style>
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

            <div class="card-abrir-chamado">
                <div class="card">
                    <div class="card-header text-center">
                        Cadastro de Chamado
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">

                                <form action="gravar_usuario.php" method="POST">
                                    <div class="form-group">
                                        <div class=col-lg-6>
                                            <label>Titulo do Chamado</label>
                                            <input name="txtTituloChamado" type="text" class="form-control">
                                        </div>
                                        <div class=col-lg-6>
                                            <label>Descrição</label>
                                            <input name="txtDesChamado" type="text" class="form-control">
                                        </div>
                                        <div class=col-lg-6>
                                            <label>Código da Categoria</label>
                                            <input name="txtCdCategoria" type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row mt-5">
                                        <div class="col-6">
                                            <button class="btn btn-lg btn-warning btn-block"
                                                type="submit">Voltar</button>
                                        </div>

                                        <div class="col-6">
                                            <button class="btn btn-lg btn-info btn-block" type="submit">Salvar</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>