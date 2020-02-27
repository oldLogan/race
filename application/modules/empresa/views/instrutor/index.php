
<div class="container">
    <?php   $page = array("title" => "Instrutores", "home" => "Dashboard", "homelink" => "/dashboard");
            require_once(APPPATH."views/template/breadcrumb.php") ?>

	<div class="row">
        
        <div class="form-group">
            <a href="/empresa/instrutor/formulario" class="btn btn-primary btn-sm">Cadastrar</a>
        </div>

        <table class="table table-hover">
        <?php   if($instrutores){ ?>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Data</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
            <?php   foreach ($instrutores as $instrutor) { ?>
                    <tr>
                        <td><?=$instrutor["nome"]?></td>
                        <td><?=$instrutor["cpf"]?></td>
                        <td><?=dateFormat("d/m/Y - H:m:s", $instrutor["data"])?></td>
                        <td width="10%">
                            <a href="/empresa/instrutor/deletar/<?=$instrutor["id"]?>" class="btn btn-danger btn-sm" title="Excluir veículo" onclick="return validaDelete();">
                                <i class="fa fa-fw fa-trash"></i>
                            </a>
                        </td>                        
                    </tr>
        <?php       }
                } else { ?>
                    <tr>
                        <td class="text-center">Sem registros</td>
                    </tr>
        <?php   }   ?>
            </tbody>
        </table>

	</div>
</div>