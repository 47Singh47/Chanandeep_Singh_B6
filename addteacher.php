<?php

//$link = mysqli_connect("sdb-56.hosting.stackcp.net", "student21-35303133226e", "ua92-studentAc", "student21-35303133226e");
$link = mysqli_connect("sdb-56.hosting.stackcp.net", "student21-35303133226e", "ua92-studentAc", "student21-35303133226e");
//$link = mysqli_connect("localhost", "root", "", "student21-35303133226e");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $tname = $_POST['teacher_name'];
	$tid = $_POST['teacher_id'];
	$class = $_POST['class'];
	$con = $_POST['contact'];
   

    $sql1 = "INSERT INTO teacher (teacher_name,teacher_id,class,contact) VALUES ('$tname','$tid','$class','$con')";
    if (mysqli_query($link, $sql1)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>