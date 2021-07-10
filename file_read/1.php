<?php

$fn=$_GET['fn'];

#header("Content-Type: application/octet-stream");
#header("Content-Transfer-Encoding: Binary");
#header("Content-disposition: attachment; filename=\"$fn\""); 
#echo readfile("../upload/$fn");

readfile("../upload/$fn");

?>
