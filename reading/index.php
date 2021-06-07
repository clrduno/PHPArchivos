<?php
$file_contents = file_get_contents('./data.txt');
?>

<!DOCTYPE html>
<html data-whatinput="keyboard" data-whatintent="keyboard" class=" whatinput-types-initial whatinput-types-keyboard"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <title>Reading</title>
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
        <h4>Reading</h4>
          
        <div class="medium-12  columns">
            <div class="callout primary">
              <pre><?php echo $file_contents ?></pre>
            </div>
          </div>

          <div class="medium-12  columns">
            <table>
              <tr>
                <th>Name</th>
                <th>Last Name</th>
                <th>Email</th>
              </tr>
              <?php
              $arr_lines = explode("\n", $file_contents);
              foreach ($arr_lines as $line) {
                $arr_columns = explode(',', $line);
              ?>
              <tr>
                <td><?php echo $arr_columns[0] ?></td>
                <td><?php echo $arr_columns[1] ?></td>
                <td><?php echo $arr_columns[2] ?></td>
              </tr>
              <?php
                }
              ?>              
            </table>
          </div>
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