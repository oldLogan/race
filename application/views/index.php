<!DOCTYPE html>

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Drivy</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="shortcut icon" type="image/png" href="<?=base_url(); ?>/assets/images/favicon.png"/>
        <link rel="shortcut icon" type="image/png" href="https://drivycar.com.br/assets/images/favicon.png"/>

        
</head>

<style>
 

</style>

    <div class="container">
        <div class="row">
            <div class="form-group">
                <div class="col-sm-12 text-center">
					</br>
					</br>
					</br>
					</br>
					</br>
					<h3>Os pilotos:</h3>
					 <?php   foreach ($pilotos as $piloto) { ?>
                    <tr>
                        <td><?=$piloto["nme_piloto"]?></br></td>
					</tr>
					 <?php   }   ?>
					</br>
					</br>
					</br>
                    <h5>Acompanhe aqui o resultado da última corrida</h5>
					<a href="/resultados">Resultados</a>
            </div>
        </div>
	</div>

