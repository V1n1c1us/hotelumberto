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
<section class="middle-noticias">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="titulo">
    <h2>NOTÍCIAS</h2>
  </div>
</div>

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="noticias">
<img src="images/noticias/img-noticias-2.png" alt="" class="pull-left img-responsive thumb margin10 img-thumbnail" style="">
<article>
<h3 class="titulo-noticia">PEQUENO TEXTO EXPLICATIVO</h3>
<article>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ac mattis mi. Donec interdum sollicitudin tempor. Fusce ut ipsum sed ante mollis imperdiet</p>
</article>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="noticias">
<img src="images/noticias/img-noticias-3.png" alt="" class="pull-left img-responsive thumb margin10 img-thumbnail" style="">
<article>
<h3 class="titulo-noticia">PEQUENO TEXTO EXPLICATIVO</h3>
<article>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ac mattis mi. Donec interdum sollicitudin tempor. Fusce ut ipsum sed ante mollis imperdiet</p>
</article>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="noticias">
<img src="images/noticias/img-noticias-3.png" alt="" class="pull-left img-responsive thumb margin10 img-thumbnail" style="">
<article>
<h3 class="titulo-noticia">PEQUENO TEXTO EXPLICATIVO</h3>
<article>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ac mattis mi. Donec interdum sollicitudin tempor. Fusce ut ipsum sed ante mollis imperdiet</p>
</article>
</div>
</div>
<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="noticias">
<img src="images/noticias/img-noticias-2.png" alt="" class="pull-left img-responsive thumb margin10 img-thumbnail" style="">
<article>
<h3 class="titulo-noticia">PEQUENO TEXTO EXPLICATIVO</h3>
<article>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ac mattis mi. Donec interdum sollicitudin tempor. Fusce ut ipsum sed ante mollis imperdiet</p>
</article>
</div>
</div>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    				<div class="noticias-setas"> <a id="left" onclick="menuList('pasteis-p3')"><i class="fa fa-arrow-left"></i></a> <a id="right" onclick="menuList('pasteis-p2')"><i class="fa fa-arrow-right"></i></a> </div>
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