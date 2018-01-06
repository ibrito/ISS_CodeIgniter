<?php
/*
** 
** author          :Irving Brito @ibritosistemas
** date            :24-12-2017
** description     : index
**/
defined('BASEPATH') OR exit('No direct script access allowed');
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


      <div class="page-header">
        <h1>Consulta</h1>
      </div>
      <p>
        <a class="btn btn-primary" href="<?= base_url('index.php/IssController');?>" role="button">Consulta ISS-JSON</a>
        
      </p>
    </div> <!-- /container -->
    <footer class="bd-footer text-muted">
  <div class="container">
    <p><a href="https://github.com/ibrito">GitHub</a></p>
      
    <p><a rel="license" href="http://beteltrix.ddns.net" target="_blank">Beteltrix@2018</a></p>
  </div>
</footer>
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