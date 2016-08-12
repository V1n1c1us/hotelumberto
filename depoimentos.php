<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
<title>Hotel umberto - Depoimentos</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/hover.css" rel="stylesheet" type="text/css"/>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
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
          <h2>DEPOIMENTOS</h2>
        </div>
        <div class="texto">
          <p>Preenxa os campos abaixo e deixe seu depoimento.</p>
        </div>
     </div>

    <form action="" role="form">
                <div class="col-lg-6">
                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                      <div class="form-group">
                        <input type="text" name="nome" id="nome" class="form-control " placeholder="Nome">
                      </div>
                      <div class="form-group">
                        <input type="text" name="sobrenome" id="sobrenome" class="form-control " placeholder="Sobrenome">
                      </div>
                      <div class="form-group">
                        <input type="text" name="profissao" id="profissao" class="form-control " placeholder="Profissão">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                      <textarea name="mensagem" class="form-control" rows="6" placeholder="Mensagem"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
                                                         <div class="row">
               <div class="action">
                  <button class="button01" type="submit">ENVIAR</button>
               </div>
            </div>

              </form>
  </div>
  </div>
</section>

<div class="clearfix"></div>
<?php include('inc/footer.php');?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script>
</body>
</html>