
<link rel="stylesheet" href="<?=base_url(); ?>/assets/css/busca-avancada.css">
<div class="container">
<?php   $page = array("title" => "Serviços", "home" => "Dashboard", "homelink" => "/dashboard");
            require_once(APPPATH."views/template/breadcrumb.php") ?>

</div>

<div class="container-fluid" style="margin-top: -41px;">

    <div class="row">

        <section>
            <div class="container">

                <div class="row">

                    <div class="board">
                        <div class="row">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <small>Você está em:</small>
                                    <select name="slcEstados" id="slcEstados" class="form-control slcMeuEstado">
                                    <?php  foreach($estados as $estado){ ?>
                                        <option value="<?=$estado['id']?>" <?php if($estado["id"]==$usuarioLogado["id_estado"]){echo"selected";}?>>
                                            <?=$estado['descricao']?>
                                        </option>
                                    <?php   }   ?>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="row">

                            <form class="form" action="">
                                <div class="form-group">
                                    <div class="col-sm-4">
                                        <label class="control-label">Serviço</label>
                                        <select name="slcProduto" id="slcProduto" class="form-control">
                                            <option value="0">Todos os produtos</option>
                                        <?php  foreach($produtos as $produto){ ?>
                                            <option value="<?=$produto['id']?>"><?=$produto['titulo']?></option>
                                        <?php   }   ?>

                                        </select>
                                    </div>

                                    <div class="col-sm-4">
                                        <label class="control-label">Cidade</label>
                                        <select name="slcCidade" id="slcCidade" class="form-control">
                                            <option value="">--</option>
                                        </select>
                                    </div>

                                    <div class="col-sm-4">
                                        <label class="control-label">Bairro</label>
                                        <select name="slcBairro" id="slcBairro" class="form-control">
                                            <option value="">--</option>
                                        </select>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>

                                <div class="form-group text-center">
                                    <button id="btnBuscar" type="button" class="btn btn-primary"><i class="fa fa-fw fa-search"></i>  Buscar</button>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="empresa-lista" id="divResultado"></div>
                </div>

            </div>
        </section>

    </div>
</div>

<script src="<?=base_url(); ?>/assets/js/busca-avancada.js"></script>