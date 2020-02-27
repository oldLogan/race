
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
		Instrutor <small>Cadastrar</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Inicio</a></li>
        <li><a href="#"><i class="fa fa-building"></i> Empresas</a></li>
        <li class="active">Instrutor</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

		<div class="row">
	        <div class="col-xs-12">
	          <div class="box">
	            
                <div class="box-header">
	                <h3 class="box-title">Instrutor</h3>
	            </div>

	            <div class="box-body">	              
                    <form action="gravar" method="POST" class="form-horizontal">

                        <div class="form-group">
                            <label for="nome" class="col-sm-2 control-label">Nome <span class="text-red">*</span></label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required="required" maxlength="200">
                            </div>

                            <label for="cpf" class="col-sm-1 control-label">CPF <span class="text-red">*</span></label>
                            <div class="col-sm-3">
                            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Ex. 000.000.000-00" required="required" maxlength="200">
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