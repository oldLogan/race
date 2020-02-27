<style>
    .dias_semana label{
        margin-right: 15px;
    }
</style>

<div class="container">
    <?php   $page = array("title" => "Agenda Produtos", "home" => "Dashboard", "homelink" => "/dashboard");
            require_once(APPPATH."views/template/breadcrumb.php") ?>

        <div class="row">
            
            <form action="/empresa/agenda/gravar" method="POST" class="form-horizontal">
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Jornada de trabalho <span class="text-red">*</span></label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="jornada_trabalho_inicio" placeholder="Horário inicio">
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="jornada_trabalho_fim" placeholder="Horário fim">
                    </div>
                </div>

                <div class="form-group">
                    <label for="nome" class="col-sm-2 control-label">Dias da semana <span class="text-red">*</span></label>
                    <div class="col-sm-10 dias_semana">
                        <input type="checkbox" name="dias_semana[]" id="DOM" value="0"> <label for="DOM">DOM</label>
                        <input type="checkbox" name="dias_semana[]" id="SEG" value="1"> <label for="SEG">SEG</label>
                        <input type="checkbox" name="dias_semana[]" id="TER" value="2"> <label for="TER">TER</label>
                        <input type="checkbox" name="dias_semana[]" id="QUA" value="3"> <label for="QUA">QUA</label>
                        <input type="checkbox" name="dias_semana[]" id="QUI" value="4"> <label for="QUI">QUI</label>
                        <input type="checkbox" name="dias_semana[]" id="SEX" value="5"> <label for="SEX">SEX</label>
                        <input type="checkbox" name="dias_semana[]" id="SAB" value="6"> <label for="SAB">SAB</label>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-fw fa-save"></i> Cadastrar
                        </button>
                    </div>
                </div>        
                <input type="hidden" id="id_empresa" name="id_empresa" value="<?=$usuariologado["id"]?>">
            </form>

        </div>
    </div>
</section>
