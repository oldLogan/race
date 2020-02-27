
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Cartao_cred</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
</head>

<!--<div class="container">
<?php   $page = array("title" => "Cartao_cred", "home" => "Dashboard", "homelink" => "/dashboard");
            require_once(APPPATH."views/template/breadcrumb.php") ?>

</div>-->

<form method="POST" action="#">
<div class="container">
	<div class="row">
		<div class="col-sm-6">
			<div class="panel panel-default " style="padding: 35px;">
				<div class="" style="margin: 20px 0; border-bottom: 1px solid #ddd;">
					<h4 align="center"><font color="blue"><strong>Cartão de Crédito  </font></strong><img src="<?=base_url(); ?>/assets/images/cartao_cred.jpg" alt="cCred" width="85" height="53"/></h4>
				</div>
			
				<h6 align="center"><font color="blue">Escolha a bandeira de seu Cartão de Crédito</font></h6></br></br>
				
				<input type="radio" name="master" value="master" align="left"> Mastercard</input>
				<img src="<?=base_url(); ?>/assets/images/master.png" alt="master" width="42" height="30"/></br></br>
				<input type="radio" name="visa" value="visa" align="center"> Visa</input>
				<img src="<?=base_url(); ?>/assets/images/visa.png" alt="visa" width="42" height="20"/></br></br>
				<input type="radio" name="alelo" value="alelo" align="left"> Alelo</input>
				<img src="<?=base_url(); ?>/assets/images/alelo.png" alt="alelo" width="42" height="28"/></br></br>
				<input type="radio" name="elo" value="elo" align="left"> Elo</input>
				<img src="<?=base_url(); ?>/assets/images/elo.png" alt="elo" width="28" height="28"/></br></br>
				<input type="radio" name="aex" value="aex" align="left"> American Express</input>
				<img src="<?=base_url(); ?>/assets/images/aex.png" alt="aex" width="42" height="30"/></br></br>
				<input type="radio" name="hiper" value="hiper" align="left"> Hipercard</input>
				<img src="<?=base_url(); ?>/assets/images/hiper.png" alt="hiper" width="46" height="28"/></br></br></br>
			
				<h6 align="center"><font color="blue">Escolha a quantidade de Parcelas</font></h6></br>
			
				<select name="parcelas" id="parcelas" class="form-control input-lg">
					<option value="1">1 x de <?=numberToMoney($produto["valor"])?></option>
					<option value="2">2 x de <?=numberToMoney($produto["valor"]/2)?></option>
					<option value="3">3 x de <?=numberToMoney($produto["valor"]/3)?></option>
					<option value="4">4 x de <?=numberToMoney($produto["valor"]/4)?></option>
					<option value="5">5 x de <?=numberToMoney($produto["valor"]/5)?></option>
					<option value="6">6 x de <?=numberToMoney($produto["valor"]/6)?></option>
					<option value="7">7 x de <?=numberToMoney($produto["valor"]/7)?></option>
					<option value="8">8 x de <?=numberToMoney((($produto["valor"]*0.03)+$produto["valor"])/8)?> com juros </option>
					<option value="9">9 x de <?=numberToMoney((($produto["valor"]*0.0325)+$produto["valor"])/9)?> com juros </option>
					<option value="10">10 x de <?=numberToMoney((($produto["valor"]*0.035)+$produto["valor"])/10)?> com juros </option>
					<option value="11">11 x de <?=numberToMoney((($produto["valor"]*0.0375)+$produto["valor"])/11)?> com juros </option>
					<option value="12">12 x de <?=numberToMoney((($produto["valor"]*0.04)+$produto["valor"])/12)?> com juros </option>
				</select>
				
			</div>
		</div>
		
		<div class="row">
			<div class="col-sm-6">
				<div class="panel panel-default " style="padding: 35px;">
					<div class="" style="margin: 20px 0; border-bottom: 1px solid #ddd;">
						<h4 align="center"><font color="blue"><strong>Informe os dados do Cartão de Crédito</font></h4></br>
					</div>
				
					<h6 align="left"><font color="blue">Nome (Como escrito no cartão)</font></h6>
					<input class="col-sm-8" type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required="required" maxlength="60">
					</br>
					</br>
					
					<script>
						function mascara_cartao() {
						if(document.form.cartao.value.length == 4) {
						document.form.cartao.value += '.';
						}
						if(document.form.cartao.value.length == 9) {
						document.form.cartao.value += '.';
						}
						if(document.form.cartao.value.length == 14) {
						document.form.cartao.value += '.';
						}
						}
					</script>
						
					<form name=form>	
					<h6 align="left"><font color="blue">Número do Cartão</font></h6>
					<input class="col-sm-8" type="text" class="form-control" id="cartao" name="cartao" placeholder="0000 0000 0000 0000" onKeyUp="mascara_cartao()" maxlength=19 required="required">
					</form>
					</br>
					</br>
					
					<h6 align="left"><font color="blue">Vencimento</font></h6>
					<div class="col-sm-12">
					<h6 align="left"><font color="blue">Mês</font></h6>
					<select name="mes" id="mes" class="col-sm-2" required="required">
					<option value="1">01</option>
					<option value="2">02</option>
					<option value="3">03</option>
					<option value="4">04</option>
					<option value="5">05</option>
					<option value="6">06</option>
					<option value="7">07</option>
					<option value="8">08</option>
					<option value="9">09</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					</select></br></br>
					
					<h6 align="left"><font color="blue">Ano</font></h6>
					<select name="ano" id="ano" class="col-sm-3" required="required">
					<option value="1">2019</option>
					<option value="2">2020</option>
					<option value="3">2021</option>
					<option value="4">2022</option>
					<option value="6">2023</option>
					<option value="7">2024</option>
					<option value="8">2025</option>
					<option value="9">2026</option>
					<option value="10">2027</option>
					<option value="11">2028</option>
					<option value="12">2029</option>
					<option value="13">2030</option>
					</select></br></br>
					</div>
					
					<h6 align="left"><font color="blue">CVV - Código de Segurança</font></h6>
					<input class="col-sm-3" type="text" class="form-control" id="cvv" name="cvv" placeholder="###" required="required" maxlength="3">
					</br>
					</br>
					</br>
										
					<a href="#" class="btn btn-info" align="center">Avançar</a>
					
				</div>
			</div>	
		</div>
		
	</div>
</div>

</form>	

<script src="<?=base_url(); ?>/assets/plugins/jquery-ui/jquery-ui.min.js"></script>