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
            <li class="active"><a href="<?= base_url();?>">Home</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container theme-showcase" role="main">
      <p>
        <a class="btn btn-primary" href="<?= base_url('index.php/IssController');?>" role="button">Refrescar</a>
      </p>
      <div class="page-header">
        <h1>Location <span class="label label-default">ISS</span></h1>
      </div>
      <div class="row">
        <div class="col-md-6">
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>timestamp</th>
                <th>message</th>
                <th>latitude</th>
                <th>longitude</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td><?= date('m/d/Y H:i:s', $ubicacion['data']['timestamp']);?></td>
                <td><?= $ubicacion['data']['message'];?></td>
                <td><?= $ubicacion['data']['iss_position']->latitude;?></td>
                <td><?= $ubicacion['data']['iss_position']->longitude;?></td>
              </tr> 
            </tbody>
          </table>
        </div>
      </div>

      <div class="page-header">
        <h1>Pass Time <span class="label label-default">ISS for Caracas-Venezuela</span></h1>
      </div>
      <div class="row">
        <div class="col-md-6">
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>message</th>
                <th>altitude</th>
                <th>datetime</th>
                <th>latitude</th>
                <th>longitude</th>
                <th>passes</th>
                <th>duration</th>
                <th>risetime</th>
              </tr>
            </thead>
            <tbody>
              <?php         
                foreach ($tiempo_paso as $key => $value) {  
                  $vueltas=$value['response'];
                };
                $nc=1;
                $objTabla='';
                foreach ($vueltas as $value) {
                  $objTabla .='<tr>';
                  $objTabla .= '<th scope="row">'. $nc.'</th>';
                    $objTabla .= '<td>'.$tiempo_paso['data']['message'].'</td>'; 
                    $objTabla .= '<td>'.$tiempo_paso['data']['request']->altitude.'</td>'; 
                    $objTabla .= '<td>'.date('m/d/Y H:i:s',$tiempo_paso['data']['request']->datetime).'</td>'; 
                    $objTabla .= '<td>'.$tiempo_paso['data']['request']->latitude.'</td>'; 
                    $objTabla .= '<td>'.$tiempo_paso['data']['request']->longitude.'</td>'; 
                    $objTabla .= '<td>'.$tiempo_paso['data']['request']->passes.'</td>'; 
                    $objTabla .= '<td>'.$value->duration.'</td>'; 
                    $objTabla .= '<td>'.$value->risetime.'</td>'; 
                  $objTabla .= '</tr>'; 
                  $nc++;     
                };
                echo $objTabla;    
              ?>
            </tbody>
          </table>
        </div>
      </div>

      <div class="page-header">
        <h1>People <span class="label label-default">ISS - Astronaut (<?= $personas['data']['number'];?>)</span></h1>
      </div>
      <div class="row">
        <div class="col-md-6">
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>craft</th>
                <th>name</th>
                <th>message</th>
              </tr>
            </thead>
            <tbody>
              <?php         
                foreach ($personas as $key => $value) {  
                  $astro=$value['people'];
                };
                $nc=1;
                $objTabla='';
                foreach ($astro as $value) {
                  $objTabla .= '<tr>';
                    $objTabla .= '<th scope="row">'. $nc.'</th>';
                    $objTabla .= '<td>'.$value->craft.'</td>'; 
                    $objTabla .= '<td>'.$value->name.'</td>'; 
                    $objTabla .= '<td>'.$personas['data']['message'].'</td>';
                  $objTabla .= '</tr>'; 
                  $nc++;     
                };
                echo $objTabla;    
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div> <!-- /container -->
    <hr>
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
</body>
</html>

