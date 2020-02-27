
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
		Veículos <small>Cadastrar</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Inicio</a></li>
        <li><a href="#"><i class="fa fa-building"></i> Empresas</a></li>
        <li class="active">Veículos</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

		<div class="row">
	        <div class="col-xs-12">
	          <div class="box">
	            
                <div class="box-header">
	                <h3 class="box-title">Veículos</h3>
	            </div>

	            <div class="box-body">	              
                    <form action="gravar" method="POST" class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="veiculo_tipo">Tipo</label>
                            <div class="col-sm-8">
                                <select name="veiculo_tipo" id="veiculo_tipo" class="form-control">
                                <?php foreach ($veiculo_tipo as $item) : ?>
                                    <option value="<?=$item['id']?>"><?=$item['descricao']?></option>
                                <?php endforeach ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="modelo" class="col-sm-2 control-label">Modelo <span class="text-red">*</span></label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Ex. Celta 1.0 ou CG 150 Titan" required="required" maxlength="200">
                            </div>

                            <label for="ano" class="col-sm-1 control-label">Ano <span class="text-red">*</span></label>
                            <div class="col-sm-3">
                            <input type="text" class="form-control" id="ano" name="ano" placeholder="Ano de fabricação" required="required" maxlength="200">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </div>
                        </div>
                    </form>

	            </div>
	            <!-- /.box-body -->
	          </div>
	          <!-- /.box -->
	        </div>
	    </div>

    </section>

</div>