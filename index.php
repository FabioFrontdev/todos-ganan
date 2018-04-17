<!DOCTYPE html>
<html lang="es">
<?php require_once('views/head.php'); ?>
<body>

  <?php require_once('views/header.php'); ?>

  <?php
    if(!isset($_REQUEST['content'])){
    require_once('views/home.php');
    }elseif($_REQUEST['content']=='games'){
      require_once('views/games.php');
    }else{
      require_once('views/404.php');
    } 
  ?>
  <?php require_once('views/footer.php'); ?>
  

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <script src="js/app.js"></script>
</body>
</html>