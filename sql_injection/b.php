<?php

if(isset($_GET['submit'])){
	$id=$_GET['id'];
	$con=mysqli_connect('localhost','root','pa33w0rd');
	if($con){
		mysqli_select_db($con,'sql_injection');
		$query=mysqli_query($con, "SELECT username FROM user WHERE id='$id';");
		$num=mysqli_num_rows($query);
		$i=0;
		while($i<$num){
			$result=mysqli_fetch_assoc($query);
			echo "username:".$result["username"]."<br/>";
			$i++;
		}
	}
}
mysql_close($con);
?>
