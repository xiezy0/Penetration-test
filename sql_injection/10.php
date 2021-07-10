<html>
<?php

if(isset($_GET['submit'])){
	$id=$_GET['id'];
	$con=mysqli_connect('localhost','root','');
	if($con){
		mysqli_select_db($con, 'test');
		$query=mysqli_query($con, "SELECT username FROM student WHERE id='$id';");
		$num=mysqli_num_rows($query);
		$i=0;
		while($i<$num){
			$result=mysqli_fetch_assoc($query);
			$i++;
		}
   		echo $i;
	}
}
mysqli_close($con);
?>
    <head lang="en">
        <meta charset="utf-8">
        <title>GET sql injection</title>
    </head>

    <body>
        <form action="./4.php" method="GET">
            user id:<input type="text" name="id">
            <input type="submit" value="submit" name="submit">
        </form>
    </body>
</html>

