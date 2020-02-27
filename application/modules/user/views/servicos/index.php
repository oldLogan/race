<link rel="stylesheet" href="<?=base_url(); ?>/assets/css/timeline-usuario.css">
<link rel="stylesheet" href="<?=base_url(); ?>/assets/css/jquery.timepicker.min.css">
<link rel="stylesheet" href="<?=base_url(); ?>/assets/plugins/jquery-ui/jquery-ui.min.css">

<style>
    #content-turmas .list-group-item table{
        width: 100%;
    }
</style>

<div class="container">
<?php   $page = array("title" => "Serviços", "home" => "Dashboard", "homelink" => "/dashboard");
            require_once(APPPATH."views/template/breadcrumb.php") ?>

</div>

<div class="container">

    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th width="10%">Ordem</th>
                    <th>Produto</th>
                    <th>Total</th>
                    <th>Data</th>
                    <th></th>
                </tr>
            </thead>    
        <?php foreach ($cliente_produto as $item) {?>
            <tr>
                <td>#<?=strtoupper($item["chave"])?></td>
                <td><?=$item["titulo"]?></td>
                <td><?=numberToMoney($item["valor"])?></td>
                <td><?=date("d/m/Y H:i:s", strtotime($item["data"]));?></td>
                <td>
                    <a class="btn btn-info btn-xs btn-detalhes" href="javascript:void(0)" chave="<?=$item["chave"]?>">Ver detalhes</a>
                </td>
			
				<?php if($item["id_produto"] != 20){ ?>
				<td>
					<a class="btn btn-info btn-xs btn-detalhes" href="/busca" >Adicionar Clínica</a>
				</td>
				<?php }?>
				
            </tr>
        <?php } ?>
        </table>
    </div>
</div>

<div class="container">

    <div class="row">
        <div class="col-md-12">
            <div class="" style="margin: 20px 0; border-bottom: 1px solid #ddd;">
                <h4>Timeline</h4>
            </div>
            <ul class="timeline"></ul>
        </div>
    </div>

</div>

<div class="modal fade" id="agendadata" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Agendamento</h4>
      </div>
        <form action="/user/servicos/gravarAgendamento" method="POST">
        <div class="modal-body">
            <div>
                <div class="form-group">
                    <label for="data" class="control-label">Data <i class="fa fa-calendar"></i></label>
                    <input type="text" class="form-control datapicker" name="data" id="data">
                </div>
                <div class="form-group">
                    <label for="horario" class="control-label">Horário</label>
                    <select class="form-control" id="horario" name="horario"></select>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            <button type="submit" class="btn btn-primary" id="btnSalvarAgenda">Salvar</button>
        </div>
            <input type="hidden" name="id_agenda" id="id_agenda">
        </form>
    </div>
  </div>
</div>

<div class="modal fade" id="modalturma" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Turmas</h4>
      </div>
        <div class="modal-body">
            <div>
                <div class="form-group">
                    <label for="data" class="control-label">Turmas <i class="fa fa-graduation-cap"></i></label>
                    <ul class="list-group" id="content-turmas">

                    </ul>
                    <span id="count-turmas"></span>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalgrade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content ">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Grade horária</h4>
        </div>
        <form action="/user/servicos/gravarTurmaChamada" method="POST" class="form-horizontal">
        <div class="modal-body">
            <div class="form-group">
                <label for="" class="col-sm-2">Data Inicio</label>
                <div class="col-sm-3">
                    <input type="text" name="data_inicio" id="data_inicio" class="form-control data">
                </div>

                <label for="" class="col-sm-2">Hora inicio</label>
                <div class="col-sm-3">
                    <input type="text" name="hora_inicio" id="hora_inicio" class="form-control horario">
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            <button type="submit" class="btn btn-primary" id="btnSalvarAgenda">Montar</button>
        </div>
        <input type="hidden" name="id_turma_pauta" id="id_turma_pauta">
        </form>
    </div>
  </div>
</div>

<script>

    var servicos_turmas = [];
    $(".btn-detalhes").click(function(){
        var chave = $(this).attr("chave");
        get("/ws/buscarProdutoServicosPorChave/"+chave, function(data){
            $(".timeline").html('');
            servicos_turmas = data;

            var html = "";
            $.each(servicos_turmas, function(i, item){
                if(item.id_servico != "23"){
				count = i +1;
                html += '   <li class="timeline-item"> ';
                html += '       <div class="timeline-badge" title="Número do passo">'+count+'</div> ';
                html += '           <div class="timeline-panel"> ';
                html += '           <div class="timeline-heading"> ';
                if(item.ordem == "1"){
				html += '               <h5 class="timeline-title">DETRAN</h5> ';
                html += '               <p>Ir ao local agendado para a coleta da fotografia, assinatura virtual e biometria, além de cadastrar o celular para acompanhar o processo.</p>';
				}else{	
				html += '               <h5 class="timeline-title">'+item.titulo+'</h5> ';
                html += '               <p>';
                html += '                   <span title="Empresa"><i class="fa fa-home"></i> '+item.nomefantasia+'</span> | ';
                html += '                   <span title="Telefone"><i class="fa fa-phone"></i> '+item.telefone+'</span> - ';
                html += '                   <span title="Endereço">'+item.endereco+'</span>';
                html += '               </p> ';
				}
				
                if(item.ordem == "1"){
					html += '               <a class="btn btn-primary" href="http://www.detran.df.gov.br/agendamento-biometrico/" target="_blank"><i class="glyphicon glyphicon-calendar"></i> Agendamento Biometria</a> ';
				}/*else						
				if(item.tem_aula == "1"){
                    if(item.id_turma){
                        html += '               <span class="badge info-color-dark"> Turma '+item.codigo+'</span> ';
                        if(item.id_servico == "8" && item.tem_grade != "1")
                            html += '               <button data-id-turma="'+item.id_turma+'" data-id_empresa_produto_servico="'+item.id_empresa_produto_servico+'" type="button" class="btn btn-xs btn-primary btn-cliente-turma-chamada"><i class="fa fa-graduation-cap"></i>Montar grade horária</button> '; 
                        else if(item.id_servico == "8" && item.tem_grade == "1" && item.id_servico != "23")
                        html += '               <span class="badge success-color"> Grade criada, aguarde a liberação </span> ';
                    }else{
                        html += '               <button data-id_empresa_produto_servico="'+item.id_empresa_produto_servico+'" type="button" class="btn btn-xs btn-primary btn-cliente-turma"><i class="fa fa-graduation-cap"></i> Selecionar turma</button> ';
                    }
                }else if(item.horario == null){
                    html += '               <button data-id_empresa_produto_servico="'+item.id_empresa_produto_servico+'" type="button" class="btn btn-xs btn-primary btn-cliente-agenda"><i class="glyphicon glyphicon-calendar"></i> Agendar Data</button> ';
                }else {
                    html += '               <span class="badge info-color-dark"> Agendado dia '+item.data_event+' - '+item.horario+'</span> ';
					
                }*/
				
                // html += '               <p><small class="text-muted"><i class="glyphicon glyphicon-calendar"></i> -- </small></p> ';
                html += '           </div> ';
                // html += '           <div class="timeline-body"> ';
                // html += '               <p>--</p> ';
                // html += '           </div> ';
                html += '       </div> ';
                html += '   </li>';
				}
            });

            $(".timeline").html(html);

            $(".timeline-heading button.btn-cliente-agenda").click(function(){
                var id_empresa_servico = $(this).attr("data-id_empresa_produto_servico");

                busca_agenda(id_empresa_servico);
            });

            $(".timeline-heading button.btn-cliente-turma").click(function(){
                var id_empresa_servico = $(this).attr("data-id_empresa_produto_servico");

                busca_turma(id_empresa_servico);
            });

            $(".timeline-heading button.btn-cliente-turma-chamada").click(function(){
                var id_turma = $(this).attr("data-id-turma");

                monta_grade(id_turma);
            });

        });
    });

    function monta_grade(_id_turma){
        var _item = servicos_turmas.filter(function(a){ return a.id_turma == _id_turma})[0];

        $("#id_turma_pauta").val(_item.id_turma_pauta);
        $("#modalgrade").modal('show');

        var html = "";
        // html += '<tr><td colspan="2"><label>Instrutor</label><select class="instrutor form-control"></select></td></tr>';
        // for (var i = 1, x = 0; i <= 20; i++) {
        //     if(i == 1)
        //         html += "<tr>";

        //     if(x == 2){
        //         html += "</tr><tr>";
        //         x = 0;
        //     }

        //     html += '<td>';
        //     html += '   <div class="row">';
        //     html += '       <label class="control-label col-sm-4">Aula nº:'+i+'</label>';
        //     html += '       <div class="col-sm-4">';
        //     html += '           <input type="text" name="data-'+i+'" class="form-control data data-'+i+'" aula="'+i+'">';
        //     html += '       </div>';
        //     html += '       <div class="col-sm-4">';
        //     html += '           <select class="horario" name="horario-'+i+'"></select>';
        //     html += '       </div>';
        //     html += '   </div>';
        //     html += '</td>';

        //     x++;
        // }


        $("#tbl-gradehoraria").html(html);

        $('.horario').timepicker({
            'useSelect': true,
            'timeFormat': 'H:i',
            'step': 30,
            'minTime': '08:00',
            'maxTime': '22:00',
            'showDuration': false
        });
        $(".ui-timepicker-select").addClass("form-control");

        var data_inicio_part = String(_item.data_inicio).substring(0,10).split('-');
        var data_fim_part = String(_item.data_fim).substring(0,10).split('-');

        var datas_disabled = [];
        var datepickers = $("#data_inicio").datepicker({
            dateFormat: 'dd/mm/yy',
            minDate: new Date(data_inicio_part[0], parseInt(data_inicio_part[1]) - 1, data_inicio_part[2]),
            maxDate: new Date(data_fim_part[0], parseInt(data_fim_part[1]) - 1, data_fim_part[2])
            // beforeShowDay: function(date){
            //     var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
            //     return [ datas_disabled.indexOf(string) == -1 ]
            // }
        });
        
        // var dateFormat = "mm/dd/yy",
        // from = $( "#from" ).datepicker({
        //         defaultDate: "+1w",
        //         changeMonth: true,
        //         numberOfMonths: 3
        // }).on( "change", function() {
        //     to.datepicker( "option", "minDate", getDate( this ) );
        // }), to = $( "#to" ).datepicker({
        //         defaultDate: "+1w",
        //         changeMonth: true,
        //         numberOfMonths: 3
        // }).on( "change", function() {
        //         from.datepicker( "option", "maxDate", getDate( this ) );
        // });
        
        // function getDate( element ) {
        //     var date;
        //     try {
        //         date = $.datepicker.parseDate( dateFormat, element.value );
        //     } catch( error ) {
        //         date = null;
        //     }
        
        //     return date;
        // }

        // $("#tbl-gradehoraria input");        
    }
    function busca_turma(id_empresa_produto_servico){
        get("/ws/buscaTurmaPorIdEmpresaServico/"+ id_empresa_produto_servico, function(dados){
            $("#modalturma").modal('show');

            var turmas = dados;
            var html = "";
            dados.forEach(item => {
                html += '<li class="list-group-item" data-id_turma="'+item.id+'">';
                html += '   <table><tr>';
                html += '       <td><b>Início</b>: '+item.data_inicio+' - '+item.hora_inicio+'</td>';
                html += '       <td><b>Fim</b>: '+item.data_fim+' - '+item.hora_fim+'</td>';
                html += '   </tr><tr>';
                html += '       <td><b>Lotação</b>: '+item.lotacao+'</td>';
                html += '       <td><b>Quantidade de aulas</b>: '+item.qtd_aulas+'</td>';
                html += '   </tr></table>';
                html += '</li>';
            });
            if(dados.length == 0)
                html = '<p class="alert alert-info">Sem turmas cadastradas</p>';
            $("#content-turmas").html(html);
            $("#count-turmas").html(dados.length + " turmas encontradas.");

            $("#content-turmas li.list-group-item").click(function(){
                if(confirm("Deseja realmente cadastrar-se nessa turma?")){
                    var id_turma = $(this).attr("data-id_turma");
                    event.preventDefault();
                    var newForm = $('<form>', {
                        'action': '/user/servicos/gravarTurma',
                        'target': '_top', 'method': 'POST'
                    });
                    newForm.append($('<input>', {'name': 'id_turma', 'value': id_turma, 'type': 'hidden'}));
                    $(document.body).append(newForm);
                    newForm.submit();
                }
            })
        });
    }

    function busca_agenda(id_empresa_produto_servico){
        get("/ws/buscaAgendaProdutoServicoPorId/" + id_empresa_produto_servico, function(dados){
            if(dados == null){
                alert("Serviço sem agenda cadastrada.");
                return false;
            }

            if(dados.tem_aula == "0")
                $("#agendadata").modal('show');

            var hr_inicio = parseInt(dados.inicio_expediente);
            var hr_fim = parseInt(dados.fim_expediente);
            var tempo = parseInt(dados.tempo_aula) + parseInt(dados.intervalo);

            $("#id_agenda").val(dados.id);
            $("#data").datepicker({
                dateFormat: 'dd/mm/yy',
                beforeShowDay: function(date) {
                    var day = date.getDay();
                    var dias_semana = dados.dias_semana.split('-');
                    var validDay = false;
                    for(i=0; i < dias_semana.length; i++){
                        if(day == parseInt(dias_semana[i])){
                            validDay = true;
                            break;
                        }
                    }
                    return [(validDay)];
                }
            });

            $('#horario').timepicker({
                useSelect: true,
                'timeFormat': 'H:i',
                'step': tempo,
                'minTime': dados.inicio_expediente,
                'maxTime': dados.fim_expediente,
                'showDuration': false
            });
            $(".ui-timepicker-select").addClass("form-control");                    

            $("#data").change(function(){
                $(".ui-timepicker-select option:disabled").each(function(i, elem){
                    $(elem).prop('disabled');
                });

                var data_event = $.datepicker.formatDate('dd-mm-yy', $(this).datepicker('getDate'));
                get("/ws/buscaHorarioDisponiveisAgendaData/"+dados.id+"/"+data_event, function(retorno){
                    $(".ui-timepicker-select option").each(function(i, elem){
                        for (var i = 0; i < retorno.length; i++) {
                            var hora = String(retorno[i]).replace('.',':');
                            if($(elem).val() == hora){
                                $(elem).attr('disabled',true);
                                break;
                            }
                        }
                    });
                });
            })
        });        
    }



</script>

<!-- <script src="<?=base_url(); ?>/assets/js/busca-avancada.js"></script> -->
<script src="<?=base_url(); ?>/assets/js/moment.min.js"></script>
<script src="<?=base_url(); ?>/assets/js/jquery.timepicker.min.js"></script>
<script src="<?=base_url(); ?>/assets/plugins/jquery-ui/jquery-ui.min.js"></script>