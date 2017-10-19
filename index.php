<!DOCTYPE html>
<html lang="se">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <script src="bower_components/jquery/dist/jquery.min.js" charset="utf-8"></script>
    <script src="components/js/setheadercss.js" charset="utf-8"></script>
    <script src="components/js/shrinknav.js" charset="utf-8"></script>
    <script src="bower_components/bootstrap/js/collapse.js" charset="utf-8"></script>
    <script src="components/js/animatescroll.min.js" charset="utf-8"></script>
    <script src="components/js/highlightnav.js" charset="utf-8"></script>
    <script src="components/js/bildspel.js" type="text/javascript"></script>
    <script src="components/js/showimages.js" charset="utf-8"></script>
    <title>Teknikum.it</title>
  </head>
  <body>
    <?php
      include "components/menu.php";
      include "components/header.php";
      include "components/om.php";
      include "components/utbildning.php";
      include "components/foretag.php";
      include "components/bilder.php";
      include "components/praktik.php";
      include "components/footer.php";
    ?>
  </body>
</html>
