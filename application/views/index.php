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
                    <h5>Insira o arquivo de texto para obter o resultado da última corrida</h5>
					<form method="POST" action="/principal/processar" enctype="multipart/form-data">
						<label>Arquivo</label>
						<input type="file" name="arquivo"><br><br>
						<input type="submit" value="Importar">
					</form>
					
            </div>
        </div>
	</div>

