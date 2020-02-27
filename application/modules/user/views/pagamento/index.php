
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pagamento</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
</head>

<!--<div class="container">
<?php   $page = array("title" => "Pagamento", "home" => "Dashboard", "homelink" => "/dashboard");
            require_once(APPPATH."views/template/breadcrumb.php") ?>

</div>-->

<div class="container">

    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th width="10%">Ordem</th>
                    <th>Produto</th>
                    <th>Total</th>
                    <th>Data</th>
                    <th></th>
                </tr>
            </thead>    
        
            <tr>
                <td>#<?=$produto["chave"]?></td><!--<input type="hidden" id="chave" name="chave" value="<?//=$item["chave"]?>">-->
                <td><?=$produto["titulo"]?></td>
                <td><?=numberToMoney($produto["valor"])?></td>
                <td><?=date("d/m/Y H:i:s", strtotime($produto["data"]));?></td>
            </tr>
        
        </table>
    </div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-6">
			<div class="panel panel-default" style="padding: 35px;">
                <div class="" style="margin: 20px 0; border-bottom: 1px solid #ddd;">
					<h4 align="center"><font color="blue"><strong>Detalhes da Compra</strong></font></h4>
				</div>
          
        <h5><strong>Produto: <?=$produto["titulo"]?></strong></h5>
		
		<h5><strong>Serviços inclusos no Pacote:</strong></h5>

		<h5><strong>Auto Escola:</strong></h5>

	<?php foreach($servico as $serv){?>
		
			<?php if($serv["id_serv"] != 23 && $serv["tpo_empresa"] == 1){?>
			
				<p><?=$serv["nme_servico"]?>: R$ <?=$serv["vlr_serv"]?></p>
				
			<?php }?>
				
	<?php }?>			

		<h5><strong>Clínica:</strong></h5>

	<?php foreach($servico as $serv){?>
		
			<?php if($serv["id_serv"] != 23 && $serv["tpo_empresa"] == 2){?>			
				
				<p><?=$serv["nme_servico"]?>: R$ <?=$serv["vlr_serv"]?></p>
				
			<?php }?>
				
	<?php }?>
				
		<h5><strong>Taxas:</strong></h5>

	<?php foreach($servico as $serv){?>
		
			<?php if($serv["id_serv"] == 23){?>	

				<p><?=$serv["nme_servico"]?>: R$ <?=$serv["vlr_serv"]?></p>
					
			<?php }?>
			
	<?php }?> 
	
		</br>
		<h5><strong><font color="red">***</font> Valor Total do Pacote: R$ <?=$produto["valor"]?> </strong></h5>
	
		<p align="justify"><strong><font color="red">***</strong> O valor total refere-se aos serviços inclusos no pacote, nao estao inclusas as Taxas do DETRAN
		ou quaisquer outras taxas que possam vir a ser cobradas pela Auto Escola ou pela Clínica.</font></p>
	
	
			</div>
		</div>
	
		<form method="POST" action="#">
			<div class="row">
				<div class="col-sm-6">
					<div class="panel panel-default " style="padding: 35px;">
						<div class="" style="margin: 20px 0; border-bottom: 1px solid #ddd;">
							<h4 align="center"><font color="blue"><strong>Formas de Pagamento</font></strong></h4>
						</div>
					
						<input type="radio" name="c_cred" value="c_cred" align="left">   Cartao de Crédito</input>
						<img src="<?=base_url(); ?>/assets/images/cartao_cred.jpg" alt="cCred" width="85" height="53"/>
						</br></br></br>
						<input type="radio" name="boleto" value="c_cred">   Boleto Bancário</input>
						<img src="<?=base_url(); ?>/assets/images/boleto.jpg" alt="cCred" width="85" height="53" />
						</br></br></br></br>
						
						
			<?php if(!isset($_POST['c_cred'])){ ?>
					
				<a href="/user/cartao_cred" class="btn btn-info" align="center">Avançar</a>
				
			<?php }else{ ?>
				
				<a href="/user/boleto" class="btn btn-info" align="center">Avançar</a>
				
			<?php }	?>
			
			
					</div>
				</div>	
			</div>
		</form>	
	</div>
</div>

<script src="<?=base_url(); ?>/assets/plugins/jquery-ui/jquery-ui.min.js"></script>