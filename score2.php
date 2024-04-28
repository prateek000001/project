<?php
	$connection=mysqli_connect("localhost","root","","project") or die("Couldn't connect ot server");
		$level1score=$_COOKIE["level1score"];
		$level2score=$_COOKIE["level2score"];
		$username=$_COOKIE["username"];
		$query = "UPDATE dashboard SET level1=$level1score ,level2=$level2score where username='$username'";
		$result = mysqli_query($connection,$query) or die("query failed : ".mysql_error());
		echo $level2score;	
	header("Location:Student_Dashboard.php");
?>