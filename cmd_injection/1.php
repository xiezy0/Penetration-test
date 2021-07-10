<?php

if(isset($_GET['submit'])){
	$c=$_GET['c'];
    $cmd = "ping -c $c 127.0.0.1";
    echo "$cmd\n";
    echo "<hr>\n";
    system($cmd);
}
?>
