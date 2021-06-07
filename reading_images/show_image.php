<?php
$counter = file_get_contents('counter.txt');
settype($counter, 'integer');
$counter++;
file_put_contents('counter.txt', $counter);
header('Content-type: image/jpeg');
echo file_get_contents('attractions.jpg');