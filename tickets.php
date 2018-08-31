<link href="./css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<script src="./js/bootstrap.min.js"></script>
<script src="./js/jquery.min.js"></script>
<style>
    .container-fluid {padding-top: 30px;}
    .row {margin-bottom: 15px;}
    .footer { position: relative; margin-top: -150px; height: 150px; clear:both; padding-top:20px; }
</style>
<!------ Include the above in your HEAD tag ---------->
<div id="wrapper" class="animate">
    <? include __DIR__ . '/./fragment/topbar.php'; ?>
    <div id="div-content" class="container-fluid">
        <div class="row">
            <div class="col">
                <div id="div-all-filters">
                    <div class="row div-filter">
                        <div class="col">
                            <input placeholder="critério" type="text" class="form-control">
                        </div>
                        <div class="col-sm-2">
                            <select class="form-control">
                                <option value="eq">=</option>
                                <option value="like">=</option>
                                <option value="gt"></option>
                                <option value="lt"><</option>
                                <option value="ge">>=/option>
                                <option value="le"><=</option>
                            </select>
                        </div>
                        <div class="col">
                            <input placeholder="valor" type="text" class="form-control">
                        </div>
                        <div class="col-sm-1">
                            <!--<div class="btn-group">-->
                                <button class="btn btn-primary"><i class="fa fa-plus"></i></button>
                                <button class="btn btn-danger"><i class="fa fa-times"></i></button>
                            <!--</div>-->
                        </div>
                    </div>
                    <div id="div-btn-filter" class="row">
                        <div class="col">
                            <button class="btn btn-block btn-primary"><i class="fa fa-search"></i>&nbsp;FILTRAR&nbsp;</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1">
                VER MAPA <i class="fa fa-map-marked"></i>
            </div>
        </div>
        <div id="div-tickets">
            <table class="table table-bordred table-striped">
                <thead>
                    <th><input type="checkbox" id="checkall"/></th>
                    <th>ID</th>
                    <th>Data de Criação</th>
                    <th>Cliente</th>
                    <th>Assunto</th>
                    <th>Status</th>
                    <th>Responsável</th>
                    <th>Prioridade</th>
                    <th></th>
                </thead>
                <tbody>
                <?
                $issues = ["Elevador quebrado","Porta emperrada","Torneira vazando"];
                ?>
                    <? for($i=0;$i<3;$i++) { ?> <tr>
                        <td><input type="checkbox" class="checkthis" /></td>
                        <td>#<?=354*($i+5)?></td>
                        <td>29/08/2018</td>
                        <td>Fulano da Silva Sauro</td>
                        <td><?=$issues[$i]?></td>
                        <td>Em andamento</td>
                        <td>João da Silva Sauro</td>
                        <td>
                            <span class="badge badge-pill badge-danger">ALTA</span>
                        </td>
                        <td>
                            <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><i class="fa fa-pencil-alt"></i></button>
                            <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><i class="fa fa-trash"></i></button>
                        </td>
                    </tr> <? } ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
</div>