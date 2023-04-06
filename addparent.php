<?php


//$link = mysqli_connect("sdb-56.hosting.stackcp.net", "student21-35303133226e", "ua92-studentAc", "student21-35303133226e");
$link = mysqli_connect("sdb-56.hosting.stackcp.net", "student21-35303133226e", "ua92-studentAc", "student21-35303133226e");
//$link = mysqli_connect("localhost", "root", "", "student21-35303133226e");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $pname = $_POST['parent_name'];
	$sname = $_POST['parent_id'];
	$pid = $_POST['student_name'];
	$padd = $_POST['saddress'];
   

    $sql = "INSERT INTO parent (parent_name,parent_id,student_name,saddress) VALUES ('$pname','$sname','$pid','$padd')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>
