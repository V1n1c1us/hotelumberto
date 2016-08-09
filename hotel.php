<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Hotel umberto - Hotel</title>
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
          <h2>HOTEL</h2>
        </div>
        <div class="texto">
          <p>Somos uma empresa local de gestão familiar, que atua no serviço de hotelaria a mais de 60 anos. Possuímos uma estrutura de apartamentos com banheiro privativo, ar condicionado, frigobar, internet wi-fi, tv a cabo, café da manhã e serviços secundários de estacionamento com manobrista, lavanderia e serviço de quarto, isso tudo aliado à praticidade de uma localização privilegiada.</p>
        </div>
        	<img class="img-responsive img-hotel" src="images/img-hotel.png" alt="Hotel Umberto"/>
        </div>
    </div>
  </div>
</section>

<div class="clearfix"></div>
<?php include('inc/footer.php');?>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=1668603073355396";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script>
</body>
</html>