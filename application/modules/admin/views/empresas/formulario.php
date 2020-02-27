
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

		<div class="row">
	        <div class="col-xs-12">
	          <div class="box">
	            <div class="box-header">
	              <h3 class="box-title">Empresas</h3>
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">

                    <form action="/admin/empresas/gravar" method="POST" class="form-horizontal">

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="empresa_tipo">Tipo</label>
                            <div class="col-sm-10">
                                <select name="empresa_tipo" id="empresa_tipo" class="form-control">
                                <?php foreach ($empresa_tipo as $item) : ?>
                                    <option value="<?=$item['id']?>" <?php if($item["id"] == $empresa["id_empresa_tipo"]){ echo "selected"; }?>><?=$item['descricao']?></option>
                                <?php endforeach ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nome" class="col-sm-2 control-label">Nome <span class="text-red">*</span></label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required="required" maxlength="200" value="<?=$empresa["nome"]?>">
                            </div>

                            <label for="nomefantasia" class="col-sm-2 control-label">Nome Fantasia <span class="text-red">*</span></label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" id="nomefantasia" name="nomefantasia" placeholder="Nome fantasia" required="required" maxlength="200" value="<?=$empresa["nomefantasia"]?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="descricao" class="col-sm-2 control-label">Descrição</label>
                            <div class="col-sm-10">
                                <textarea name="descricao" id="descricao" class="form-control" placeholder="Escreve a descrição da sua empresa" maxlength="2000"><?=htmlspecialchars($empresa["descricao"])?></textarea>
                            </div>
                        </div>		  		  

                        <div class="form-group">
                            <label for="email" class="col-sm-2 control-label">E-mail <span class="text-red">*</span></label>
                            <div class="col-sm-3">
                                <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required="required" maxlength="200" value="<?=$empresa["email"]?>">
                            </div>

                            <label for="telefone" class="col-sm-2 control-label">Telefone <span class="text-red">*</span></label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="(XX) XXXX-XXXX"  maxlength="14" value="<?=$empresa["telefone"]?>">
                            </div>

                            <label for="celular" class="col-sm-1 control-label">Celular</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="celular" name="celular" placeholder="(XX) XXXXX-XXXX"  maxlength="15" value="<?=$empresa["celular"]?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="endereco" class="col-sm-2 control-label">Endereço</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço" maxlength="200" value="<?=$empresa["endereco"]?>">
                            </div>

                            <label for="cep" class="col-sm-1 control-label">CEP</label>
                            <div class="col-sm-2">
                                <input type="text" class="form-control" id="cep" name="cep" placeholder="XXXXX-XXX" maxlength="9" value="<?=$empresa["cep"]?>">
                            </div>
                        </div>		  		  		  

                        <div class="form-group">
                            <label for="bairro" class="col-sm-2 control-label">Bairro</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro" maxlength="200" value="<?=$empresa["bairro"]?>">
                            </div>

                            <label for="cidade" class="col-sm-1 control-label">Cidade</label>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade" required="required" maxlength="200" value="<?=$empresa["cidade"]?>">
                            </div>

                            <label for="estado" class="col-sm-1 control-label">Estado</label>
                            <div class="col-sm-2">
                                <select class="form-control" id="estado" name="estado" required="required">
                                <?php foreach ($estados as $estado) : ?>
                                    <option value="<?=$estado["id"]?>" <?php if($estado["id"] == $empresa["id_estado"]){ echo "selected"; }?>><?=$estado["descricao"]?></option>
                                <?php endforeach ?>
                                </select>
                            </div>
                        </div>				  		  		  		  		  		  		  

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <input type="hidden" id="id" name="id" value="<?=$empresa["id"]?>">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa fa-fw fa-save"></i> Atualizar
                                </button>
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