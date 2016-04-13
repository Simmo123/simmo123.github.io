
<!DOCTYPE html>
<html>
  <head>
    <?php include('config.php')?>
    <meta charset="utf-8">
    <title>simmo.ee</title>
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.6/sandstone/bootstrap.min.css" rel="stylesheet" integrity="sha384-QqZs0aSOGFan3GWVdP4PyCBp6icaF/4n8Q+wsmZUTiiVIqE4r4tFYcb8Osf+8y45" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="simmo.css">
  </head>
<body>
  <div class="container">
      <div class="navbar navbar-custom">
          <div class="container">
              <!-- Grupp, mida näidatakse ainult väiksema eraani puhul -->
              <div class="navbar-header ">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".menyy">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a href="index.html" class="navbar-brand"><img src="img/SM2.gif" alt="pilt" /></a>
              </div>

              <!-- Grupp, mis peidetakse -->
              <div class="collapse navbar-collapse menyy">
                  <form class="navbar-form pull-right">

                  </form>
                  <ul class="nav navbar-nav pull-right">
                      <li><a href="index.html">Avaleht</a></li>
                      <li class="active"><a href="blogi.php">Blogi</a></li>
                      <li><a href="teenused.html">Teenused</a></li>
                      <li><a href="portfolio.html">Portfoolio</a></li>
                      <li><a data-toggle="modal" href="#kontakt">Kontakt</a></li>
                  </ul>

              </div>
          </div>
      </div>
</div>
</div>

<!--banner-->
<section class="banner">
  <div class="container">

        <!--jumbo-->
        <div class="carousel slide" id="pildivahetaja">
          <ol class="carousel-indicators">
            <li data-target="#pildivahetaja" data-slide-to="0" class="active"></li>
            <li data-target="#pildivahetaja" data-slide-to="1"></li>
            <li data-target="#pildivahetaja" data-slide-to="2"></li>
            <li data-target="#pildivahetaja" data-slide-to="3"></li>
          </ol>

          <div class="carousel-inner">
            <div class="item active">
              <img src="img/glacier-530050_1920.jpg" alt="Pilt" style="height:440px; width:100%;" />
            </div>
            <div class="item">
              <img src="img/landscape-640617_1920.jpg" alt="Pilt" style=" height:440px; width:100%;" />
            </div>
            <div class="item">
              <img src="img/prague-1168302_1920.jpg" alt="Pilt" style="height:440px; width:100%;" />
            </div>
            <div class="item">
              <img src="img/aurora-borealis-1066594_1280.jpg" alt="Pilt" style="height:440px; width:100%;" />
            </div>
          </div>

          <a href="#pildivahetaja" class="carousel-control left" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span></a>
          <a href="#pildivahetaja" class="carousel-control right" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>

    </div>
  </div>
</section>
<!--/banner-->
<br><br>

<div class="container">





  <div class="col-lg-8">
    <div class="col-lg-4">

    <?php
    $paring = 'SELECT * FROM postitus ORDER BY id';
    $valjund = $yhendus->query($paring);

    while($rida = mysqli_fetch_assoc($valjund)) : ?>
        <img class='img-thumbnail' alt='city' src='<?php echo $rida['pilt']; ?>' style="width:250px;height:200px" />
    <?php endwhile; ?>
    </div>
    <div class="col-lg-8">
      <p>
      <?php
      $paring = 'SELECT * FROM postitus ORDER BY id';
      $valjund = $yhendus->query($paring);
      while($rida = mysqli_fetch_assoc($valjund)){
          echo $rida['sisu'];
          };
          ?>
</p>
      <button class="btn btn-default" type="submit">Loe edasi...</button>
</div>
</div>
<div class="col-lg-8">
  <div class="col-lg-8">
    <div class="group">
      <br>
      <span class="glyphicon glyphicon-calendar"></span><a href="#">
        <?php
        $paring = 'SELECT * FROM postitus ORDER BY id';
        $valjund = $yhendus->query($paring);
        while($rida = mysqli_fetch_assoc($valjund)){
            echo $rida['kuup'];
            };
            ?>
      </a> |
      <span class="glyphicon glyphicon-comment"></span><a href="#"> 3 kommentaari</a> |
      <span class="glyphicon glyphicon-tag"></span><a href="#"> <span class="label label-success">üldine</span>
      <span class="label label-success">info</span>
      <span class="label label-success">jquery</span></a>
    </div>


  </div>
</div>

</div>
<br>

<hr>

  <footer>
    <div class="container">

      <div class="row">
        <div class="col-sm-3">
          <h4>Kontakt</h4>
          <ul class="list-unstyled">
            <li><span class="glyphicon glyphicon-phone"></span>255 255 255</li>
            <li><span class="glyphicon glyphicon-envelope"></span>meie(at)email.com</li>
            <li><span class="glyphicon glyphicon-map-marker"></span>Eesti, Läänemaa</li>
          </ul>
        </div>


        <div class="col-sm-3 col-sm-offset-1 pull-right">
          <h4>Otsing</h4>
          <form class="form-ingline">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="otsingusõna siia">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
              </span>
            </div>
          </form>
        </div>
      </div>
    </div>
  </footer>

  </body>
</html>
