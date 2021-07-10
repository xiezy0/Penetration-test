<html>
<?php

if(isset($_GET['submit'])){
	$id=$_GET['id'];
	$con=mysqli_connect('localhost','root','');
	if($con){
		mysqli_select_db($con,'sql_injection');
		$query=mysqli_query($con, "SELECT username FROM user WHERE id='$id';");
		$num=mysqli_num_rows($query);
		$i=0;
		while($i<$num){
			$result=mysqli_fetch_assoc($query);
			echo "username:".$result["username"]."<br/>";
        		break;
			$i++;
		}
	}
}
mysqli_close($con);
?>

    <head lang="en">
        <meta charset="utf-8">
        <title>GET sql injection</title>
    </head>

    <body>
        <form action="./3.php" method="GET">
            user id:<input type="text" name="id">
            <input type="submit" value="submit" name="submit">
        </form>
    </body>
</html>

