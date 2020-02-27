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

<link rel="stylesheet" href="<?=base_url(); ?>/assets/css/timeline-usuario.css">
<link rel="stylesheet" href="<?=base_url(); ?>/assets/css/jquery.timepicker.min.css">
<link rel="stylesheet" href="<?=base_url(); ?>/assets/plugins/jquery-ui/jquery-ui.min.css">

<div class="container">
    <?php   $page = array("title" => "Formulário de turma", "home" => "Dashboard", "homelink" => "/dashboard");
            require_once(APPPATH."views/template/breadcrumb.php") ?>

        <div class="row">
            
            <form action="/empresa/turma/gravar" method="POST" class="form-horizontal">
              
                <div class="form-group">
                    <label class="control-label col-sm-2" for="turno">Turno</label>
                    <div class="col-sm-5">
                        <select class="form-control" name="turno" id="turno">
                            <option value="1">Matutino</option>
                            <option value="2">Vespertino</option>
                            <option value="3">Noturno</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="qtd_aulas">Quantidade de aulas</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="qtd_aulas" id="qtd_aulas" required>
                    </div>

                    <label class="control-label col-sm-1" for="lotacao">Lotação</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" name="lotacao" id="lotacao" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label col-sm-2" for="hora_inicio">Hora Inicio</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control time" name="hora_inicio" id="hora_inicio" required>
                    </div>

                    <label class="control-label col-sm-1" for="hora_fim">Hora Fim</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control time" name="hora_fim" id="hora_fim" required>
                    </div>
                </div>   
                
                <div class="form-group">
                    <label class="control-label col-sm-2" for="data_inicio">Data Início</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control date" name="data_inicio" id="data_inicio" required>
                    </div>

                    <label class="control-label col-sm-1" for="data_fim">Data Fim</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control date" name="data_fim" id="data_fim" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-fw fa-save"></i> Cadastrar Turma
                        </button>
                    </div>
                </div>        
                <input type="hidden" id="id_empresa_produto_servico" name="id_empresa_produto_servico" value="<?=$id_empresa_produto_servico?>">
            </form>

        </div>
    </div>
</section>

<script src="<?=base_url(); ?>/assets/js/moment.min.js"></script>
<script src="<?=base_url(); ?>/assets/js/jquery.timepicker.min.js"></script>
<script src="<?=base_url(); ?>/assets/plugins/jquery-ui/jquery-ui.min.js"></script>

<script>

$.datepicker.setDefaults({
    dateFormat: 'dd/mm/yy',
    dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
    dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
    dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
    monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
    monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
    nextText: 'Proximo',
    prevText: 'Anterior',
    beforeShowDay: $.datepicker.noWeekends
});

var data_inicio = $('#data_inicio').datepicker().on("change", function() {
    data_fim.datepicker( "option", "minDate", getDate(this) );
}), data_fim = $('#data_fim').datepicker().on( "change", function() {
    data_inicio.datepicker( "option", "maxDate", getDate(this) );
});

$('.time').timepicker({
    useSelect: true,
    'timeFormat': 'H:i',
    'step': '30',
    'minTime': '08:00',
    'maxTime': '18:00',
    'showDuration': false
});
$(".ui-timepicker-select").addClass("form-control");  

function getDate(element) { 
    var date; 
    try { date = $.datepicker.parseDate('dd/mm/yy', element.value );     } 
    catch( error ) {    date = null; }
    return date;
}

</script>