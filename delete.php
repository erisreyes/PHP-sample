<?php
// Database information
$servername = "localhost:3307";
$username = "root";
$password = "root";
$db = "test_mm";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

if(!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if( $_GET["id"] ) {
  $id = $_GET["id"];

  // sql to delete a record
  $sql = "DELETE FROM employee WHERE id='$id'";

  if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
  }

  $conn->close();

  header("Location: index.php");
}
?>