
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <section class="content-header">
      <h1>
			Contato <small>Listar</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Inicio</a></li>
        <li><a href="#"><i class="fa fa-tasks"></i> Contato</a></li>
        <li class="active">Listar</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

		<div class="row">
	        <div class="col-xs-12">
	          <div class="box">
	            <div class="box-header">
	              <h3 class="box-title">Contato</h3>
	            </div>
	            <div class="box-body table-responsive no-padding">
	                <table class="table table-hover table-bordered">
                <?php   if(!empty($contatos)) {  ?>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Telefone</th>
                                <th>Assunto</th>
                                <th>Mensagem</th>
                                <th>Data</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                    <?php   foreach ($contatos as $contato){ ?>
                            <tr>
                                <td><?=$contato["id"]?></td>
                                <td><?=$contato["nome"]?></td>
                                <td><?=$contato["email"]?></td>
                                <td><?=$contato["telefone"]?></td>
                                <td><?=$contato["titulo"]?></td>
                                <td><?=$contato["mensagem"]?></td> <!--<//?=word_limiter($contato["mensagem"],8)?> -->
                                <td><?=$contato["data"]?></td>
                                <td>
                                    <a href="deletar/<?=$contato["id"]?>" class="btn btn-xs btn-danger" onclick="return validaDelete();"><i class="fa fa-fw fa-trash"></i>Desativar</a>
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