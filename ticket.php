<?php
/**
 * Created by PhpStorm.
 * User: brlaranjeira
 * Date: 29/08/18
 * Time: 16:32
 */?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Ticket #1234</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <style>
        .container-fluid {padding-top: 30px;}
        .row {margin-bottom: 15px;}
        .footer { position: relative; margin-top: -150px; height: 150px; clear:both; padding-top:20px; }
    </style>
</head>
<body>
<div>
    <? include __DIR__ . '/./fragment/topbar.php'; ?>
    <div id="div-content" class="container-fluid">

        <div class="card">
            <div class="card-header">#1234 - Elevador quebrado - Prioridade: Normal</div>
            <div class="row">
                <div class="col-3">
                    <img class="img-thumbnail rounded" src="./img/uBnTY.png" alt="MAP HERE">
                </div>
                <div class="col">
                    <div class="row mb-4">
                        <div class="col">
                            Descrição descrição descrição descrição descrição descrição descrição descrição descrição
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <h4>Solicitante</h4>
                                    <label>John McClane</label>
                                </div>
                                <div class="col">
                                    <h4>Atendente</h4>
                                    <div class="dropdown">
                                        <a class="btn btn-primary dropdown-toggle" href="#" id="dropPrioridade" data-toggle="dropdown">ALEX MURPHI</a>
                                        <div class="dropdown-menu" aria-labelledby="dropPrioridade">
                                            <a class="dropdown-item" href="#">BRUCE WAYNE</a>
                                            <a class="dropdown-item" href="#">CLARK KENT</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h4>Orçamento</h4>
                                    <label>R$ 332,00</label>&nbsp;<i title="ITEM 1<br/>ITEM 2" data-toggle="tooltip" data-placement="right" class="fa fa-info-circle"></i>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h4>Prioridade</h4>
                                    <div class="dropdown">
                                        <a class="btn btn-primary dropdown-toggle" href="#" id="dropPrioridade" data-toggle="dropdown">ALTA</a>
                                        <div class="dropdown-menu" aria-labelledby="dropPrioridade">
                                            <a class="dropdown-item" href="#">URGENTE</a>
                                            <a class="dropdown-item" href="#">ALTA</a>
                                            <a class="dropdown-item" href="#">NORMAL</a>
                                            <a class="dropdown-item" href="#">BAIXA</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <h4>Status</h4>
                                    <div class="dropdown">
                                        <a class="btn btn-primary dropdown-toggle" href="#" id="dropStatus" data-toggle="dropdown">EM ANDAMENTO</a>
                                        <div class="dropdown-menu" aria-labelledby="dropStatus">
                                            <a class="dropdown-item" href="#">EM ANDAMENTO</a>
                                            <a class="dropdown-item" href="#">EM ANÁLISE</a>
                                            <a class="dropdown-item" href="#">NOVO</a>
                                            <a class="dropdown-item" href="#">REJEITADO</a>
                                            <a class="dropdown-item" href="#">CONCLUIDO</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <h4>Data de Abertura</h4>
                                    <label>19/08/2018</label>
                                </div>
                                <div class="col">
                                    <h4>Data de Modificação</h4>
                                    <label>Ticket ainda não foi modificado</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card px-3">
                                <h4 class="text-center">Timeline</h4>
                            <? for ($i=0;$i<4;$i++) { ?>
                                <div class="row">
                                    <div class="col">
                                        <h5>[Fulano da Silva] 29/08/2018 09:32:</h5>
                                        Texto texto texto<?=$i?>
                                    </div>
                                </div>
                            <? } ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row" style="padding-top: 20px;">
            <div class="col">
                <div class="card">
                    <div class="card-header">Material Necessário</div>
                    <? for ($i=0;$i<4;$i++) { ?>
                        <div class="row">
                            <div class="col ml-2">MATERIAL XYZW</div>
                            <div class="col-3 text-right">R$ 123,20<!--</div>
                            <div class="col-1">-->
                                <span class="badge badge-pill badge-info"><i class="fa fa-pencil-alt"></i></span>
                                <span class="badge badge-pill badge-danger"><i class="fa fa-trash"></i></span>
                            </div>
                        </div>
                    <? } ?>
                    <div class="row">
                        <div class="col">
                            <input class="form-control" type="text" placeholder="DESCRIÇÃO">
                        </div>
                        <div class="col-3">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="0.00">
                                <div class="input-group-append"><span class="input-group-text"><i class="fa fa-plus"></i></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <label for="ta-resposta"><h3>Enviar Resposta</h3></label>
                <textarea placeholder="Insira uma resposta, caso necessário" name="ta-resposta" id="ta-resposta" class="form-control" rows="10"></textarea>
                <button class="btn btn-block btn-primary">Enviar</button>
            </div>
        </div>
    </div>
</div>
</body>
<script src="./js/jquery.min.js"></script>
<script src="./js/popper.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip({html:true});
    });
</script>
</html>
<!--uykDfHIABWs9AXx8McNBKu3QAkvQ31DP-->