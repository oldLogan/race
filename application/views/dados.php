<section class="conteudo-interno">
	<div class="container">
		<div class="row">
			<div class="col-sm-10">
				<h5 align="center"><strong>Resultados das Corridas</strong></h5>
				</br>
				<h4>Melhor volta:</h4>
				<?php foreach($piloto as $pilot){ 
				$time = $pilot['tempo'];	
				$pilot = $pilot['piloto'];
				$volta = $pilot['num_volta'];
				$media = $pilot['vlc_media'];
				} ?>
				<label>Piloto: </label><?=$pilot?> - 
				<label>Volta: </label><?=$volta?> - 
				<label>Tempo: </label><?=$time?></br>
				</br>				
				</br>				
				<p>Clique abaixo para voltar</p>
				<a href='/resultados'><strong>Voltar</strong></a></br>
			</div>
		</div>
	</div>
</section>
	