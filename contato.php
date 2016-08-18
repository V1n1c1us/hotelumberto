<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hotel umberto - Hotel</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/hover.css" rel="stylesheet" type="text/css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <!--    <script>-->
    <!--        var ajax = {-->
    <!--            isSubmiting: false,-->
    <!--            send: function() {-->
    <!---->
    <!--                if(ajax.isSubmiting == false) {-->
    <!--                    ajax.isSubmiting = true;-->
    <!---->
    <!--                    var formnome = $("input[name = name]").val();-->
    <!--                    var formtelefone = $("input[telefone = telefone]").val();-->
    <!--                    var formemail = $("input[email = email]").val();-->
    <!--                    var formmensagem = $("textarea").val();-->
    <!---->
    <!--                    if(formnome == "" || formtelefone == "" || formemail == "" || formmensagem == "")-->
    <!--                        alert("Form not complete");-->
    <!--                    else {-->
    <!---->
    <!--                        ajax.SetText("Enviando email...");-->
    <!--                        $.post("inc/send.php", {-->
    <!--                            nome: formnome, email: formtelefone, email: formemail, mensagem: formmensagem-->
    <!--                        }, function(data) {-->
    <!--                            if(data == "true") {-->
    <!--                                ajax.SetText("Sent!");-->
    <!--                            } else {-->
    <!--                                ajax.SetText("Email Enviado");-->
    <!--                                alert(data);-->
    <!--                            }-->
    <!---->
    <!--                            ajax.isSubmiting = false;-->
    <!--                        });-->
    <!--                    }-->
    <!--                }-->
    <!--                else alert("Só pode enviar 1 de cada vez");-->
    <!--            },-->
    <!--            SetText: function(text) {-->
    <!--                $("input[type=button]").val(text);-->
    <!--            }-->
    <!--        }-->
    <!--        //https://www.youtube.com/watch?v=PLOMd5Ib69Y-->
    <!--    </script>-->

</head>
<body>
<!-- MENU/HEADER-->
<!-- MENU/HEADER-->
<?php include('inc/header.php'); ?>
<!-- FIM MENU HEADER-->
<!-- FIM MENU HEADER-->

<div class="clearfix"></div>
<!-- SECTION BANNER-->
<section class="middle-contato">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="titulo">
                    <h2>CONTATOS</h2>
                </div>
                <div class="texto">
                    <p>Sinta-se à vontade para entrar em contato através dos nossos dados abaixo.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<section class="contato">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <h2>MAPA DO SITE</h2>
                <ul class="mapa-site">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="hotel.php">Hotel</a></li>
                    <li><a href="acomodacoes.php">Acomodações</a></li>
                    <li><a href="servicos.php">Serviços</a></li>
                    <li><a href="tarifario.php">Tarifário</a></li>
                    <li><a href="informacoes.php"><b>Informações</b></a></li>
                    <li><a href="noticias.php">Notícias</a></li>
                    <li><a href="contato.php">Contatos</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <h2>CONTATO</h2>
                <ul class="contato">
                    <li><i class="fa fa-map-marker icone"></i> Rua: Pinheiro Machado, 2310</li>
                    <li style="margin-left: 20px;"> CEP:9705-600</li>
                    <li style="margin-left: 20px;"> Santa Maria - RS</li>
                    <li style="margin-left: 20px; font-weight:700; font-family: 'Open Sans', sans-serif;"> Estamos
                        localizados em frente ao Hospital de Caridade
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <h2>Facebook</h2>
                <ul class="contato">
                    <li><i class="fa fa-envelope"></i> contato@hotelumberto.com.br</li>
                    <li><i class="fa fa-phone"></i> (55) 3223-1210 / (55) 3221-1270</li>
                    <li><i class="fa fa-wifi"></i> (55) 3223-1210 / (55) 3221-1270</li>
                    <li style="margin-left: 20px; font-weight:700; font-family: 'Open Sans', sans-serif;"> Atendimento
                        24 horas por dia
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<section class="mapa">
    <div id="mapa"></div>
</section>
<div class="clearfix"></div>
<section class="form-contato">
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <h3 class="text-center">FALE CONOSCO</h3>

                <form id="contact" onSubmit="return false" method="post">
                    <input type="hidden" value="1" name="send">

                    <div class="form-group">
                        <input type="text" name="nome" id="nome" class="form-control " placeholder="Nome">
                    </div>
                    <div class="form-group">
                        <input type="text" name="telefone" id="telefone" class="form-control " placeholder="Telefone">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" id="email" class="form-control " placeholder="Email">
                    </div>
                    <div class="form-group">
                        <textarea name="mensagem" class="form-control" rows="6" placeholder="Mensagem"></textarea>

                        <p id="send-info"></p>
                    </div>
                    <div class="row">
                        <div class="action">
                            <button onClick="sending()" class="button01" id="submit" type="button"><span>Enviar</span>
                            </button>
                        </div>
                    </div>
                    <script>
                        function sending() //AJAX para enviar o email, vai no html
                        {
                            var posting = $.post("inc/sendmail.php", $("#contact").serialize());
                            posting.done(function (data) {
                                $("#send-info").html(data); //id da div de retorno
                            });
                        }
                    </script>
                </form>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</section>
<div class="clearfix"></div>
<div class="copyright">
    <div class="container">
        <p class="copy">HOTEL UMBERTO • © Copyright 2016 • Todos os Direitos Reservados</p>
        <a class="logo-iguana" href="http://iguanaweb.com.br" target="_blank"></a></div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mask.min.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/contact.js"></script>
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