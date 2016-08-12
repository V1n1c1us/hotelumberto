<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
      <title>Hotel umberto</title>
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      <link href="css/owl.carousel.css" rel="stylesheet">
      <link href="css/hover.css" rel="stylesheet" type="text/css"/>
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
      <link href="css/owl.carousel.css" rel="stylesheet" type="text/css"/>
      <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
      <link href="css/datepicker.css" rel="stylesheet" type="text/css"/>
      <script src="js/bootstrap-datepicker.js" type="text/javascript"></script>
      <script>
         $('.datepicker').datepicker()
         
         
      </script>
   </head>
   <body>
      <!-- MENU/HEADER-->
      <?php include('inc/header.php');?>
      <!-- FIM MENU HEADER-->
      <div class="clearfix"></div>
      <!-- SECTION BANNER-->
      <section class="banner-principal" class="animate bottom">
         <div class="item"><img src="images/bannerHotel.png" alt="Urbanes Empreendimentos"></div>
         <div class="item"><img src="images/bannerHotel.png" alt="Urbanes Empreendimentos"></div>
         <div class="item"><img src="images/bannerHotel.png" alt="Urbanes Empreendimentos"></div>
         <div class="item"><img src="images/bannerHotel.png" alt="Urbanes Empreendimentos"></div>
      </section>
      <section class="check">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 banner-titulo">
                  <h1><span>Uma estadia para você sentir-se em casa</span></h1>
               </div>
            </div>
            <div class="row hidden-sm hidden-xs">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 eventform-con">
                  <form action="recebe.php" method="post">
                     <div class="form-input">
                        <input type="text" id="datepicker-entrada" name="entrada" placeholder="Entrada" style="width: 130px;">
                        <button type="button"  value="open" class="open icon fa fa-calendar"></button>
                     </div>
                     <div class="form-input">
                        <input type="text" id="datepicker-saida" name="saida" placeholder="Saída" style="width: 130px;">
                        <button type="button"  value="open" class="open icon fa fa-calendar"></button>
                     </div>
                     <div class="form-input">
                        <input type="number" name="numerohosp" placeholder="Nº de Hóspedes" style="width: 113px;">
                     </div>
                     <div class="form-input">
                        <input type="text" name="nome" placeholder="Nome" style="width: 160px;">
                     </div>
                     <div class="form-input">
                        <input type="email" name="email" placeholder="Email" style="width: 160px;">
                     </div>
                     <div class="form-input">
                        <input type="email" name="email" placeholder="Email" style="width: 160px;">
                     </div>
                     <div class="form-input">
                        <button class="send" type="submit"><i class="fa fa-send"></i></button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </section>
      <div class="container hidden-lg hidden-md">
         <div class="row">
               <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 eventform-con">
                  <form action="recebe.php" method="post">
                     <div class="col-lg-6">
                        <div class="row">
                           <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-input">
                                 <input type="text" id="datepicker-entrada" name="entrada" placeholder="Entrada">
                                 <button type="button"  value="open" class="open icon fa fa-calendar"></button>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="row">
                           <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-input">
                                 <input type="text" id="datepicker-saida" name="saida" placeholder="Saída">
                                 <button type="button"  value="open" class="open icon fa fa-calendar"></button>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="row">
                           <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-input">
                                 <input type="number" name="numerohosp" placeholder="Nº de Hóspedes">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="row">
                           <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-input">
                                 <input type="text" name="nome" placeholder="Nome">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="row">
                           <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-input">
                                 <input type="email" name="email" placeholder="Email">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="row">
                           <div class="col-xs-12 col-sm-12 col-md-12">
                              <div class="form-input">
                                 <input type="email" name="email" placeholder="Email">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="form-input">
                        <button class="send" type="submit"><i class="fa fa-send"></i></button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <div class="clearfix"></div>
      <section class="middle">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="hidden-xs hidden-sm" id="cont_e3e8a7bad2fec8cec6373543d77a7ec8" class="prev-tempo">
                     <span id="h_e3e8a7bad2fec8cec6373543d77a7ec8"><a class="LinkWid" href="http://www.tempo.pt/santa-maria-aero-porto_brasil-l12994.htm" target="_blank" style="font-family:Helvetica; font-size:13px; color:#ff6600;">Hotel Umberto Informa</a></span><script type="text/javascript" async src="http://www.tempo.pt/wid_loader/e3e8a7bad2fec8cec6373543d77a7ec8"></script>
                  </div>
                  <div class="hidden-lg hidden-md" id="cont_d6a9fcc506ea2c21c6aef41b14457e05">
                     <script type="text/javascript" async src="https://www.tempo.pt/wid_loader/d6a9fcc506ea2c21c6aef41b14457e05"></script>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
               <div  class="middle-servicos-header" class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <h1>Serviços</h1>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
            </div>
            <div class="row hidden-sm hidden-xs">
               <div class="slide-servicos-itens">
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="width:100%">
                     <div class="box-servicos-header">
                        <h3>Acomodações</h3>
                     </div>
                     <div class="hoverzoom">
                        <img class="box-img" src="images/img-acomodacoes.png"/>
                        <div class="retina"> <img id="acomod" src="images/img-acomodacoes-icon.png"/> </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="width:100%">
                     <div class="box-servicos-header">
                        <h3>Café da Manhã</h3>
                     </div>
                     <div class="hoverzoom">
                        <img class="box-img" src="images/img-cafe.png"/>
                        <div class="retina"> <img id="coffe" src="images/img-cafe-icon.png"/> </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="width:100%">
                     <div class="box-servicos-header">
                        <h3>Estacionamento</h3>
                     </div>
                     <div class="hoverzoom">
                        <img class="box-img" src="images/img-estacionamento.png"/>
                        <div class="retina"> <img id="car" src="images/img-estacionamento-icon.png"/> </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="width:100%">
                     <div class="box-servicos-header">
                        <h3>Bar</h3>
                     </div>
                     <div class="hoverzoom">
                        <img class="box-img" src="images/img-bar.png"/>
                        <div class="retina"> <img id="bar" src="images/img-bar-icon.png"/> </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="width:100%">
                     <div class="box-servicos-header">
                        <h3>Auditório</h3>
                     </div>
                     <div class="hoverzoom">
                        <img class="box-img" src="images/img-auditorio.png"/>
                        <div class="retina"> <img id="auditorio" src="images/img-auditorio-icon.png"/> </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="width:100%">
                     <div class="box-servicos-header">
                        <h3>Sala de Reuniões</h3>
                     </div>
                     <div class="hoverzoom">
                        <img class="box-img" src="images/img-sala-reuniao.png"/>
                        <div class="retina"> <img id="salareuniao" src="images/img-sala-reuniao-icon.png"/> </div>
                     </div>
                  </div>
               </div>
            </div>
            
           
            <div class="row hidden-lg hidden-md">
               <div class="slide-servicos-itens-xs-sm">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="width:100%">
                              <div class="box-servicos-header">
                        <h3>Acomodações</h3>
                     </div>
                     <div class="hoverzoom">
                        <img class="box-img" src="images/img-acomodacoes.png"/>
                        <div class="retina"> <img id="acomod" src="images/img-acomodacoes-icon.png"/> </div>
                     </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="width:100%">
                     <div class="box-servicos-header">
                        <h3>Café da Manhã</h3>
                     </div>
                     <div class="hoverzoom">
                        <img class="box-img" src="images/img-cafe.png"/>
                        <div class="retina"> <img id="coffe" src="images/img-cafe-icon.png"/> </div>
                     </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="width:100%">
                     <div class="box-servicos-header">
                        <h3>Estacionamento</h3>
                     </div>
                     <div class="hoverzoom">
                        <img class="box-img" src="images/img-estacionamento.png"/>
                        <div class="retina"> <img id="car" src="images/img-estacionamento-icon.png"/> </div>
                     </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="width:100%">
                     <div class="box-servicos-header">
                        <h3>Bar</h3>
                     </div>
                     <div class="hoverzoom">
                        <img class="box-img" src="images/img-bar.png"/>
                        <div class="retina"> <img id="bar" src="images/img-bar-icon.png"/> </div>
                     </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="width:100%">
                     <div class="box-servicos-header">
                        <h3>Auditório</h3>
                     </div>
                     <div class="hoverzoom">
                        <img class="box-img" src="images/img-auditorio.png"/>
                        <div class="retina"> <img id="auditorio" src="images/img-auditorio-icon.png"/> </div>
                     </div>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="width:100%">
                     <div class="box-servicos-header">
                        <h3>Sala de Reuniões</h3>
                     </div>
                     <div class="hoverzoom">
                        <img class="box-img" src="images/img-sala-reuniao.png"/>
                        <div class="retina"> <img id="salareuniao" src="images/img-sala-reuniao-icon.png"/> </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="action">
	               <button class="button01"><a href="servicos.php">VER TODOS</a></button>
               </div>
            </div>
         </div>
         <!-- DEPOIMENTOS -->
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-12">
                  <div class="depoimentos-geral">
                     <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
                        <div  class="middle-depoimentos-header" class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                           <h1>DEPOIMENTOS</h1>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
                     </div>
                     <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                           <h5 class="cabecalho">Visitou nosso espaço? Envia <span class="depoimento-destaque"><a href="depoimentos.php">AQUI</a></span> seu depoimento</h5>
                           <div class="balao-box">
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ac mattis mi. Donec interdum sollicitudin tempor. Fusce ut ipsum sed ante mollis imperdiet. Mauris vitae ex interdum, mattis erat sit amet, bibendum neque. Nam nec fringilla felis. Curabitur feugiat, lorem vel euismod congue, tellus velit gravida ex, eget vehicula sem sem sit amet purus. Suspendisse potenti. </p>
                           </div>
                           <div class="depoimento-user">
                              <i class="fa fa-user"></i>
                              <div class="depoimento-username">
                                 <div class="depoimento-name"><b>Jurema Silva</b>, Profissão</div>
                              </div>
                           </div>
                           <div class="balao-box">
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ac mattis mi. Donec interdum sollicitudin tempor. Fusce ut ipsum sed ante mollis imperdiet. Mauris vitae ex interdum, mattis erat sit amet, bibendum neque. Nam nec fringilla felis. Curabitur feugiat, lorem vel euismod congue, tellus velit gravida ex, eget vehicula sem sem sit amet purus. Suspendisse potenti. </p>
                           </div>
                           <div class="depoimento-user">
                              <i class="fa fa-user"></i>
                              <div class="depoimento-username">
                                 <div class="depoimento-name"><b>Jurandir Tavares</b>, Profissão</div>
                              </div>
                           </div>
                          </div>
                        </div>
                                        
                        <div class="row">
                        <div class="setas"> 
                        	<a class="left" onclick="menuList('pasteis-p3')">
                            	<i class="fa fa-arrow-left"></i></a>
                        	<a class="right" onclick="menuList('pasteis-p2')"><i class="fa fa-arrow-right"></i></a> 
                        </div>
                     </div>
  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
               <div class="middle-tarifario-header" class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <h1>Tarifário</h1>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
            </div>
            <div class="row tarifario">
               <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="box1">
                     <div class="topo"> <span>1 Pessoa</span> </div>
                     <div class="preco"> R$ <span class="valor">120</span>,00 </div>
                     <div class="meio">
                        <p>Apartamento com TV a cabo e  Ar - condicionado</p>
                     </div>
                     <div class="baixo">
                     <div class="action-tarifario">
                        <button class="button-tarifario1">Detalhes</button>
                     </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="box2">
                     <div class="topo"> <span>2 Pessoas / casal</span> </div>
                     <div class="preco" id="casal"> R$ <span class="valor">160</span>,00 </div>
                     <div class="meio">
                        <p>Apartamento com TV a cabo e  Ar - condicionado</p>
                     </div>
                     <div class="baixo">
                                             <div class="action-tarifario">
                        <button class="button-tarifario2">Detalhes</button>
                     </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="box3">
                     <div class="topo"> <span>3 Pessoas</span> </div>
                     <div class="preco" id="ultimo"> R$ <span class="valor">195</span><span class="zero">,00</span> </div>
                     <div class="meio"> <span>Apartamento com TV a cabo e  Ar - condicionado</span> </div>
                     <div class="baixo">
                                             <div class="action-tarifario">
                        <button class="button-tarifario3">Detalhes</button>
                     </div>
                     </div>
                  </div>
               </div>
            </div>
                       <div class="row">
               <div class="action">
                  <button class="button01"><a href="#">MAIS OPÇÕES</a></button>
               </div>
            </div>
         </div>
         </div>
      </section>
      <div class="clearfix"></div>
      <?php include('inc/footer.php');?>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
      <script src="js/bootstrap.min.js"></script> 
      <script src="js/owl.carousel.js"></script> 
      <script src="js/custom.js"></script> 
      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCy-n4cUtfZ1ZRkDp0EhfTf4paSmqceHWQ&callback=initMap"></script>
      <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
      <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script> 
      
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
      <script async>
         $(document).ready(function () {
             if ($(".banner-principal").length > 0) {
                 $(".banner-principal").owlCarousel({
                     autoplay: true,
                     //autoplayHoverPause: true,
                     dots: true,
                     nav: false,
                     loop: true,
                     items: 1,
                 });
             }
         });
          $(document).ready(function () {
             if ($(".slide-servicos-itens").length > 0) {
                 $(".slide-servicos-itens").owlCarousel({
                     autoplay: true,
                     //autoplayHoverPause: true,
                     dots: true,
                     nav: false,
					 //navText: ['<i class="fa fa-arrow-left">','<i class="fa fa-arrow-right">'],
                     loop: true,
                     items: 3,
                 });
             }
         });
		 $(document).ready(function () {
             if ($(".slide-servicos-itens-xs-sm").length > 0) {
                 $(".slide-servicos-itens-xs-sm").owlCarousel({
                     autoplay: true,
                     //autoplayHoverPause: true,
                     dots: true,
                     nav: false,
                     loop: true,
                     items: 1,
                 });
             }
         });

      </script> 

      <script async>
         $(function () {
             $("#datepicker-entrada").datepicker({
                 dateFormat: 'dd/mm/yy'
             });
             $("#datepicker-saida").datepicker({
                 dateFormat: 'dd/mm/yy'
             });
         });
      </script> 
      <script>
         $(function(){
         	$("div#depoimento-1").css("display", "none");
         	$("div#depoimento-2").css("display", "none");
         	$("div#depoimento-1").addClass("active");
         
             $("a").on("click", function( e ){         
               e.preventDefault();
                 
             	$("div").removeClass("active");
                 var id = $(this).attr("href"); 
                 $("#"+id+"").addClass("active");
                 
             });
         });
      </script> 
      <script async>
         $(document).ready(function() {
         
              $(document).ready(function () {
                 if ($("#owl-carousel").length > 0) {
                     $("#owl-carousel").owlCarousel({
                         autoplay: true,
                         //autoplayHoverPause: true,
                         loop: true,
                         items: 1,
                     });
                 }
             });
          
         });
      </script>
   </body>
</html>