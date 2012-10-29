<?php
	$url = 'http://labs.emersonbroga.com/gmaps/';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Pegar as coordenadas do Google Maps pelo endereço</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Digite o endereço e pegue as coordenadas geograficas.">
    <meta name="author" content="Emerson Carvalho">
	<meta name='keywords' content='geolocation, coordenadas, pegar coordenadas, endereco, latitude, longitude, google, maps, buscar'/>
	
	<meta property="og:title" content="Pegar as coordenadas do Google Maps pelo endereço"/>
	<meta property="og:image" content="http://maps.googleapis.com/maps/api/staticmap?center=Belo%20Horizonte,%20Brazil&zoom=4&size=250x250&sensor=false"/>
	<meta property="og:site_name" content="Emerson Carvalho.com"/>
	<meta property="og:description" content="Digite o endereço e pegue as coordenadas geograficas."/>
	
    <!-- Le styles -->
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.1.1/css/bootstrap-combined.min.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      #map img {
	    max-width: none;
	  }
    </style>
   
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
   
  </head>

  <body>
	<div id="fb-root"></div>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="http://www.emersoncarvalho.com/?utm_source=gmaps_coordinates_builder&utm_medium=gmaps_coordinates_builder&utm_term=gmaps_coordinates_builder&utm_content=gmaps_coordinates_builder&utm_campaign=gmaps_coordinates_builder">Emerson Carvalho</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li><a href="http://emersoncarvalho.com/pegar-coodenadas-geograficas-a-partir-de-um-endereco/?utm_source=gmaps_coordinates_builder&utm_medium=gmaps_coordinates_builder&utm_term=gmaps_coordinates_builder&utm_content=gmaps_coordinates_builder&utm_campaign=gmaps_coordinates_builder">Post:Pegar Coordenadas Geográficas à partir de um endereço</a></li>
           </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
    	<div class="well">
    		<h1>Pegue as coordenadas do Google Maps pelo endereço</h1>
    		<p>
    			Digite o endereço e clique em "Pegar Coordenadas"</br>
    			Você pode também arrastar o marcador para pegar as coordenadas
    		</p>
    		<p>
    			<div class="fb-like" data-href="http://labs.emersonbroga.com/gmaps/" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false"></div><a href="https://twitter.com/share" data-url="<?php echo $url; ?>" class="twitter-share-button" data-lang="en">Tweet</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    		</p>
    	</div>
    	<div class="row-fluid show-grid">
    		<div class="span3">
    			<p>
				<label for="endereco" class="required">Endereco</label>
				<input name="endereco" id="endereco" class="text" type="text">
			</p>
	        <p>
	        	<label for="bairro" class="required">Bairro</label>
				<input name="bairro" id="bairro" class="text" type="text">
			</p>
	        <p>
	        	<label for="cidade" class="required">Cidade</label>
				<input name="cidade" id="cidade" class="text" type="text">
			</p>
	        <p>
	        	<label for="estado" class="required">Estado</label>
				<select name="estado" id="estado" class="text">
				    <option value="AC" label="Acre">Acre</option>
    				<option value="AL" label="Alagoas">Alagoas</option>
    				<option value="AP" label="Amapá">Amapá</option>
    				<option value="AM" label="Amazonas">Amazonas</option>
    				<option value="BA" label="Bahia">Bahia</option>
    				<option value="CE" label="Ceará">Ceará</option>
    				<option value="DF" label="Distrito Federal">Distrito Federal</option>
    				<option value="ES" label="Espírito Santo">Espírito Santo</option>
    				<option value="GO" label="Goiás">Goiás</option>
    				<option value="MA" label="Maranhão">Maranhão</option>
    				<option value="MT" label="Mato Grosso">Mato Grosso</option>
    				<option value="MS" label="Mato Grosso do Sul">Mato Grosso do Sul</option>
    				<option selected="selected" value="MG" label="Minas Gerais">Minas Gerais</option>
    				<option value="PA" label="Pará">Pará</option>
    				<option value="PB" label="Paraíba">Paraíba</option>
    				<option value="PR" label="Paraná">Paraná</option>
    				<option value="PE" label="Pernambuco">Pernambuco</option>
    				<option value="PI" label="Piauí">Piauí</option>
    				<option value="RJ" label="Rio de Janeiro">Rio de Janeiro</option>
    				<option value="RN" label="Rio Grande do Norte">Rio Grande do Norte</option>
    				<option value="RS" label="Rio Grande do Sul">Rio Grande do Sul</option>
    				<option value="RO" label="Rondônia">Rondônia</option>
    				<option value="SC" label="Santa Catarina">Santa Catarina</option>
    				<option value="RR" label="Roraima">Roraima</option>
    				<option value="SP" label="São Paulo">São Paulo</option>
    				<option value="SE" label="Sergipe">Sergipe</option>
    				<option value="TO" label="Tocantins">Tocantins</option>
				</select>
			</p>
			<p>
				<input class="btn btn-large" id="btn-get-coordinates" value="Pegar Coordenadas" type="button">
			</p>
			
    		</div>
    		<div class="span9">
				<div class="form-inline">
					<label for="latitude">Latitude</label><input name="latitude" id="latitude" class="input-xlarge" placeholder="Latitude" type="text">
					<label for="longitude">Longitude</label><input name="longitude" id="longitude"  class="input-xlarge" placeholder="Longitude" type="text">
				</p>
	        	<div id="map-canvas" class="col50 f-right">
					<div align="center" id="map" style="width: 100%; height:300px;"></div>
				</div><!-- /map-canvas -->
     		</div>
    
    </div> <!-- /container -->
	<script	type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
	<script	type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
	<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
	<script type="text/javascript">
var geocoder;
var map;
var infowindow = new google.maps.InfoWindow();
var marker;

$(document).ready(function(){
    //Show maps admin
    $('#btn-get-coordinates').live('click',function(){
    	adminMapsCoordinates();
    });
    if( $('#latitude').val() && $('#longitude').val() ){
    	adminMapsCoordinates();
    }


    //Prevent from submit on press ENTER
    $('#form-cadastro-empreendimento').keypress(function (e) {
    	  if(e.which == 13 && e.target.nodeName != "TEXTAREA"){
	    	adminGetAddressToCoordinates();
    	   	return false;
    	   }
    });

});



/**
 * Admin Maps Coordinates
 * @desc Gerencia a exibição do mapa no Insert de Imoveis.
 * @author Emerson Carvalho <emerson.broga@gmail.com>
 */
function adminMapsCoordinates() {

    //Exibe as coordenadas e o mapa.
	$('#map').fadeIn();
	
	geocoder = new google.maps.Geocoder();
	var latlng = new google.maps.LatLng(40.730885,-73.997383);
	var mapOptions = {
		    scrollwheel: true,
			zoom: 15,
			center: latlng,
			mapTypeId: google.maps.MapTypeId.ROADMAP
    }
	map = new google.maps.Map(document.getElementById("map"), mapOptions);
	adminGetAddressToCoordinates();
	return false;	 
}	




/**
 * Admin Get Address To Coordinates
 * @desc Pega a string de endereco e gera o pointer no mapa.
 * @author Emerson Carvalho <emerson.broga@gmail.com>
 */
function adminGetAddressToCoordinates() {
   // var address = document.getElementById("address").value;
   var endereco = new Array();
   endereco[1] = $('#endereco').val();
   endereco[2] = $('#cidade').val();
   endereco[3] = $('#bairro').val();
   endereco[4] = $('#estado').val();
   endereco[5] = ' - Brasil';
   
   var address = endereco.join(' ');
    geocoder.geocode( { 'address': address}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        map.setCenter(results[0].geometry.location);

        //Passo os valores para o form.
        updateCoordinatesValues(results[0].geometry.location.lat(),results[0].geometry.location.lng());
        marker = new google.maps.Marker({
        	draggable: true,
            map: map,
            position: results[0].geometry.location           
            
        });

        //Se rua, bairro e cidade estiverem vazios o zom mostra o brasil.
        if(endereco[1] == '' && endereco[2] == '' && endereco[3] == '')
           map.setZoom(4);
        else
            map.setZoom(15);
            
      //DRAG AND DROP 
      google.maps.event.addListener(marker, "dragend", function(event) {
    	  var point = marker.getPosition();
          window.setTimeout(function(){
        	   map.panTo(point);
        	   updateCoordinatesValues(point.lat(), point.lng());
        	   
              }, 100);
       });
      } else {
    	       
    	  showFeedback('#maps-feedback', 'Localização não encontrada.');
    	  $('#map').fadeOut();
    	  updateCoordinatesValues('','');
    	  
      }
    });
  }


/**
 * Update CoordinatesValues
 * @desc Atualiza o valor das coordenadas.
 * @param lat String com o valor de Latitude.
 * @param long String com o valor de Longitude.
 * @author Emerson Carvalho <emerson.broga@gmail.com>
 */
function updateCoordinatesValues(lat, lng)
{
	$('#latitude').val(lat);
    $('#longitude').val(lng);
    return;
}

/**
 * Show Feedback
 * @desc Exibe mensagens de feedback.
 * @param element Seletor jQuery para o elemento onde sera mostrada a mensagem.
 * @param message Texto da mensagem a ser exibida.
 * @author Emerson Carvalho <emerson.broga@gmail.com>
 */
function showFeedback(element, message) 
{
	if ( $(element).is(':visible'))
        $(element).text(message);
    else        
        $(element).text(message).fadeOut().fadeIn();

    return;
    
}

</script>
    

  </body>
</html>
