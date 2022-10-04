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
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Contact Us</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Spa</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<?php
    // if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    //     $id = $_POST['id'];
    //     $name = $_POST['name'];
    //     $gender = $_POST['gender'];
    //     $age = $_POST['age'];
        
      
      // // Connecting to the Database
      // // $servername = "localhost:3307";
      // // $username = "root";
      // // $password = "root";
      // // $database = "test_mm";

      // // // Create a connection
      // // $conn = mysqli_connect($servername, $username, $password, $database);
      // // // Die if connection was not successful
      // // if (!$conn){
      // //     die("Sorry we failed to connect: ". mysqli_connect_error());
      // // }
      // // else{ 
      //   // Submit these to a database
      //   // Sql query to be executed 
      //   $sql = mysqli_query($conn,"UPDATE employee
      //                   SET name = '$name'
      //                   WHERE id = '$id'");
      //   $result = mysqli_query($conn, $sql);
 
        // if($result){
        //   echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        //   <strong>Success!</strong> Your entry has been submitted successfully!
        //   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //     <span aria-hidden="true">×</span>
        //   </button>
        // </div>';
        // }
        // else{
        //     // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
        //     echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        //   <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
        //   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        //     <span aria-hidden="true">×</span>
        //   </button>
        // </div>';
        // }

      // }

    // }

    
?>

<div class="container mt-3">
<h1>Edit employee</h1>
<?php 
if( $_GET["id"] ) {
  $id = $_GET["id"];
}

 $query = "SELECT * FROM employee WHERE id = '$id'"; 

 $result = mysqli_query($conn, $query) or die();
 
 
$row = mysqli_fetch_array($result) ?>
    <form method="post">
      <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" class="form-control" id="name" value="<?php echo $row['name'] ?>" aria-describedby="emailHelp">
          <input type="hidden" name="id" class="form-control" id="id" value="<?php echo $row['id'] ?>" aria-describedby="emailHelp">
      </div>

      <div class="form-group">
          <label for="inputState">Gender</label>
          <?php 
          if($row['gender'] == "")
          ?>
          <select name="gender" id="gender" class="form-control">
            <?php
            if($row['gender'] == "male") { ?>
              <option value="male"  selected>Male</option>
              <option value="female">Female</option> <?php
            } else { ?>
              <option value="male">Male</option>
              <option value="female" selected>Female</option> <?php
            }?>
          </select>
      </div>

      <div class="form-group">
          <label for="desc">Age</label>
          <input type="number" name="age" class="form-control" id="age" value="<?php echo $row['age'] ?>"aria-describedby="emailHelp">
      </div>
      
      <button id="submit" type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        
      
      // Connecting to the Database
      $servername = "localhost:3307";
      $username = "root";
      $password = "root";
      $database = "test_mm";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
          die("Sorry we failed to connect: ". mysqli_connect_error());
      }
      else{ 
        // Submit these to a database
        // Sql query to be executed 
        $sql = mysqli_query($conn,"UPDATE employee
                                SET name = '$name'
                                WHERE id = '$id'");
        // $result = mysqli_query($conn, $sql);

        mysqli_query($conn,"UPDATE employee
                                SET name = '$name', gender = '$gender', age = '$age'
                                WHERE id = '$id'");



        // $dbug = "UPDATE employee
        // SET name = '$name'
        // WHERE id = '$id'";

        // echo $dbug;
 
        $url1=$_SERVER['REQUEST_URI'];
         header("Refresh: 0; URL=$url1");
        if($result){
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>Success!</strong> Your entry has been submitted successfully!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }
        else{
            // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>';
        }

      }
    }
    
?>


</script>
