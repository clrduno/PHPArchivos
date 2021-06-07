<?php

$d = dir("./files");

while (false !== ($entry = $d->read())) {
   echo $entry."<br/>";
   if($entry !=='.' && $entry!=='..'){
   	unlink('./files/'.$entry);
   }
}

$d->close();

header('Location: index.php');