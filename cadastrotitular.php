<?php
/**
 * Created by PhpStorm.
 * User: brlaranjeira
 * Date: 31/08/18
 * Time: 11:13
 */
?>

<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Titular</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
<div>
    <? include __DIR__ . '/./fragment/topbar.php'; ?>
    <div class="container-fluid mt-2">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="div-cadastro-individual-tab" data-toggle="tab" href="#div-cadastro-individual" role="tab" aria-controls="div-cadastro-individual" aria-selected="true">Cadastro Individual</a>
                <a class="nav-item nav-link" id="div-cadastro-massivo-tab" data-toggle="tab" href="#div-cadastro-massivo" role="tab" aria-controls="div-cadastro-massivo" aria-selected="false">Cadastro em Massa</a>
            </div>
        </nav>
        <div class="tab-content pt-2" id="nav-tabContent">
            <div class="tab-pane fade show active" id="div-cadastro-individual" role="tabpanel" aria-labelledby="div-cadastro-individual-tab">
            <!--<div id="div-cadastro-individual" class="mt-3 tab-pane fade show active" role="tabpanel" aria-labelledby="nav-cadastro-individual">-->
                <h4>Cadastro de Titular</h4>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="titular-nome">Nome</label>
                            <div class="input-group">
                                <input class="form-control" type="text" name="titular-nome" id="titular-nome">
                                <div class="input-group-append"><span class="bg-info text-white input-group-text"><i class="fa fa-pencil-alt"></i></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="form-group">
                            <label for="titular-cpf">CPF</label>
                            <div class="input-group">
                                <input class="form-control" type="text" name="titular-cpf" id="titular-cpf">
                                <div class="input-group-append"><span class="bg-info text-white input-group-text"><i class="fa fa-pencil-alt"></i></span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col"></div>
                </div>
            </div>
            <div class="tab-pane fade" id="div-cadastro-massivo" role="tabpanel" aria-labelledby="div-cadastro-massivo-tab">
            <!--<div id="div-cadastro-massivo" class="mt-3 tab-pane fade" role="tabpanel" aria-labelledby="nav-cadastro-massivo">-->
                <h4>Cadastro Massivo</h4>
            </div>
        </div>
    </div>

</div>
</body>
<script src="./js/jquery.min.js"></script>
<script src="./js/popper.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
</html>