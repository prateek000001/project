<!--Student Dashboard -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fast and Curious Quiz</title>
    <link rel="stylesheet" href="dashboard_style.css">
    <!-- FontAweome CDN Link for Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

</head>
<body>
<div class="container">
   <div class="row">
      <div class="neons col-12">
         <h1><em>Your Performance</em></h1>
      </div>
   </div>
   <?php

		$connection=mysqli_connect("localhost","root","","project") or die("Couldn't connect ot server");
		$username=$_COOKIE["username"];
		$query = "SELECT * FROM dashboard where username='$username'";
		$result = mysqli_query($connection,$query) or die("query failed : ".mysql_error());
			
			if(mysqli_num_rows($result)>0)
			{
			while($row = mysqli_fetch_assoc($result))
			{
				?>
				<div class="username">
				<i class="fa fa-user" style="font-size:80px"></i>
				<?php
				echo "Player : ",$row['username'],"<br><br>";
				?>
				</div>
				<div class="levelleft">
				<table class="scoretable">
					<tr><th>Level<th>Score<th>Right Answers</tr>
				<?php
				echo "<tr><td>Level 1 <td> ",$row['level1']*10,"<td>" ,$row['level1'],"</tr><br>";
				echo "<tr><td>Level 2 <td> ",$row['level2']*10,"<td>" ,$row['level2'],"</tr><br>";
				echo "<tr><td>Level 3 <td> ",$row['level3']*10,"<td>" ,$row['level3'],"</tr><br>";
				echo "<tr><td>Level 4 <td> ",$row['level4']*10,"<td>" ,$row['level4'],"</tr><br>";
				echo "<tr><td>Level 5 <td> ",$row['level5']*10,"<td>" ,$row['level5'],"</tr><br>";
				echo "<tr><td>Level 6 <td> ",$row['level6']*10,"<td>" ,$row['level6'],"</tr><br>";
				echo "<tr><td>Level 7 <td> ",$row['level7']*10,"<td>" ,$row['level7'],"</tr><br>";
				echo "<tr><td>Level 8 <td> ",$row['level8']*10,"<td>" ,$row['level8'],"</tr><br>";
				echo "<tr><td>Level 9 <td> ",$row['level9']*10,"<td>" ,$row['level9'],"</tr><br>";
				echo "<tr><td>Level 10 <td> ",$row['level10']*10,"<td>" ,$row['level10'],"</tr><br></div>";
				
				$level1=$row['level1'];
				$level2=$row['level2'];
				$level3=$row['level3'];
				$level4=$row['level4'];
				$level5=$row['level5'];
				$level6=$row['level6'];
				$level7=$row['level7'];
				$level8=$row['level8'];
				$level9=$row['level9'];
				$level10=$row['level10'];
			}
			}
		else
			echo "No Information found";
		mysqli_close($connection);
	?>
</div>
	
	<section>
		<div class="box">
			<div class="skill">
				<div class="graph" style="height:<?php echo $level1?>0%">
					<div class="score"><?php echo $level1?></div>
				</div>
					<div class="name">Level1</div>
			</div>
			
			<div class="skill">
				<div class="graph" style="height:<?php echo $level2?>0%">
					<div class="score"><?php echo $level2?></div>
				</div>
					<div class="name">Level2</div>
			</div>
			
			<div class="skill">
				<div class="graph" style="height:<?php echo $level3?>0%">
					<div class="score"><?php echo $level3?></div>
				</div>
					<div class="name">Level3</div>
			</div>

			<div class="skill">
				<div class="graph" style="height:<?php echo $level4?>0%">
					<div class="score"><?php echo $level4?></div>
				</div>
					<div class="name">Level4</div>
			</div>
	
			<div class="skill">
				<div class="graph" style="height:<?php echo $level5?>0%">
					<div class="score"><?php echo $level5?></div>
				</div>
					<div class="name">Level5</div>
			</div>
			
			<div class="skill">
				<div class="graph" style="height:<?php echo $level6?>0%">
					<div class="score"><?php echo $level6?></div>
				</div>
					<div class="name">Level6</div>
			</div>
			
			<div class="skill">
				<div class="graph" style="height:<?php echo $level7?>0%">
					<div class="score"><?php echo $level7?></div>
				</div>
					<div class="name">Level7</div>
			</div>
			
			<div class="skill">
				<div class="graph" style="height:<?php echo $level8?>0%">
					<div class="score"><?php echo $level8?></div>
				</div>
					<div class="name">Level8</div>
			</div>
			
			<div class="skill">
				<div class="graph" style="height:<?php echo $level9?>0%">
					<div class="score"><?php echo $level9?></div>
				</div>
					<div class="name">Level9</div>
			</div>
			
			<div class="skill">
				<div class="graph" style="height:<?php echo $level10?>0%">
					<div class="score"><?php echo $level10?></div>
				</div>
					<div class="name">Level10</div>
			</div>
		<div>
	</section>


	<div class="logout"><button class="noselect" onclick="window.location.href='Home_page.html'">Log out</button></div>

</body>
</html>