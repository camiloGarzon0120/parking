<!DOCTYPE html>


<html lang="">

<head>
<title>Parking</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="views/css/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body id="top">

  <?php  include_once "views/modules/wrapper.php" ?>



  <div class="bgded" style="background-image:url('views/images/demo/backgrounds/01.png');"> 

    <?php  include_once "views/modules/navegacion.php" ?>

    <!--=====================================
    COLUMNA CONTENIDO        
    ======================================-->
    
    <?php 
    
      $modulos = new Enlaces();
      $modulos->enlacesController();
     ?>
    <!--====  Fin de COLUMNA CONTENIDO  ====-->


</body>

  <?php  include_once "views/modules/footer.php" ?>

 

<a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="views/js/jquery.min.js"></script>
<script src="views/js/jquery.backtotop.js"></script>
<script src="views/js/jquery.mobilemenu.js"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>