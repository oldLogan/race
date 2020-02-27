<style>
    .dias_semana label{
        margin-right: 15px;
    
    }
    .semanas{
        white-space: nowrap;
    }
    .semanas div{
        display: inline-block;
        margin-right: 8px;
    }
    .table-servicos td{
        vertical-align: middle !important;
    }
    .table-servicos td input[type="text"]{
        width: 40%;
        display: inline-block;
    }
    .table-servicos label{
        margin-bottom: 0px;
    }
</style>

<div class="container">
    <?php   $page = array("title" => "Formulário de Agenda", "home" => "Dashboard", "homelink" => "/dashboard");
            require_once(APPPATH."views/template/breadcrumb.php") ?>

        <div class="row">
            
            <form action="/empresa/agenda/gravar" method="POST" class="form-horizontal">
              
                <div class="form-group">
                    <div class="col-sm-12">
                        <table class="table table-striped table-servicos">
                        <tr>
                            <th>Serviço</th>
                            <th>Horario expediente</th>
                            <th>Tempo (min)</th>
                            <th>Dias da Semana</th>
                        </tr>
                        <?php foreach ($servicos as $servico) { ?>
                            <tr>
                                <td style="width: 35%;"><?=$servico["titulo"]?></td>
                                <td>
                                    <input type="text" class="form-control input-sm" name="inicio_expediente_<?=$servico["id"]?>" placeholder="Início expediente" required>
                                    <input type="text" class="form-control input-sm" name="fim_expediente_<?=$servico["id"]?>" placeholder="Fim expediente" required>
                                </td>
                                <td>
                                    <input type="text" class="form-control input-sm" name="tempo_aula_<?=$servico["id"]?>" placeholder="Tempo aula" required>
                                    <input type="text" class="form-control input-sm" name="intervalo_<?=$servico["id"]?>" placeholder="Intervalo" required>
                                </td>
                                <td class="semanas text-center">
                                    <div>
                                        <label for="DOM_<?=$servico["id"]?>">D</label><br>
                                        <input type="checkbox" name="dias_semana_<?=$servico["id"]?>[]" id="DOM_<?=$servico["id"]?>" value="0"> 
                                    </div>
                                    <div>
                                        <label for="SEG_<?=$servico["id"]?>">S</label><br>
                                        <input type="checkbox" name="dias_semana_<?=$servico["id"]?>[]" id="SEG_<?=$servico["id"]?>" value="1">
                                    </div>
                                    <div>
                                        <label for="TER_<?=$servico["id"]?>">T</label><br>
                                        <input type="checkbox" name="dias_semana_<?=$servico["id"]?>[]" id="TER_<?=$servico["id"]?>" value="2">
                                    </div>
                                    <div>
                                        <label for="QUA_<?=$servico["id"]?>">Q</label><br>
                                        <input type="checkbox" name="dias_semana_<?=$servico["id"]?>[]" id="QUA_<?=$servico["id"]?>" value="3">
                                    </div>
                                    <div>
                                        <label for="QUI_<?=$servico["id"]?>">Q</label><br>
                                        <input type="checkbox" name="dias_semana_<?=$servico["id"]?>[]" id="QUI_<?=$servico["id"]?>" value="4">
                                    </div>
                                    <div>
                                        <label for="SEX_<?=$servico["id"]?>">S</label><br>
                                        <input type="checkbox" name="dias_semana_<?=$servico["id"]?>[]" id="SEX_<?=$servico["id"]?>" value="5">
                                    </div>
                                    <div>
                                        <label for="SAB_<?=$servico["id"]?>">S</label><br>
                                        <input type="checkbox" name="dias_semana_<?=$servico["id"]?>[]" id="SAB_<?=$servico["id"]?>" value="6">                                
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                        </table>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-fw fa-save"></i> Cadastrar Agenda
                        </button>
                    </div>
                </div>        
                <input type="hidden" id="id_empresa" name="id_empresa" value="<?=$usuariologado["id"]?>">
            </form>

        </div>
    </div>
</section>
