<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
    <title>Hotel umberto - Acomodaçoes</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/hover.css" rel="stylesheet" type="text/css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="lightbox/dist/css/lightbox.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css"/>

</head>
<body>
<!-- MENU/HEADER-->
<?php include('inc/header.php'); ?>
<!-- FIM MENU HEADER-->

<div class="clearfix"></div>
<!-- SECTION BANNER-->
<section class="middle-hotel">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="titulo">
                    <h2>ACOMODAÇÕES</h2>
                </div>
                <div class="texto">
                    <p>Estamos em constante modernizações e investimentos em infraestrutura para acomodá-lo melhor e
                        primar pelo aconchego e conforto do seu descanso.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="owl-carousel-acomodacoes">
                    <div class="owl-item">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                            <a href="images/acomodacoes/thumb/img-acomodacoes-1.jpg" data-lightbox="image-1">
                                <img class="img-responsive" src="images/acomodacoes/img-acomodacoes-1.jpg"
                                     alt="Acomodações"/>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                            <a href="images/acomodacoes/img-acomodacoes-2.jpg" data-lightbox="image-1">
                                <img class="img-responsive" src="images/acomodacoes/thumb/img-acomodacoes-2.jpg"
                                     alt="Acomodações"/>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                            <a href="images/acomodacoes/img-acomodacoes-3.jpg" data-lightbox="image-1">
                                <img class="img-responsive" src="images/acomodacoes/thumb/img-acomodacoes-3.jpg"
                                     alt="Acomodações"/>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                            <a href="images/acomodacoes/img-acomodacoes-4.jpg" data-lightbox="image-1">
                                <img class="img-responsive" src="images/acomodacoes/thumb/img-acomodacoes-4.jpg"
                                     alt="Acomodações"/>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                            <a href="images/acomodacoes/img-acomodacoes-5.jpg" data-lightbox="image-1">
                                <img class="img-responsive" src="images/acomodacoes/thumb/img-acomodacoes-5.jpg"
                                     alt="Acomodações"/>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                            <a href="images/acomodacoes/img-acomodacoes-6.jpg" data-lightbox="image-1">
                                <img class="img-responsive" src="images/acomodacoes/thumb/img-acomodacoes-6.jpg"
                                     alt="Acomodações"/>
                            </a>
                        </div>
                    </div>
                    <div class="owl-item">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                            <a href="images/acomodacoes/img-acomodacoes-7.jpg" data-lightbox="image-1">
                                <img class="img-responsive" src="images/acomodacoes/thumb/img-acomodacoes-7.jpg"
                                     alt="Acomodações"/>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                            <a href="images/acomodacoes/img-acomodacoes-8.jpg" data-lightbox="image-1">
                                <img class="img-responsive" src="images/acomodacoes/thumb/img-acomodacoes-8.jpg"
                                     alt="Acomodações"/>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                            <a href="images/acomodacoes/img-acomodacoes-9.jpg" data-lightbox="image-1">
                                <img class="img-responsive" src="images/acomodacoes/thumb/img-acomodacoes-9.jpg"
                                     alt="Acomodações"/>
                            </a>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                            <a href="images/acomodacoes/img-acomodacoes-10.jpg" data-lightbox="image-1">
                                <img class="img-responsive" src="images/acomodacoes/thumb/img-acomodacoes-10.jpg"
                                     alt="Acomodações"/>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="clearfix"></div>
<?php include('inc/footer.php'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="lightbox/dist/js/lightbox.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script>
    $(document).ready(function () {
        if ($(".owl-carousel-acomodacoes").length > 0) {
            $(".owl-carousel-acomodacoes").owlCarousel({
                autoplay: false,
                //autoplayHoverPause: true,
                dots: true,
                nav: true,
                loop: true,
                navText: ['<div class="setas"><i class="fa fa-arrow-left"></i></div>', '<div class="setas"><i class="fa fa-arrow-right"></i></div>'],
                items: 1,
            });
        }
    });
</script>
</body>
</html>