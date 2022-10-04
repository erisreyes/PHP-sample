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

<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        

    </head>
    <body>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">Spa</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="register.php">Register</a>
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
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
            </nav>
            <div class="container">
                <h2>Add new employee</h2>
            </div>
            <form method="POST">
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">Name</label>
                    <input name="name" type="text" class="form-control" id="inputEmail4" placeholder="">
                    </div>
                    <div class="form-group col-md-6">
                    <label for="inputPassword4">Age</label>
                    <input name="age" type="number" class="form-control" id="inputPassword4" placeholder="">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="inputState">Gender</label>
                    <select name="gender" id="inputState" class="form-control">
                        <option value="male" selected>Male</option>
                        <option value="female">Female</option>
                    </select>
                    </div>
                </div>
         
                <button name="submit" value="register" type="submit" class="btn btn-primary">Save</button>
            </form>
    </div>
    </body>
</html>

<?php
if(isset($_POST["submit"])){
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    
    mysqli_query($conn,"INSERT INTO employee ('name', 'gender', 'age') VALUES('test', 'test', 'test')");
    // $query = mysqli_query($conn,"INSERT INTO employee ('name', 'gender', 'age') VALUES('".$name."', '".$gender."', '".$age."')")){
    //     echo "Success";
    // }else{
    //     echo "Failure" . mysqli_error($connect);
    // }
}
?>