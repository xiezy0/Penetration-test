
<?php

if(isset($_GET['submit'])){
	$id=$_GET['id'];
	$score=$_GET['score'];
	$con=mysqli_connect('localhost','root','');
	if($con){
		mysqli_select_db($con,'test');
		$query=mysqli_query($con,"SELECT id,username,score FROM student WHERE id='$id';");
		$num=mysqli_num_rows($query);
		$i=0;
		while($i<$num){
			$result=mysqli_fetch_assoc($query);
			mysqli_query($con,"UPDATE student SET score='$score' WHERE id='$id';");
			//echo "name:".$result["username"]."<br/>";
			echo "$id"." update right"."<br/>";
			$i++;
		}
		if($i==0){
			echo "$id"." update false"."<br/>";
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
        <form action="./6.php" method="GET">
            user id:<input type="text" name="id"><br/>
	    user score:<input type="text" name="score"><br/>
            <input type="submit" value="submit" name="submit">
        </form>
    </body>
</html>

