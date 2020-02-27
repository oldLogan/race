<section class="conteudo-interno">
	<div class="container">
		<div class="row">
			<h2 class="title-page">Formulário de Empresas</h2>	
		</div>

		<div class="row">
			<form action="/cadastro/empresa/gravar" method="POST" class="form-horizontal" enctype="multipart/form-data">

				<div class="form-group">
					<label class="col-sm-2 control-label" for="tipo_empresa">Tipo</label>
					<div class="col-sm-10">
						<select name="tipo_empresa" id="tipo_empresa" class="form-control">
						<?php foreach ($tipo_empresa as $item) : ?>
							<option value="<?=$item['id']?>"><?=$item['descricao']?></option>
						<?php endforeach ?>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label for="nome" class="col-sm-2 control-label">Nome <span class="text-red">*</span></label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required="required" maxlength="200">
					</div>

					<label for="nomefantasia" class="col-sm-2 control-label">Nome Fantasia <span class="text-red">*</span></label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="nomefantasia" name="nomefantasia" placeholder="Nome fantasia" required="required" maxlength="200">
					</div>
				</div>

				<div class="form-group">
					<label for="cnpj" class="col-sm-2 control-label">CNPJ <span class="text-red">*</span></label>
					<div class="col-sm-4">
						<input type="text" class="form-control masc cnpj" id="cnpj" name="cnpj" placeholder="CNPJ" required="required" maxlength="200">
					</div>

					<label for="razaosocial" class="col-sm-2 control-label">Razão Social <span class="text-red">*</span></label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="razaosocial" name="razaosocial" placeholder="Razão Social" required="required" maxlength="200">
					</div>
				</div>

				<div class="form-group">
					<label for="inscricao_estadual" class="col-sm-2 control-label">Inscrição <span class="text-red">*</span></label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="inscricao_estadual" name="inscricao_estadual" placeholder="Inscrição estadual" required="required" maxlength="200">
					</div>

					<label for="representante" class="col-sm-2 control-label">Representante <span class="text-red">*</span></label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="representante" name="representante" placeholder="Representante da empresa" required="required" maxlength="200">
					</div>
				</div>				

				<div class="form-group">
					<label for="descricao" class="col-sm-2 control-label">Descrição</label>
					<div class="col-sm-10">
						<textarea name="descricao" id="descricao" class="form-control" placeholder="Escreva a descrição da sua empresa" maxlength="2000"></textarea>
					</div>
				</div>		  		  

				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">E-mail <span class="text-red">*</span></label>
					<div class="col-sm-3">
						<input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required="required" maxlength="200">
					</div>

					<label for="telefone" class="col-sm-2 control-label">Telefone <span class="text-red">*</span></label>
					<div class="col-sm-2">
						<input type="text" class="form-control masc telefone" id="telefone" name="telefone" placeholder="(XX) XXXX-XXXX"  maxlength="14">
					</div>

					<label for="celular" class="col-sm-1 control-label">Celular</label>
					<div class="col-sm-2">
						<input type="text" class="form-control masc celular" id="celular" name="celular" placeholder="(XX) XXXXX-XXXX"  maxlength="15">
					</div>
				</div>

				<div class="form-group">
					<label for="endereco" class="col-sm-2 control-label">Endereço</label>
					<div class="col-sm-7">
						<input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço" maxlength="200">
					</div>

					<label for="cep" class="col-sm-1 control-label">CEP</label>
					<div class="col-sm-2">
						<input type="text" class="form-control masc cep" id="cep" name="cep" placeholder="XXXXX-XXX" maxlength="9">
					</div>
				</div>		  		  		  

				<div class="form-group">
					<label for="bairro" class="col-sm-2 control-label">Bairro</label>
					<div class="col-sm-3">
						<input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro" maxlength="200">
					</div>

					<label for="cidade" class="col-sm-1 control-label">Cidade</label>
					<div class="col-sm-3">
						<input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade" required="required" maxlength="200">
					</div>

					<label for="estado" class="col-sm-1 control-label">Estado</label>
					<div class="col-sm-2">
						<select class="form-control" id="estado" name="estado" required="required">
						<?php foreach ($estados as $estado) : ?>
							<option value="<?=$estado["id"]?>"><?=$estado["descricao"]?></option>
						<?php endforeach ?>
						</select>
					</div>
				</div>				  		  		  		  		  		  		  
										
				<div class="form-group">
					<label for="localizacao" class="col-sm-2 control-label">Localização</label>
					<div class="col-sm-10">
					<textarea name="localizacao" id="localizacao" class="form-control" placeholder="Cole aqui a Localização de sua Empresa" maxlength="250"></textarea>
					</div>
				</div>
				
				<div class="form-group">
					<label for="imagem" class="col-sm-2 control-label">Imagem <span class="text-red"></span></label>
					<div class="col-sm-4">

						<input type="file"  id="imagem" name="imagem"/> 
					</div>
					
				</div>	
				
				<div class="form-group">
					<label for="atencao" class="col-sm-2 control-label"><span class="text-red"></span></label>
					<div class="col-sm-8">
					<p><strong>Serão permitidas apenas imagens de logomarca no formato JPG e no tamanho de 200 x 200.</strong></p>
					</div>
				</div>

				<div class="form-group">
					<label for="login" class="col-sm-2 control-label">Login <span class="text-red">*</span></label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="login" name="login" placeholder="Login" required="required" maxlength="30" minlength="4">
					</div>
				</div>				  		  		  		  		  		  		  

				<div class="form-group">
					<label for="senha" class="col-sm-2 control-label">Senha <span class="text-red">*</span></label>
					<div class="col-sm-4">
						<input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required="required" maxlength="30" minlength="6">
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-primary">
							<i class="fa fa-fw fa-save"></i> Cadastrar
						</button>
					</div>
				</div>

			</form>
		</div>
    </div>
</section>