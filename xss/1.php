<form action="./1.php" method="GET">
			user name:<input type="text" name="n">
			<input type="submit" value="submit" name="submit">
</form>

<?php

setcookie("name","yinyu",time()+2*7*24*3600);
setcookie("sid","cf91f924777bc0e9e40ef92fa023c556c3538613",time()+2*7*24*3600);

if(isset($_GET['submit'])){
	$n=$_GET['n'];
    echo "Hello $n";
}
?>
