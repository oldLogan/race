
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
            Itens <small>Listar</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Inicio</a></li>
        <li><a href="#"><i class="fa fa-tasks"></i> Produtos</a></li>
        <li class="active">Itens</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

		<div class="row">
	        <div class="col-xs-12">
	          <div class="box">
	            <div class="box-header">
	              <h3 class="box-title">Itens</h3>
								
                    <a href="#" data-toggle="modal" data-target="#addItem" class="btn btn-cadastrar btn-primary btn-xs" style="margin-left: 10px;">Cadastrar</a>

                    <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control pull-right" placeholder="Pesquisar">

                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                        </div>
                    </div>
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body table-responsive no-padding">
	                <table class="table table-hover">
                <?php   if(!empty($itens)) {  ?>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tipo</th>
                                <th>Titulo</th>
                                <th>Descrição</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                    <?php   foreach ($itens as $item){ ?>
                            <tr>
                                <td><?=$item["id"]?></td>
                                <td class="text-center">
                                <?php if($item["id_tipo_empresa"] == 1){ ?>
                                    <span class="badge badge-default bg-blue" title="Auto Escola">AE</span>
                                <?php }else if($item["id_tipo_empresa"] == 2){ ?>
                                    <span class="badge badge-default bg-orange" title="Clínica">CL</span>
                                <?php } ?>
                                </td>                                
                                <td><?=$item["titulo"]?></td>
                                <td><?=word_limiter($item["descricao"],15)?></td>
                                <td>
                                    <button data-id-item="<?=$item["id"]?>" class="btn btn-edit-item btn-xs btn-default">
                                        <i class="fa fa-fw fa-edit"></i> Editar
                                    </button>
                                    <a href="deletarItem/<?=$item["id"]?>" class="btn btn-xs btn-danger" onclick="return validaDelete();"><i class="fa fa-fw fa-trash"></i>Desativar</a>
                                </td>
                            </tr>
                    <?php   }   ?>
                        </tbody>
                <?php   }else{  ?>
                        <tr>
                            <td class="text-center">Sem registros</td>
                        </tr>
                <?php   }   ?>
	                </table>
	            </div>
	            <!-- /.box-body -->
	          </div>
	          <!-- /.box -->
	        </div>
        </div>
        
        <div>
            <div class="modal" id="addItem">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">Adicionar item produto</h4>
                        </div>
                        <form id="frmItemProduto" action="/admin/produtos/gravarItemProduto" method="POST" class="form-horizontal">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="id_tipo_empresa">Tipo de Empresa</label>
                                    <div class="col-sm-8">
                                        <select name="id_tipo_empresa" id="id_tipo_empresa" class="form-control">
                                        <?php foreach ($tipo_empresa as $item) : ?>
                                            <option value="<?=$item['id']?>" <?php if($item["id"] == false){ echo "selected"; }?>><?=$item['descricao']?></option>
                                        <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>                            
                                <div class="form-group">
                                    <label for="titulo" class="col-sm-2 control-label">Titulo <span class="text-red">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ex.: Simulador" required="required" maxlength="200" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="descricao" class="col-sm-2 control-label">Descrição</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="descricao" id="descricao" rows="4"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-salvar btn-primary">Cadastrar</button>
                                <button type="submit" class="btn btn-update btn-success">Atualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>        

    </section>

</div>

<script>
    $(function(){

        $(".btn-cadastrar").click(function(){
            $(".btn-salvar").show();
            $(".btn-update").hide();
            $("#titulo").val("");
            $("#descricao").val("");
            $("#id").remove();
            $("#id_tipo_empresa").val(1);
        });
        $(".btn-edit-item").click(function(event){
            event.stopPropagation();
            $("#addItem").modal('show');
            $(".btn-salvar").hide();
            $(".btn-update").show();

            var id = $(this).attr("data-id-item");
            $.ajax({
                type: "POST", 
                url: "/ws/buscaItemPorId",
                timeout: 2000,
                data: {'id': id},
                cache: false,
                beforeSend: function(){
                    $("#titulo").val("processando...");
                    $("#descricao").val("processando...");
                    $("#id").remove();
                },
                success: function(retorno) {
                    var item = retorno;
                    $("#id_tipo_empresa").val(item.id_tipo_empresa);
                    $("#titulo").val(item.titulo);
                    $("#descricao").val(item.descricao);
                    $(".modal-footer").append('<input type="hidden" name="id" id="id" value="'+item.id+'">');
                }
            });            
        });
    })
</script>