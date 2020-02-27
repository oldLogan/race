
<div class="container">
	<?php   $page = array("title" => "Formulário instrutor", "home" => "Dashboard", "homelink" => "/dashboard");
            require_once(APPPATH."views/template/breadcrumb.php") ?>

	<div class="row">
		<?php require_once(APPPATH."views/template/flashdata.php") ?>

		<form action="/empresa/instrutor/gravar" method="POST" class="form-horizontal">

		    <div class="form-group">
                <label for="nome" class="col-sm-2 control-label">Nome <span class="text-red">*</span></label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required="required" maxlength="200" autofocus value="<?=set_value('nome')?>">
                </div>
            </div>

            <div class="form-group">
                <label for="cpf" class="col-sm-2 control-label">CPF <span class="text-red">*</span></label>
                <div class="col-sm-8">
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Ex. 000.000.000-00" required="required" maxlength="200" value="<?=set_value('cpf')?>">
                </div>
		    </div>

		    <div class="form-group">
		        <div class="col-sm-offset-2 col-sm-10">
		            <button type="submit" class="btn btn-primary">Cadastrar</button>
		        </div>
		    </div>

		</form>
	</div>
</div>