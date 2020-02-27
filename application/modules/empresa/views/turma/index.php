
<div class="container">
<?php   $page = array("title" => "Turmas", "home" => "Dashboard", "homelink" => "/dashboard");
            require_once(APPPATH."views/template/breadcrumb.php");

    $days = array('Domingo', 'Segunda', 'Terça', 'Quarta','Quinta','Sexta', 'Sábado');
    $turnos = array('Nenhum', 'Matutino','Vespertino','Noturno');
?>

	<div class="row">

        <div class="form-group">
            <a href="/empresa/turma/formulario/<?=$id_empresa_produto_servico?>" class="btn btn-primary btn-sm">Cadastrar</a>
        </div>    
        <?php   if($turmas){ ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Serviço</th>
                    <th>Código</th>
                    <th>Aulas</th>
                    <th>Lotação</th>
                    <th>Turno</th>
                    <th class="text-center">Hora início/fim</th>
                    <th class="text-center">Data início/fim</th>
                    <th></th>
                </tr>
            </thead>
            
            <tbody>
            <?php   foreach ($turmas as $turma) { ?>
                    <tr>
                        <td><?=$turma["titulo"]?></td>
                        <td><?=$turma["codigo"]?></td>
                        <td><?=$turma["qtd_aulas"]?></td>
                        <td>0/<?=$turma["lotacao"]?></td>
                        <td><?=$turnos[$turma["turno"]]?></td>
                        <td class="text-center"><?=$turma["hora_inicio"]?>/<?=$turma["hora_fim"]?></td>
                        <td class="text-center"><?=$turma["data_inicio"]?>/<?=$turma["data_fim"]?></td>
                        <td width="20%">
                            <!-- <a href="/empresa/agenda/deletar/<?=$agenda["id"]?>" class="btn btn-danger btn-sm" title="Excluir serviço" onclick="return validaDelete();">
                                <i class="fa fa-fw fa-trash"></i>
                            </a> -->
                        </td>
                    </tr>
            <?php   }   ?>
                </tbody>
            </table>
        <?php   } else { ?>
                    <p class="alert alert-info">Sem registros</p>
        <?php   }   ?>

	</div>
</div>
