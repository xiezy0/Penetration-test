<html>
    <head lang="en">
        <meta charset="utf-8">
        <title>GET sql injection</title>
    </head>

    <body>
 
<?php

if(isset($_GET['submit'])){
	$id=$_GET['id'];
	//$username=$_GET['u'];
	$con=mysqli_connect('localhost','root','');
	if($con){
		mysqli_select_db($con, 'test');
		//$query=mysqli_query($con, "SELECT username FROM student WHERE username='$username'");
		$query=mysqli_query($con, "SELECT username FROM student WHERE id='$id'");
		$num=mysqli_num_rows($query);
		$i=0;
		while($i<$num){
			$result=mysqli_fetch_assoc($query);
			//echo "username:".$result["username"]."<br/>";
			$i++;
		}
        if($i>0){
            echo "##".rand(1,99999)."##"."yes"."##".rand(1,99999)."##";
        }
        else {
            echo "##".rand(1,99999)."##"."no"."##".rand(1,99999)."##";
        }  
 
	}
}
mysqli_close($con);
?>

       <form action="./3.php" method="GET">
            user id:<input type="text" name="id">
            <input type="submit" value="submit" name="submit">
        </form>
    </body>
</html>

