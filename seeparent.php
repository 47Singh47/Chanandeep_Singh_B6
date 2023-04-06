<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="style.css" />
		<title>Rishton Academy</title>
   
		<centre>
		<link rel="stylesheet" href="index.css">
			<nav class="navbar">
			<!-- LOGO -->
				<div class="logo"><img src="ris.png" width="50%" height="50%"></div>
	 
				<!-- NAVIGATION MENU -->
				<ul class="nav-links">
       
				<!-- NAVIGATION MENUS -->
					<div class="menu">
					<li><a href="index.html">Index</a></li>
						<li><a href="student.html">Add Student</a></li>
						<li><a href="teacher.html">Add Teacher</a></li>
						<li><a href="parent.html">Add Parent</a></li>
						<li><a href="seestudent.php">See Student</a></li>
						<li><a href="seeteacher.php">See Teacher</a></li>
						<li><a href="class.html">Class</a></li>
					</div>
				</ul>
			</nav>
		</centre>
	</head>
 
 <body bgcolor="#fff">
 <hr></hr>
	<br></br>
	
		<?php
		
		$link = mysqli_connect("sdb-56.hosting.stackcp.net", "student21-35303133226e", "ua92-studentAc", "student21-35303133226e");
		//$link = mysqli_connect("localhost", "root", "", "student21-35303133226e");
						
		if ($link === false) {
			die("Connection failed: ");
		}
		?>
	
	<hr>
		<center>
			<table>
		
				<tr>
					<th width="100px">Parent Name<br><hr></th>
					<th width="150px">Parent Id<br><hr></th>
					<th width="250px">Child Name<br><hr></th>
					<th width="250px">Address<br><hr></th>
				</tr>
					
				<?php
				$sql = mysqli_query($link, "SELECT  parent_name,parent_id,student_name,saddress  FROM parent");
				while ($row = $sql->fetch_assoc()){
				echo "
				<tr>
					<th>{$row['parent_name']}</th>
					<th>{$row['parent_id']}</th>
					<th>{$row['student_name']}</th>
					<th>{$row['saddress']}</th>
				</tr>";
			
				}
				?>
			</table>

		</center>
				
			
		
		<?php
		$link->close();
		?>
	
		</hr>
	
	<br></br>
		<hr></hr>
		<br></br>
		<br></br>
 </body>
</html>
