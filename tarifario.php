<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
<title>Hotel umberto - Tarifário</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/hover.css" rel="stylesheet" type="text/css"/>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="css/datepicker.css" rel="stylesheet" type="text/css"/>
<script src="js/bootstrap-datepicker.js" type="text/javascript"></script>
</head>
<body>
<!-- MENU/HEADER-->
<?php include('inc/header.php');?>
<!-- FIM MENU HEADER-->

<div class="clearfix"></div>
<!-- SECTION BANNER-->
<section class="middle-hotel">
 <div class="container">
   <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="titulo">
          <h2>TARIFÁRIO</h2>
        </div>
        <div class="texto">
          <h3><b>PREÇOS HOTEL UMBERTO</b></h3>
        </div>
     </div>
   </div>
   <div class="row">
   	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
    	<div class="box1">
        	<div class="topo">
            	<span>1 Pessoa</span>
            </div>
        	<div class="preco">
            	R$ <span class="valor">120</span>,00
            </div>
         	<div class="meio">
            	<p>Apartamento com TV a cabo e Ar - condicionado Detalhes</p>
            </div>                      
        </div>
    </div>
   	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
    <div class="box2">
        	<div class="topo">
            	<span>2 Pessoa/ casal</span>
            </div>
        	<div class="preco" id="casal">
            	R$ <span class="valor">120</span>,00
            </div>
         	<div class="meio">
            	<p>Apartamento com TV a cabo e Ar - condicionado Detalhes</p>
            </div>                      
        </div>
    </div>
   	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
		<div class="box3">
        	<div class="topo">
            	<span>3 Pessoa</span>
            </div>
        	<div class="preco" id="ultimo">
            	R$ <span class="valor">195</span>,00
            </div>
         	<div class="meio">
            	<p>Apartamento com TV a cabo e Ar - condicionado Detalhes</p>
            </div>                      
        </div>
    </div>    
    </div>
     <div class="row">
   	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="texto">
          <h3><b>PREÇOS POUSADA REGINA</b></h3>
        </div>
     </div>
   </div>
   <div class="row">
   	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
    	<div class="box1">
        	<div class="topo">
            	<span>1 Pessoa</span>
            </div>
        	<div class="preco">
            	R$ <span class="valor">110</span>,00
            </div>
         	<div class="meio">
            	<p>Apartamento com Ar - Condicionado, sala de TV e cozinha coletiva</p>
            </div>                      
        </div>
    </div>
   	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
    <div class="box2">
        	<div class="topo">
            	<span>2 Pessoa/ casal</span>
            </div>
        	<div class="preco" id="casal">
            	R$ <span class="valor">145</span>,00
            </div>
         	<div class="meio">
            	<p>Apartamento com Ar - Condicionado, sala de TV e cozinha coletiva</p>
            </div>                      
        </div>
    </div>
   	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
<div class="box3">
        	<div class="topo">
            	<span>3 Pessoa</span>
            </div>
        	<div class="preco" id="ultimo">
            	R$ <span class="valor">178</span>,00
            </div>
         	<div class="meio">
            	<p>Apartamento com Ar - Condicionado, sala de TV e cozinha coletiva</p>
            </div>                      
        </div>
    </div>    
    </div>
   </div>

</section>

<div class="clearfix"></div>
<?php include('inc/footer.php');?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCy-n4cUtfZ1ZRkDp0EhfTf4paSmqceHWQ&callback=initMap"></script>
<script async type="text/javascript">
    var map;
    function initMap() {
        var myLatLng = {lat: -29.691443, lng: -53.806831};

        map = new google.maps.Map(document.getElementById('mapa'), {
            center: myLatLng,
            zoom: 16
        });

        var marker = new google.maps.Marker({
            map: map,
            position: myLatLng,
            title: 'Hotel Humberto'
        });

    }
</script>
</body>
</html>