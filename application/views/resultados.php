<section class="conteudo-interno">
	<div class="container">
		<div class="row">
			<div class="col-sm-10">
				
				<h5 align="center"><strong>Resultados das Corridas</strong></h5>
				
						</br>
						<h4>Melhor volta:</h4>
						<?php foreach($volta as $dado){ 
						$time = $dado['tempo'];	
						$pilot = $dado['piloto'];
						$volta = $dado['num_volta'];?>
						<?php } ?>
						<label>Piloto: </label><?=$pilot?> - 
						<label>Volta: </label><?=$volta?> - 
						<label>Tempo: </label><?=$time?></br>
						</br>				
						</br>				
						</br>				
						<h4>Vencedor:</h4>		
						<?php foreach($vence as $dado){ 
						$time = $dado['tempo'];	
						$pilot = $dado['piloto'];
						$volta = $dado['num_volta'];?>
						<?php } ?>
						<label>Piloto: </label><?=$pilot?> - 
						<label>Tempo Médio: </label><?=round($time, 6)?>
						<?php  ?> 
						</br>				
						</br>				
						</br>
						<h4>Dados Individuais dos Pilotos:</h4>
						<p>Clique nos nomes para visualizar</p>
						<?php foreach($piloto as $data){?>
						<?php	$pilot = $data['piloto'];
								$id = $data['cod_piloto'];
						?>		
						<a href='/dados?id=<?=$id?>'><strong><?=$pilot?></strong></a></br>
						<?php } ?>	
						
			</div>
		</div>
	</div>
</section>
	