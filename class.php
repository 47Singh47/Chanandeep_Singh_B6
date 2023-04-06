<?php

$link = mysqli_connect("sdb-56.hosting.stackcp.net", "student21-35303133226e", "ua92-studentAc", "student21-35303133226e");
//$link = mysqli_connect("sdb-56.hosting.stackcp.net", "student21-35303133226e", "ua92-studentAc", "student21-35303133226e");
//$link = mysqli_connect("localhost", "root", "", "student21-35303133226e");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $cname = $_POST['class_name'];
	$tname = $_POST['teacher_name'];
	$cid = $_POST['course'];
	$cadd = $_POST['capicity'];
   

    $sql = "INSERT INTO class (class,class_teacher,course,capicity) VALUES ('$cname','$tname','$cid','$cadd')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>
