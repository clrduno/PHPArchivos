<?php

require 'vendor/autoload.php';

$client = new \GuzzleHttp\Client();

//$res = $client->request('GET','Http://localhost:8001/data.txt');
//$res = $client->request('GET','Http://localhost:8001/attractions.jpg');
$res = $client->request('GET','Http://localhost:8001/export.pptx');


//header('Content-Type: '.$res->getHeaderLine('content-type'));

header('Content-Disposition: attachment; filename=new_file.pptx');

echo $res->getBody();