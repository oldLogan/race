<!doctype html>

	<html class="no-js" lang="">
   	
	<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>RACES</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="shortcut icon" type="image/png" href="<?=base_url(); ?>/assets/images/favicon.png"/>
        <link rel="shortcut icon" type="image/png" href="https://drivycar.com.br/assets/images/favicon.png"/>

        <?php require_once(APPPATH."views/template/imports.php") ?>
    </head>
    <body>
      
		<nav class="navbar navbar-default">
            <div class="container">
            
				<div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="true">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">
                        <img src="<?=base_url(); ?>/assets/images/logomarca_transparente.png" alt="Logo" />
                    </a>
                </div>
                         
               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right"> <!-- nav navbar-nav navbar-right -->
                        <li class="active"><a href="/">Página Inicial</a></li>
						<li><a href="/pilotos">Pilotos</a></li>
						<li><a href="/resultados">Resultados</a></li>
					</ul>
				</div>
				
			</div>
        </nav>
    </body>    