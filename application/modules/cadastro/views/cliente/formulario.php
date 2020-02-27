<script src="https://apis.google.com/js/platform.js" async defer></script>
<meta name="google-signin-client_id" content="400230565513-lpig1fjf23mlvicso10krhcup9hmcn83.apps.googleusercontent.com">
<script type="text/javascript">
function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  
  var id_token = googleUser.getAuthResponse().id_token;
  $("#idOath").val(profile.getId());
  $("#oauth_provider").val("Google")
  $("#nome").val(profile.getName());
  $("#email").val(profile.getEmail());
  $('#botoesCadastrar').hide('slow');
  $('#formCadastroDiv').show('slow');
  $(".alert-sucess-google").html('Seja bem vindo <b>'+profile.getName()+'</b>, tudo certo, vamos completar o seu cadastro.')
  $(".alert-sucess-google").show();

}

function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();   
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
}
</script>
<section class="conteudo-interno">
	<div class="container">
		<div class="row">
			<h2 class="title-page">Formulário de clientes</h2>
		</div>

		<div class="row">
			<?php if(!empty($_SESSION['dados'])){ ?>
			<p class="alert alert-success">
				Muito bem, vamos realizar o cadastro para dar continuidade ao processo.
			</p>
			<?php } ?>
			<?php if(isset($usuarioFacebook)){ ?>
			<p class="alert alert-success">
				Seja bem vindo <b><?=isset($idFacebook)?$usuarioFacebook:'';?></b>, tudo certo, vamos completar o seu cadastro.
			</p>
			<?php } ?>
			<p class="alert alert-success alert-sucess-google" style="display: none;">
			</p>
		</div>
		<p> </p>
		<div id="botoesCadastrar" style="display:<?=isset($idFacebook)?'none':'block';?>" class="row">
			<strong>Como deseja se cadastrar?<strong><br /><br />

				<a class="btn btn-primary" style="width: 200px;" href='https://www.facebook.com/dialog/oauth?client_id=417139155767626&redirect_uri=https://www.drivycar.com.br/cadastro/cliente/formulario'><span class="fa fa-facebook"></span> Facebook</a>
				<p></p>
				<button class="btn" style="width: 200px;" href="javascript: void" onClick="$('#formCadastroDiv').show('slow'); $('#botoesCadastrar').hide('slow'); "><span class="glyphicon glyphicon-envelope"></span> E-mail</button>
				<p></p>
				<div class="g-signin2" style="width: 200px;" data-onsuccess="onSignIn"></div><br />
		</div>

		<div class="row" style="display: <?=isset($idFacebook)?'block':'none';?>;" id="formCadastroDiv">
			<form action="/cadastro/cliente/gravar" method="POST" class="form-horizontal">

				<div class="form-group">
					<label for="nome" class="col-sm-2 control-label">Nome <span class="text-red">*</span></label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="nome" name="nome" value="<?=isset($idFacebook)?$usuarioFacebook:'';?>" placeholder="Nome" required="required" maxlength="200">
							<input type="hidden" name="idOath" id="idOath" value="<?=isset($idFacebook)?$idFacebook:''; ?>" />
							<input type="hidden" name="oauth_provider" id="oauth_provider" value="<?=isset($idFacebook)?'Facebook':''; ?>" />
					</div>

					<label for="cpf" class="col-sm-1 control-label">CPF <span class="text-red">*</span></label>
					<div class="col-sm-5">
						<input type="text" class="form-control masc cpf" id="cpf" name="cpf" placeholder="000.000.000-00" required="required" maxlength="14">
					</div>
				</div>  		  

				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">E-mail <span class="text-red">*</span></label>
					<div class="col-sm-4">
						<input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required="required" maxlength="200">
					</div>

					<label for="telefone" class="col-sm-1 control-label">Tel. <span class="text-red">*</span></label>
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
						<select class="form-control" id="id_estado" name="id_estado" required="required">
							<?php foreach ($estados as $estado) : ?>
								<option value="<?=$estado["id"]?>"><?=$estado["descricao"]?></option>
							<?php endforeach ?>
						</select>
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