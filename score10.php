<?php
	$connection=mysqli_connect("localhost","root","","project") or die("Couldn't connect ot server");
		$level1score=$_COOKIE["level1score"];
		$level2score=$_COOKIE["level2score"];
		$level3score=$_COOKIE["level3score"];
		$level4score=$_COOKIE["level4score"];
		$level5score=$_COOKIE["level5score"];
		$level6score=$_COOKIE["level6score"];
		$level7score=$_COOKIE["level7score"];
		$level8score=$_COOKIE["level8score"];
		$level9score=$_COOKIE["level9score"];
		$level10score=$_COOKIE["level10score"];
		$username=$_COOKIE["username"];
		$query = "UPDATE dashboard SET level1=$level1score ,level2=$level2score ,level3=$level3score ,level4=$level4score ,level5=$level5score ,level6=$level6score ,level7=$level7score ,level8=$level8score ,level9=$level9score ,level10=$level10score where username='$username'";
		$result = mysqli_query($connection,$query) or die("query failed : ".mysql_error());
		echo $level9score;	
	header("Location:Student_Dashboard.php");
?>