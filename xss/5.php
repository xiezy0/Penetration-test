        <form action="./5.php" method="GET">
            id:<input type="text" name="id">
            <p>
            name:<input type="text" name="name">
            <input type="submit" value="submit" name="submit">
        </form>

<hr>

<?php

if(isset($_GET['submit'])){
	$id=$_GET['id'];
	$name=$_GET['name'];
	$con=mysqli_connect('localhost','root','pa33w0rd');
	if($con){
		mysqli_select_db($con,'xss');
		$query=mysqli_query($con,"REPLACE INTO user (id,username) VALUES($id,\"$name\");");

        echo "OK";
	}
}
mysqli_close($con);
?>
