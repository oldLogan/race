
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
		Produtos <small>Cadastrar</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Inicio</a></li>
        <li><a href="/admin/produtos/listar"><i class="fa fa-tasks"></i> Produtos</a></li>
        <li class="active">Formulário</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

		<div class="row">
	        <div class="col-xs-12">
	          <div class="box">
	            
                <div class="box-header">
	                <h3 class="box-title">Produtos</h3>
	            </div>

	            <div class="box-body">
                    <div>
                        <form action="/admin/produtos/gravar" method="POST" class="form-horizontal">
                            
							<div class="form-group">
                                <label for="titulo" class="col-sm-2 control-label">Titulo <span class="text-red">*</span></label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ex.: Habilitação Categoria A" required="required" maxlength="200" value="<?=htmlspecialchars($produto["titulo"])?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="descricao" class="col-sm-2 control-label">Descrição</label>
                                <div class="col-sm-8">
                                    <textarea class="form-control" name="descricao" id="descricao" rows="4" required="required"><?=$produto["descricao"]?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                <?php if(empty($produto["id"])){ ?>
                                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                                <?php }else{ ?>
                                    <button type="submit" class="btn btn-success">Atualizar</button>
                                <?php } ?>
                                </div>
                            </div>
                            <input type="hidden" name="id" value="<?php echo !empty($produto["id"]) == true ? $produto["id"] : 0 ?>">
                        </form>
                    </div>
                    <?php if(!empty($produto["id"])){ ?>
                    <hr>
                    <div>
                        <h3>Itens <a href="#" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#addItem">Adicionar</a></h3>
                        <?php if(!empty($produto_servicos)){ ?>
                        
                            <p>Itens correspondentes a esse produto</p>

                            <table class="table table-striped table-condensed">
                            <?php foreach ($produto_servicos as $servico){ ?>
                                <tr>
                                    <td><?=$servico["id"]?></td>    
                                    <td><?=$servico["titulo"]?></td>
                                    <td>
                                        <a href="/admin/produtos/deletarProdutoServico/<?=$servico["id"]?>" class="btn btn-xs btn-danger" onclick="return validaDelete();"><i class="fa fa-fw fa-trash"></i>Desativar</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        <?php }else{ ?>
                            <p>Nenhum item cadastrado</p>
                        <?php } ?>
                        </table>
                    </div>
                    <?php } ?>

	            </div>
	            <!-- /.box-body -->
	          </div>
	          <!-- /.box -->
	        </div>
        </div>
        
        <div class="example-modal">
            <div class="modal" id="addItem">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Adicionar item produto</h4>
                        </div>
                        <form id="frmItemProduto" action="/admin/produtos/gravarProdutoServico" method="POST" class="form-horizontal">
                            <div class="modal-body">
                                <select name="id_servico" id="id_servico" class="form-control">
                                    <?php foreach ($servicos as $servico) : ?>
                                        <option value="<?=$servico['id']?>"><?=$servico['titulo']?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </div>
                            <input type="hidden" name="id_produto" value="<?php echo !empty($produto["id"]) == true ? $produto["id"] : 0 ?>">
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>

</div>

<script>



</script>