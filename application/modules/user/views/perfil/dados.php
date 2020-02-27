<style>
    #user-content .container{
        padding: 50px 0;
    }
</style>

    <section id="user-content" class="lightbg">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Meus dados</h4>

                    <?php if($this->session->flashdata("success"))  : ?>
                        <p class="alert alert-success"><?= $this->session->flashdata("success") ?></p>
                    <?php endif ?>                    
                    <?php if($this->session->flashdata("danger"))  : ?>
                        <p class="alert alert-danger"><?= $this->session->flashdata("danger") ?></p>
                    <?php endif ?>                    
                </div> 
            </div>
            
            <hr>

            <div class="row">
                <form action="/user/perfil/gravar" method="POST" class="form-horizontal">

                <div class="form-group">
                    <label for="nome" class="col-sm-2 control-label">Nome <span class="text-red">*</span></label>
                    <div class="col-sm-4">
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required="required" maxlength="200" value="<?=$cliente["nome"]?>">
                    </div>

                    <label for="cpf" class="col-sm-2 control-label">CPF <span class="text-red">*</span></label>
                    <div class="col-sm-4">
                    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" required="required" maxlength="14" value="<?=$cliente["cpf"]?>">
                    </div>
                </div>  		  

                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">E-mail <span class="text-red">*</span></label>
                    <div class="col-sm-3">
                    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required="required" maxlength="200" value="<?=$cliente["email"]?>">
                    </div>

                    <label for="telefone" class="col-sm-2 control-label">Telefone <span class="text-red">*</span></label>
                    <div class="col-sm-2">
                    <input type="text" class="form-control" id="telefone" name="telefone" placeholder="(XX) XXXX-XXXX"  maxlength="14" value="<?=$cliente["telefone"]?>">
                    </div>

                    <label for="celular" class="col-sm-1 control-label">Celular</label>
                    <div class="col-sm-2">
                    <input type="text" class="form-control" id="celular" name="celular" placeholder="(XX) XXXXX-XXXX"  maxlength="15" value="<?=$cliente["celular"]?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="endereco" class="col-sm-2 control-label">Endereço</label>
                    <div class="col-sm-7">
                    <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Endereço" maxlength="200" value="<?=$cliente["endereco"]?>">
                    </div>

                    <label for="cep" class="col-sm-1 control-label">CEP</label>
                    <div class="col-sm-2">
                    <input type="text" class="form-control" id="cep" name="cep" placeholder="XXXXX-XXX" maxlength="9" value="<?=$cliente["cep"]?>">
                    </div>
                </div>		  		  		  

                <div class="form-group">
                    <label for="bairro" class="col-sm-2 control-label">Bairro</label>
                    <div class="col-sm-3">
                    <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro" maxlength="200" value="<?=$cliente["bairro"]?>">
                    </div>

                    <label for="cidade" class="col-sm-1 control-label">Cidade</label>
                    <div class="col-sm-3">
                    <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade" required="required" maxlength="200" value="<?=$cliente["cidade"]?>">
                    </div>

                    <label for="estado" class="col-sm-1 control-label">Estado</label>
					<div class="col-sm-2">
						<select class="form-control" id="estado" name="estado" required="required">
						<?php foreach ($estados as $estado) : ?>
							<option value="<?=$estado["id"]?>" <?php if($cliente["id_estado"] == $estado["id"]){ echo "selected"; } ?>><?=$estado["descricao"]?></option>
						<?php endforeach ?>
						</select>
					</div>
				</div>	
                </div>				  		  		  		  		  		  		  

                <!--<div class="form-group">
                    <label for="login" class="col-sm-2 control-label">Login <span class="text-red">*</span></label>
                    <div class="col-sm-4">
                    <input type="text" class="form-control disabled" id="login" name="login" placeholder="Login" required="required" maxlength="30" minlength="4" value="<?//=$cliente["login"]?>" readonly>
                    </div>
                </div>-->				  		  		  		  		  		  		  

                <!-- <div class="form-group">
                    <label for="senha" class="col-sm-2 control-label">Senha <span class="text-red">*</span></label>
                    <div class="col-sm-4">
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required="required" maxlength="30" minlength="6">
                    </div>
                </div> -->

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">
                            <i class="fa fa-fw fa-save"></i> Atualizar
                        </button>
                    </div>
                </div>

                    <input type="hidden" name="id" value="<?=$cliente["id"]?>">
                </form>
            </div>

        </div>

    </section>