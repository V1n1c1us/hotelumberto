<section class="contato">
<div class="container">
<div class="row">
  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
    <h2>MAPA DO SITE</h2>
    <ul class="mapa-site">
      <li>Home</li>
      <li>Hotel</li>
      <li>Acomodações</li>
      <li>Tarifário</li>
      <li>Informações</li>
      <li>Eventos</li>
      <li>Notícias</li>
      <li>Contatos</li>
    </ul>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
    <h2>CONTATO</h2>
<ul class="contato">
      <li> <i class="fa fa-map-marker icone"></i> Rua: Pinheiro Machado, 2310 </li>
      <li style="margin-left: 20px;"> CEP:9705-600</li>
      <li style="margin-left: 20px;"> Santa Maria - RS</li>
      <li style="margin-left: 20px; font-weight:700; font-family: 'Open Sans', sans-serif;"> Estamos localizados em frente ao Hospital de Caridade</li>
    </ul>

  </div>
  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
    <h2>Facebook</h2>
    <ul class="contato">
      <li><i class="fa fa-envelope"></i> contato@hotelumberto.com.br</li>
      <li><i class="fa fa-phone"></i> (55) 3223-1210 / (55) 3221-1270</li>
      <li><i class="fa fa-wifi"></i> (55) 3223-1210 / (55) 3221-1270</li>
      <li style="margin-left: 20px; font-weight:700; font-family: 'Open Sans', sans-serif;"> Atendimento 24 horas por dia</li>
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
<div class="copyright">
  <div class="container">
    <p class="copy">HOTEL UMBERTO • © Copyright 2016 • Todos os Direitos Reservados</p>
    <a class="logo-iguana" href="http://iguanaweb.com.br" target="_blank"></a> </div>
</div>
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