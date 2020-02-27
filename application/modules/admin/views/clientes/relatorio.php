
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Clientes
        <small>Relatório de Compras</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Inicio</a></li>
        <li><a href="#"><i class="fa fa-users"></i> Clientes</a></li>
        <li class="active">Listar</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

		<div class="row">
	        <div class="col-xs-12">
	          <div class="box">
	            <div class="box-header">
	              <h3 class="box-title">Clientes</h3>

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
		                  	<th>Nome</th>
		                  	<th>Pacote</th>
		                  	<th>Valor</th>
		                  	<th>Chave</th>
		                  	<th>Autoescola</th>
		                  	<th>Data</th>
		                </tr>
	              	</thead>
	              	<tbody>
              		<?php foreach ($clientes as $cliente) : ?>
	              		<tr>
	                  		<td><?=$cliente["id"]?></td>
												<td><?=$cliente["nome"]?></td>
												<td><?=$cliente["titulo"]?></td>
												<td><?=$cliente["valor"]?></td>
												<td>#<?=$cliente["chave"]?>#</td>
												<td><?=$cliente["nomefantasia"]?></td>
												<td><?=$cliente["data"]?></td>
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