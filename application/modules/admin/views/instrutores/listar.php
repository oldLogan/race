
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
		Instrutores <small>Listar</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Inicio</a></li>
        <li><a href="#"><i class="fa fa-building"></i> Empresas</a></li>
        <li class="active">Instrutores</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

		<div class="row">
	        <div class="col-xs-12">
	          <div class="box">
	            <div class="box-header">
	                <h3 class="box-title">Instrutores</h3>
								
				   <!-- <a href="formulario" class="btn btn-primary btn-xs" style="margin-left: 10px;">Cadastrar</a> -->

	                <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control pull-right" placeholder="Pesquisar">

                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                        </div>
	                </div>
	            </div>

	            <div class="box-body table-responsive no-padding">
	              <table class="table table-hover">
	              	<thead>
	              		<tr>
		                  	<th>ID</th>
						    <th>Nome</th>
		                  	<th>CPF</th>
		                  	<th>Data</th>
							<th></th>
		                </tr>
	              	</thead>
	              	<tbody>
              		<?php foreach ($instrutores as $instrutor) : ?>
	              		<tr>
	                  		<td><?=$instrutor["id"]?></td>
                            <td><?=$instrutor["nome"]?></td>
                            <td><?=$instrutor["cpf"]?></td>
                            <td><?=$instrutor["data"]?></td>
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