<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    
	<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-138039378-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-138039378-1');
		</script>

	
	
	<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Drivy</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="shortcut icon" type="image/png" href="<?=base_url(); ?>/assets/images/favicon.png"/>
        <link rel="shortcut icon" type="image/png" href="https://drivycar.com.br/assets/images/favicon.png"/>        

        <?php require_once(APPPATH."views/template/imports.php") ?>

    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Sections -->
<!--         <section id="social" class="social">
            <div class="container">
                <div class="row">
                    <div class="social-wrapper">
                        <div class="col-md-6">
                            <div class="social-icon">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="social-contact">
                                <a href="#"><i class="fa fa-phone"></i>+011 54925849</a>
                                <a href="#"><i class="fa fa-envelope"></i>contact@softech.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <nav class="navbar navbar-default">
            <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/user">
                        <img src="<?=base_url(); ?>/assets/images/logomarca_transparente.png" alt="Logo" />
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="/">Página Inicial</a></li>
                        <li><a href="/user/servicos">Serviços</a></li>
                        <!--<li><a href="/user/financeiro">Financeiro</a></li>-->
						<li><a href="#">Status</a></li>
                        <li><a href="#">Avaliação</a></li>
                        <li class="dropdown user-avatar">
                            <a href="/user" class="dropdown-toggle" data-toggle="dropdown">
                                <img class="img-user img-circle" src="<?=base_url("assets/images/sem-foto.jpg")?>" alt="Sem foto">
                            </a>

                            <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img class="img-user img-circle" src="<?=base_url("assets/images/sem-foto.jpg")?>" alt="Sem foto">

                                <p>
                                <?=$usuarioLogado["nome"]?>
                                <!-- <small>Member since Nov. 2012</small> -->
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="/user/perfil/dados" class="btn btn-default">Meus dados</a>
                                </div>
                                <div class="pull-right">
                                    <a href="/login/logout" class="btn btn-default"><i class="fa fa-power-off"></i> Sair</a>
                                </div>
                            </li>
                            </ul>                            
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        