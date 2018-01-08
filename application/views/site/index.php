<?php
/*
** 
** author          :Irving Brito @ibritosistemas
** date            :24-12-2017
** description     : index
**/
defined('BASEPATH') OR exit('No direct script access allowed');

/**  aca devbes colocar tu llave generada por google para el map **/
$llaveGoogle='';
?>
<body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?= base_url() ?>"><?= APP_NAME;?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="<?= base_url('index.php/IssController');?>">Data ISS</a></li>            
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container theme-showcase" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>International Space Station (ISS)</h1>
        <div class="panel panel-default">
          <div class="panel-body">
          <p>Ejemplo de uso JSON con codeigniter.</p>
          </div>
        </div>
        
      </div>
      <p>
        <a class="btn btn-primary" href="<?= base_url('index.php/IssController');?>" role="button">Consulta ISS-JSON</a>
        <div id="map" style="width:100%;height:400px;"></div>
      </p>
    </div> <!-- /container -->
    <hr>
    <footer class="bd-footer text-muted">
      <div class="container">
        <p><a href="https://github.com/ibrito">GitHub</a></p>
        <p><a rel="license" href="http://beteltrix.ddns.net" target="_blank">Beteltrix@2018</a></p>
      </div>
    </footer>
    
    <script>      
      function initMap() {
        
        var geoPoint = {lat: 10.4805937, lng: -66.90360629999998};
       

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: geoPoint
        });

        var marker = new google.maps.Marker({
          position: geoPoint,
          map: map
        });

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: geoPoint
        });

        var marker = new google.maps.Marker({
          position: geoPoint,
          map: map
        });

      }
    </script>

    

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=<?= $llaveGoogle; ?> &callback=initMap">
    </script>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?= base_url('assets/js/vendor/jquery.min.js');?>"><\/script>')</script>
    <script src="<?= base_url('assets/js/bootstrap.min.js');?>"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="<?= base_url('assets/js/vendor/holder.min.js');?>"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?= base_url('assets/js/ie10-viewport-bug-workaround.js');?>"></script>
    
  </body>
</html>