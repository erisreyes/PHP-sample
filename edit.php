<?php
$servername = "localhost:3307";
$username = "root";
$password = "root";
$db = "test_mm";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  if( $_GET["id"] ) {
    $id = $_GET["id"];
    $name = $_GET["name"];
    echo "Welcome ". $_GET['id']. "<br />";
    
  mysqli_query($conn,"UPDATE employee
                        SET name = '$name'
                        WHERE id = '$id';");
 }

    
?>