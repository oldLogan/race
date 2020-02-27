
<div class="container">
<?php   $page = array("title" => "Agenda", "home" => "Dashboard", "homelink" => "/dashboard");
            require_once(APPPATH."views/template/breadcrumb.php");

    $days = array('Domingo', 'Segunda', 'Terça', 'Quarta','Quinta','Sexta', 'Sábado');
?>

	<div class="row">
    
        <?php   if($agendas){ ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Agenda</th>
                    <th>Expediente</th>
                    <th class="text-center">Tempo Aula</th>
                    <th class="text-center">Intervalo</th>
                    <th>Dias da semana</th>
                    <th></th>
                </tr>
            </thead>
            
            <tbody>
            <?php   foreach ($agendas as $agenda) { ?>
                    <tr>
                        <td><?=$agenda["titulo"]?></td>
                        <td><?=$agenda["inicio_expediente"]?> - <?=$agenda["fim_expediente"]?></td>
                        <td class="text-center"><?=$agenda["tempo_aula"]?> min</td>
                        <td class="text-center"><?=$agenda["intervalo"]?> min</td>
                        <td>
                            <?php foreach (explode("-", $agenda["dias_semana"]) as $key) {?>
                                <?=$days[$key]?> - 
                            <?php } ?>
                        </td>
                        <td width="20%">
                            <!-- <a href="/empresa/agenda/deletar/<?=$agenda["id"]?>" class="btn btn-danger btn-sm" title="Excluir serviço" onclick="return validaDelete();">
                                <i class="fa fa-fw fa-trash"></i>
                            </a> -->
                            <?php if($agenda["tem_aula"] == 1){ ?>
                            <a href="/empresa/turma/index?id=<?=$agenda["id_empresa_produto_servico"]?>" class="btn btn-primary btn-sm" title="Cadastrar turma">
                                <i class="fa fa-fw fa-graduation-cap"></i> Turmas
                            </a>          
                            <?php } ?>                  
                        </td>
                    </tr>
            <?php   }   ?>
                </tbody>
            </table>
        <?php   } else { ?>
                    <div class="form-group">
                        <a href="/empresa/agenda/formulario" class="btn btn-primary btn-sm">Cadastrar</a>
                    </div>
                    
                    <p class="alert alert-info">Sem registros</p>

        <?php   }   ?>

	</div>
</div>