
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
			Produtos <small>Listar</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Inicio</a></li>
        <li><a href="#"><i class="fa fa-tasks"></i> Produtos</a></li>
        <li class="active">Listar</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

		<div class="row">
	        <div class="col-xs-12">
	          <div class="box">
	            <div class="box-header">
	              <h3 class="box-title">Produtos</h3>
								
                    <a href="formulario" class="btn btn-primary btn-xs" style="margin-left: 10px;">Cadastrar</a>

                    <!-- <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control pull-right" placeholder="Pesquisar">

                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                        </div>
                    </div> -->
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body table-responsive no-padding">
	                <table class="table table-hover table-bordered">
                <?php   if(!empty($produtos)) {  ?>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Titulo</th>
                                <th>Descrição</th>
                                <th>Publicado</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                    <?php   foreach ($produtos as $produto){ ?>
                            <tr>
                                <td><?=$produto["id"]?></td>
                                <td><?=$produto["titulo"]?></td>
                                <td><?=word_limiter($produto["descricao"],8)?></td>
                                <td>
                                    <?php if($produto["publicado"] == 0){   ?>
                                        <span class="badge bg-gray">Pendente</span>
                                    <?php }else if($produto["publicado"] == 1){   ?>
                                        <span class="badge bg-green">Publicado</span>
                                    <?php }   ?>
                                </td>
                                <td>
									
                                    <!--<button class="btn btn-itens btn-xs btn-default bg-blue" data-id-produto="<?//=$produto["id"]?>"><i class="fa fa-fw fa-eye"></i> Itens</button>-->	
                                    <a href="formulario/<?=$produto["id"]?>" class="btn btn-xs btn-default"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                    <a href="deletar/<?=$produto["id"]?>" class="btn btn-xs btn-danger" onclick="return validaDelete();"><i class="fa fa-fw fa-trash"></i>Desativar</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="row-content" colspan="6">
                                    <ul></ul>
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

    </section>

</div>
<script>
    $(function() {
        $(".row-content").hide();
        $("table tr .btn-itens").click(function(event) {
            var id_produto = $(this).attr('data-id-produto');
            event.stopPropagation();
            var $target = $(event.target);
            if ($target.closest("td").attr("colspan") > 1) {
                $target.slideUp();
            }else{
                $target.closest("tr").next().find("td").slideToggle();
            }             
            if($target.closest("tr").next().find("td").find("ul").find("li").length == 0)
                findItensbyIdProduto(id_produto, $target.closest("tr").next().find("td").find("ul"));
        });

        function findItensbyIdProduto(id, elem){
            $.ajax({
                type: "POST", 
                url: "/ws/buscaServicoPorProduto/"+id,
                timeout: 3000,
                cache: false,
                beforeSend: function() {
                    elem.html('');
                    elem.append('<p class="text-center"><br>Processando..</p>');
                },
                error: function(e) {
                    elem.html('');
                    elem.append('<p class="text-center">Erro ao efetuar a busca. Contate o administrador do sistema.</p>');
                },
                success: function(retorno) {       
                    var listItens = retorno;
                    console.log(listItens);
                    var html = "";

                    $.each(listItens,function(i, item){
                        html +=
                            '<li>'+item.titulo+'</li>';
                    });
                    elem.html('');
                    elem.append(html);
                }
            });               
        }

    });
</script>