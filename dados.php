<section class="conteudo-interno">
	<div class="container">
		<div class="row">
			<div class="col-sm-10">
				<h5 align="center"><strong>Resultados das Corridas</strong></h5>
				</br>
				
				<h4>Melhor volta:</h4>
				<?php foreach($piloto as $pilot){ //var_dump($pilot); die;
				$racer = $pilot['piloto'];	
				$time = $pilot['tempo'];	
				$volta = $pilot['num_volta'];
				$media = $pilot['vlc_media'];
				} ?>	
				<label>Piloto: </label><?=$racer?></br>
				<label>Volta: </label><?=$volta?></br>
				<label>Tempo: </label><?=$time?></br>
				<label>Média: </label><?=$media?></br>
				</br>				
				</br>			
				<p>Clique abaixo para voltar</p>
				<a href='/resultados'><strong>Voltar</strong></a></br>
			</div>
		</div>
	</div>
</section>
	