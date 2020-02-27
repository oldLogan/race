
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Empresas
        <small>Listar</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Inicio</a></li>
        <li><a href="#"><i class="fa fa-building"></i> Empresas</a></li>
        <li class="active">Listar</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

		<div>
				<?php if($this->session->flashdata("success"))  : ?>
						<p class="alert alert-success green-text"><?= $this->session->flashdata("success") ?></p>
				<?php endif ?>                    
				<?php if($this->session->flashdata("danger"))  : ?>
						<p class="alert alert-danger text-red"><?= $this->session->flashdata("danger") ?></p>
				<?php endif ?>
		</div>

		<div class="row">
	        <div class="col-xs-12">
	          <div class="box">
	            <div class="box-header">
	              <h3 class="box-title">Empresas</h3>

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
	              	<thead>
	              		<tr>
		                  	<th>ID</th>
												<th>Tipo</th>
		                  	<th>Nome</th>
		                  	<!-- <th>Nome Fantasia</th> -->
		                  	<th>Contato</th>
		                  	<th>Data</th>
												<th></th>
		                </tr>
	              	</thead>
	              	<tbody>
              		<?php foreach ($empresas as $empresa) : ?>
	              		<tr>
	                  		<td><?=$empresa["id"]?></td>
												<td>
													<?php if($empresa["id_empresa_tipo"] == "1"){ ?>
															<span class="badge badge-default bg-blue" title="Auto Escola">AE</span>
													<?php }else if($empresa["id_empresa_tipo"] == "2"){ ?>
															<span class="badge badge-default bg-orange" title="Clínica">CL</span>
													<?php } ?>											
												</td>
												<td><?=$empresa["nomefantasia"]?> (<?=$empresa["nome"]?>)</td>
												<td>
													<?=$empresa["endereco"]?> <?=$empresa["id_bairro"]?>, <?=$empresa["id_cidade"]?> - <?=$empresa["id_estado"]?> - <?=$empresa["cep"]?><br>
													<?=$empresa["telefone"]?>/<?=$empresa["celular"]?><br>
													<?=$empresa["email"]?>
												</td>
												<td title="<?=date("d/m/Y H:i:s", strtotime($empresa["data"]));?>">
													<?=date("d/m/Y", strtotime($empresa["data"]));?>
												</td>
												<td>
													<a href="/admin/empresas/formulario/<?=$empresa["id"]?>" class="btn btn-xs btn-default"><i class="fa fa-fw fa-edit"></i> Editar</a>
                        	<a href="/admin/empresas/deletar/<?=$empresa["id"]?>" class="btn btn-xs btn-danger" onclick="return validaDelete();"><i class="fa fa-fw fa-trash"></i>Desativar</a>
												</td>
	                	</tr>
	                <?php  endforeach ?>
	              	</tbody>
	              </table>
	            </div>
	            <!-- /.box-body -->
	          </div>
	          <!-- /.box -->
	        </div>
	    </div>

    </section>

</div>