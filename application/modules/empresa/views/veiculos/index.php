
<div class="container">
    <?php   $page = array("title" => "Veículos", "home" => "Dashboard", "homelink" => "/dashboard");
            require_once(APPPATH."views/template/breadcrumb.php") ?>

	<div class="row">

        <div class="form-group">
            <a href="/empresa/veiculos/formulario" class="btn btn-primary btn-sm">Cadastrar</a>
        </div>
		
        <table class="table table-striped">
        <?php   if($veiculos){  ?>
                <thead>
                    <tr>
                        <th class="text-center">Tipo</th>
                        <th>Modelo</th>
                        <th class="text-center">Ano</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>

        <?php       foreach ($veiculos as $veiculo) { ?>
                    <tr>
                        <td width="15%" class="text-center"><?=$veiculo["descricao"]?></td>
                        <td><?=$veiculo["modelo"]?></td>
                        <td class="text-center"><?=$veiculo["ano"]?></td>
                        <td width="10%">
                            <a href="/empresa/veiculos/deletar/<?=$veiculo["id_empresa_veiculo"]?>" class="btn btn-danger btn-sm" title="Excluir ve�culo" onclick="return validaDelete();">
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