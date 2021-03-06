<?php

//inicia el buffer de salida
ob_start();

sleep(2);

?>
<!DOCTYPE html>
<html data-whatinput="keyboard" data-whatintent="keyboard" class=" whatinput-types-initial whatinput-types-keyboard"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <title>Cache</title>
            <link rel="icon" type="image/x-icon" href="favicon.ico" />
            <link rel="stylesheet" href="../assets/css/foundation.css">
            <link rel="stylesheet" href="../assets/css/app.css">
    <meta class="foundation-mq"></head>
    <body>

        <!-- Start Top Bar -->
    <div class="top-bar">
      <div class="row">
        <div class="top-bar-left">
          <ul class="dropdown menu" data-dropdown-menu="tckp8q-dropdown-menu" role="menubar">
            <li role="menuitem">Advanced PHP: Files</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Top Bar -->

    <br>
    
    
    <div class="row">
      <div class="medium-12 large-12 columns">
        <h4>Cache <?php echo rand(); ?></h4>
        <a href="./json.php" class="button warning" >JSON</a>
        <a href="./xml.php" class="button success" >XML</a>
        <a href="./pdf.php" class="button secondary" >PDF</a>
        <a href="./download_zip.php" class="button alert" >Download ZIP</a>
        <a href="./download_image.php" class="button radius" >Download Image</a>
        
      </div>
    </div>

    <div class="row column">
      <hr>
      <ul class="menu">
        <li class="float-right">Copyright Footer</li>
      </ul>
    </div>

        <script src="../assets/js/vendor/jquery.js"></script>
        <script src="../assets/js/vendor/what-input.js"></script>
        <script src="../assets/js/vendor/foundation.js"></script>
        <script src="../assets/js/app.js"></script>
    </body>
</html>

<?php 
  
  $contents = ob_get_contents();
  ob_end_clean();
  file_put_contents('index.html', $contents);
  header('Location: ./');



?>