<?php

//$link = mysqli_connect("sdb-56.hosting.stackcp.net", "student21-35303133226e", "ua92-studentAc", "student21-35303133226e");
$link = mysqli_connect("sdb-56.hosting.stackcp.net", "student21-35303133226e", "ua92-studentAc", "student21-35303133226e");
// Check connection
//if ($link === false) {
    //die("Connection failed: ");
//}

//$servername = "localhost";
//$username = "root";
//$password = "";
//$databasename = "student21-35303133226e";
//$link = mysqli_connect($servername, $username,$password, $databasename);
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $sid = $_POST['id'];
	$sname = $_POST['name'];
	$lastname = $_POST['Lname'];
	$adds = $_POST['saddres'];
	$tname = $_POST['teacher'];
	$pname = $_POST['paren'];
	$cla = $_POST['clas'];
	$pnme = $_POST['parent'];
   

    $sql = "INSERT INTO student (student_id,fname,lname,saddress,teacher_id,parent_id,class,parent_name) VALUES ('$sid','$sname','$lastname','$adds','$tname','$pname','$cla','$pnme')";
    if ($link->query($sql) === TRUE) {
		echo "New record created successfully";
	  } else {
		echo "Error: " . $sql . "<br>" . $link->error;
	  }
	  
	  $link->close();
	  return("index.php");

}

?>
</form>
</div>
					
</body>
</html>