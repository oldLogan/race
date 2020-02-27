
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
				Localidades <small>Listar</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Inicio</a></li>
        <li><a href="#"><i class="fa fa-maps"></i> Localidades</a></li>
        <li class="active">Listar</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

		<div class="row">
	        <div class="col-xs-12">
	          <div class="box">
	            <div class="box-header">
	                <h3 class="box-title">Localidades</h3>
								
				   				<a href="formulario" class="btn btn-primary btn-xs" style="margin-left: 10px;">Cadastrar</a>

	                <div class="box-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control pull-right" placeholder="Pesquisar">

                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                        </div>
	                </div>
	            </div>

							<div class="col-md-6">
								<div class="box-body table-responsive no-padding">
									<table class="table table-hover">
										<thead>
											<tr>
													<th>ID</th>
													<th>Cidade</th>
													<th></th>
											</tr>
										</thead>
										<tbody>
										<?php foreach ($cidades as $cidade) : ?>
											<tr>
													<td><?=$cidade["id"]?></td>
													<td><?=$cidade["descricao"]?></td>
													<td></td>
											</tr>
										<?php  endforeach ?>
										</tbody>
									</table>
								</div>
							</div>

							<div class="col-md-6">
									<div class="box-body table-responsive no-padding">
										<table class="table table-hover">
											<thead>
												<tr>
														<th>ID</th>
														<th>Bairro</th>
														<th></th>
												</tr>
											</thead>
											<tbody>
											<?php foreach ($bairros as $bairro) : ?>
												<tr>
														<td><?=$bairro["id"]?></td>
														<td><?=$bairro["descricao"]?></td>
														<td></td>
												</tr>
											<?php  endforeach ?>
											</tbody>
										</table>
									</div>
							</div>

	            
	          </div>
	          <!-- /.box -->
	        </div>
	    </div>

    </section>

</div>