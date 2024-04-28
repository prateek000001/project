<?php
	
	$login_email=$_GET["email1"];
	$login_password=$_REQUEST["password1"];
	
	$connection=mysqli_connect("localhost","root","","project") or die("Couldn't connect to server");

	$query="SELECT * FROM dashboard where username='$login_email'";
	$result=mysqli_query($connection,$query) or die("Query Failed:".mysql_error());
	if(mysqli_num_rows($result)>0){
		echo "<script>alert('E-mail already exists Try to login');
		window.location.href='Home_page.html'</script>";
	}
	else{
		$query="INSERT INTO dashboard (username,password) VALUES ('$login_email','$login_password')";
		$result=mysqli_query($connection,$query) or die("Query Failed:".mysql_error());
		echo "<script>alert('Signup successfully , now you can login !');
		window.location.href='Home_page.html'</script>";
	}

?>