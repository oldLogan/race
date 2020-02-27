
<div class="container">
<?php   $page = array("title" => "Serviços", "home" => "Dashboard", "homelink" => "/dashboard");
            require_once(APPPATH."views/template/breadcrumb.php") ?>

	<div class="row">
        
        <div class="form-group">
            <a href="/empresa/servicos/formulario" class="btn btn-primary btn-sm">Cadastrar</a>
        </div>

        <table class="table">
        <?php   if($empresa_produtos){ ?>
            <thead>
                <tr>
                    <th>Serviço</th>
                    <th>Valor</th>
                    <th></th>
                </tr>
            </thead>
            
            <tbody>
            <?php   foreach ($empresa_produtos as $produto) { ?>
                    <tr>
                        <td><?=$produto["titulo"]?></td>
                        <td><?=numberToMoney($produto["valor"])?></td>
                        <td width="10%">
                            <a href="/empresa/servicos/editar/?id=<?=$produto["id"]?>" class="btn btn-primary btn-sm" title="Editar"><i class="fa fa-fw fa-save"></i>Editar</a>
                        </td>
						<td width="10%">
                            <a href="/empresa/servicos/deletar/<?=$produto["id"]?>" class="btn btn-danger btn-sm" title="Excluir serviço" onclick="return validaDelete();">
                                <i class="fa fa-fw fa-trash"></i>
                            </a>
                        </td>
                    </tr>
        <?php       }
                } else { ?>
                    <tr>
                        <td class="text-center"><p class="alert alert-info">Sem registros</p></td>
                    </tr>
        <?php   }   ?>
            </tbody>
        </table>

	</div>
</div>