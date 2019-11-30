<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "";
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Create database --------------------------------------------------------
	$sql = "CREATE DATABASE IF NOT EXISTS SMS";

	if (mysqli_query($conn, $sql)) {
	    echo "Database created successfully<br>";
	} else {
	    echo "Error creating database: " . mysqli_error($conn) . "<br>";
	}

	$dbname = 'SMS';
	mysqli_select_db ($conn , $dbname);

	if (!$conn) {
	    die("select SMS connection failed: " . mysqli_connect_error());
    }
    


    $sql = "CREATE TABLE IF NOT EXISTS `USER` (

        `username` VARCHAR(50) NOT NULL,
        `password` VARCHAR(50) NOT NULL,
        PRIMARY KEY (`username`))";

  if(mysqli_query($conn, $sql)){
      echo "Table accelaration created successfully<br>";
  } else {
      echo "Error creating accelaration table: " . mysqli_error($conn). "<br>";
  }





				$s = "SELECT username FROM USER WHERE username = 'admin'";
				$result = mysqli_query($conn, $s);
				$num = mysqli_num_rows($result);

				if($num == 0){
          $sqlForIsertAdminValur = "INSERT INTO USER(`username`, `password`) VALUES ('admin','12345')";
  
        if(mysqli_query($conn, $sqlForIsertAdminValur)){
          echo "data insertaed successfully<br>";
        } else {
          echo "Error creating accelaration table: " . mysqli_error($conn). "<br>";
        }
				
				}
				

        mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Homepage</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesRakib Hasanome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/grayscale.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top"><h1>Welcome</h1></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="login.php">Login</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="login.php">Student Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="login.php">Teacher Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="login.php">Parent Login</a>
          </li> -->
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">School Management System</h1>
      </div>
    </div>
  </header>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/grayscale.min.js"></script>

</body>

</html>
