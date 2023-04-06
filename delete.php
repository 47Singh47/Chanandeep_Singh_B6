<?php
$link = mysqli_connect("sdb-56.hosting.stackcp.net", "student21-35303133226e", "ua92-studentAc", "student21-35303133226e");

// Create connection
//$link = new mysqli("localhost", "root", "", "student21-35303133226e");

// Check connection
if ($link->connect_error) {
  die("Connection failed: " . $link->connect_error);
}
if (isset($_POST['submit'])) {

  $id = $_POST['s'];

// sql to delete a record
$sql = "DELETE FROM  student WHERE student_id=$id";

if ($link->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $link->error;
}


$link->close();
}
?>