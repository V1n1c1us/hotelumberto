<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hotel umberto - Acomodações</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/hover.css" rel="stylesheet" type="text/css"/>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/owl.carousel.css" rel="stylesheet" type="text/css"/>       
</head>
    <body>
        <!-- MENU/HEADER-->
        <nav class="navbar animate top">
            <div class="container">
                <div class="area-logo">
                    <a href="http://hotelumberto.com.br/"><img src="images/logoHotel.png" alt="Hotel Umberto">
                    </a>
                </div>
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navigator">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1" aria-expanded="false"><span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="menu-contato">
                        <ul>
                            <li id="borderRight"><i class="fa fa-phone icon"> (55) 3223-1210 / (55) 3221-1270</i></li>
                            <li><i class="fa fa-envelope-o icon"> contato@hotelumberto.com.br</i></li>
                            <li><img src="images/logoFace.png"/></li> 
                        </ul>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#" class="anchor-scroll">Home</a></li>
                            <li class='active'><a href="#" class="anchor-scroll">Hotel</a></li>
                            <li><a href="#" class="anchor-scroll">Acomodações</a></li>
                            <li><a href="#">Tarifário</a></li>
                            <li><a href="#">Informações</a></li>
                            <li><a href="#">Eventos</a></li>
                            <li><a href="#">Notícias</a></li>
                            <li><a href="#">Contatos</a></li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
            </div>
        </nav>
        <div class="clearfix"></div>
        <!-- SECTION BANNER-->
        <section class="middle-hotel">
        	<div class="container">
        		<div class="row">
                <div class="col-lg-2"></div>
                	 <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                     	<div class="titulo">
            				<h2>PEDIDO HOSPEDAGEM</h2>
            			</div>
                        <table class="table table-striped" style="margin-top: 50px;">
                        <tr>
                        	<th>Nome</th>
                        	<th>Email</th>                            
                        	<th>Nº de Hóspedes</th>
                        	<th>Entrada</th>
                        	<th>Saída</th>                                                       
                        </tr>
                        <?php
							$entrada = $_POST['entrada'];
							$saida = $_POST['saida'];
							$nHosp = $_POST['numerohosp'];
							$nome = $_POST['nome'];
							$email = $_POST['email'];
						?>
                        <tr> 
                        	<td><?php echo $nome?></td>
                        	<td><?php echo $email?></td>
                        	<td><?php echo $nHosp?></td>
                        	<td><?php echo $entrada?></td>
                        	<td><?php echo $saida?></td>
                        </tr>                       
                        </table>
	                </div>
                     </div>
                     <div class="col-lg-2"></div>
                </div>
      	 	</div> 
        </section>
        <div class="clearfix"></div>
        <section class="contato">
            <div class="container">
            	<div class="row">
                	<div class="col-md-4">
                    	<h2>Contatos</h2>
                        <ul class="visita">
                        	<li>
                  				 <i class="fa fa-map-marker icone"></i> Rua: Pinheiro Machado, 2310
                			</li>
                			<li style="margin-left: 20px;"> CEP:9705-600</li>
                			<li style="margin-left: 20px;"> Santa Maria - RS</li>
                            <li><i class="fa fa-envelope icone"></i> contato@hotelumberto.com.br</li>
                            <li><i class="fa fa-phone icone"></i> (55) 3223-1210 / (55) 3221-1270</li>
                        </ul>
                    </div>
                   	<div class="col-md-4">
	                    <h2>Serviços</h2>
                        <ul class="servicos">
                        	<li>Acomodações</li>
                            <li>Café da Manhã</li>
                            <li>Estacionamento</li>
                            <li>Bar</li>
                            <li>Auditório</li>
                            <li>Sala de Reuniões</li>
                        </ul>
                    </div>
                    <div class="col-md-4">
	                    <h2>Facebook</h2>
               			<div class="fb-page" data-href="https://www.facebook.com/hotelumbertosantamaria/?fref=ts" data-tabs="timeline" data-height="230" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/hotelumbertosantamaria/?fref=ts" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/hotelumbertosantamaria/?fref=ts">Hotel Umberto</a></blockquote>
                    </div>
                	</div>
            </div>
        </section>
        <div class="clearfix"></div>
        <div class="copyright">
        <div class="container">
            <p class="copy">HOTEL UMBERTO • © Copyright 2016 • Todos os Direitos Reservados</p>
            <a class="logo-iguana" href="http://iguanaweb.com.br" target="_blank"></a>
        </div>
</div>
 <script>(function(d, s, id) {
  	var js, fjs = d.getElementsByTagName(s)[0];
  	if (d.getElementById(id)) return;
  	js = d.createElement(s); js.id = id;
  	js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=1668603073355396";
	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.js"></script> 
<script async>
    $(document).ready(function () {
        if ($(".owl-slide").length > 0) {
            $(".owl-slide").owlCarousel({
                autoplay: true,
                dots: true,
                nav: false,
                loop: true,
                items: 2,
				margin: 23
            });
        }
    });
	</script>
    </body>
</html>
