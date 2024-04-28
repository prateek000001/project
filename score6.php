<?php
	$connection=mysqli_connect("localhost","root","","project") or die("Couldn't connect ot server");
		$level1score=$_COOKIE["level1score"];
		$level2score=$_COOKIE["level2score"];
		$level3score=$_COOKIE["level3score"];
		$level4score=$_COOKIE["level4score"];
		$level5score=$_COOKIE["level5score"];
		$level6score=$_COOKIE["level6score"];
		$username=$_COOKIE["username"];
		$query = "UPDATE dashboard SET level1=$level1score ,level2=$level2score ,level3=$level3score ,level4=$level4score ,level5=$level5score ,level6=$level6score where username='$username'";
		$result = mysqli_query($connection,$query) or die("query failed : ".mysql_error());
		echo $level6score;	
	header("Location:Student_Dashboard.php");
?>