<?php

$url=$_GET['url'];

echo readfile("http://$url");

?>
