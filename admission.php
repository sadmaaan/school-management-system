<!DOCTYPE php>
<php>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admission</title>

    <!-- Bootstrap CSS CDN -->

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

            
</head>
<body>

    
    <header>
        <div class="logo">
            <h1 class="logo-text">School Managment System</h1>
        </div>
        <i class="fa fa-bars menu-toggle"></i>
            <ul class="nav">
               <li><a href="#">Home</a></li>
               <li>
                   <a href="#">
                    <i class="fa fa-user"></i>
                   Rakib Hasan
                   <i class="fa fa-chevron-down" style="font-size: .8em"></i>
                   </a>
                    <ul>
                        <li><a href="#">Deshboard</a></li>
                        <li><a href="#" class="logout">Logout</a></li>
                    </ul> 
                </li>    
            </ul> 
    </header>
    <section>
        
    <div class="wrapper">
        <div class="sidebar">
        <ul>
            <li><a href="#">Deshboard</a>
                <ul>
                    <li><a href="admin.php">Admin</a></li>  
                    <li><a href="teacher.php">Teachers</a></li>
                    <li><a href="student.php">Students</a></li>
                    <li><a href="parent.php">Parents</a></li>
                </ul>
            </li>
            <li><a href="#">Students</a>
                <ul>
                    <li><a href="allstudent.php">All Student</a></li>  
                    <li><a href="admission.php">Admission Form</a></li>
                    
                </ul>
            </li>
            <li><a href="#">Parents</a>
                <ul>
                    <li><a href="allparent.php">All Parent</a></li>  
                    <li><a href="addparent.php">Add Parent</a></li>
                </ul>
            </li>
            <li><a href="#">Teachers</a>
                <ul>
                    <li><a href="allteacher.php">All Teacher</a></li>  
                    <li><a href="addteacher.php">Add Teachers</a></li>
                </ul>
            </li>

            <li><a href="#">Class</a>
                <ul>
                    <li><a href="allclass.php">All Class</a></li>  
                    <li><a href="addclass.php">Add Class</a></li>
                </ul>
            </li>

            <li><a href="#">Exam</a>
                <ul>
                    <li><a href="examschedule.php">Exam Schedule</a></li>  
                    <li><a href="examgrade.php">Exam Grade</a></li>
                </ul>
            </li>
            <li><a href="notice.php">Notice</a></li>
            
            
        </ul> 

    </section>

    <form method="post">
        <div class="w3-container">
                
            <h1>Admission Form</h1>
            <div class="w3-input">
                <i class="first name"></i>
                <label class="control-label col-sm-3">First Name*</label>
                <input type="text" name="firstName" >
            </div>
            <div class="w3-input">
                <i class="last name"></i>
                <label class="control-label col-sm-3">Last Name*</label>
                <input type="text" name="lastName">
            </div>
            
            <div class="w3-input">
                <label class="control-label col-sm-3">Gender :</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="gender" id="femaleRadio" value="Female">Female
                                    </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                <input type="radio" name="gender" id="maleRadio" value="Male">Male
                                </label>
                            </div>
                        </div>
                    </div>
            </div> 
                   
            <div class="w3-input">
                <label class="control-label col-sm-3">Roll</label>
                <input type="number" name="roll" >
            </div>  


            <div class="w3-input">     
                <label class="control-label col-sm-3">Date of Birth*</label>
                <input type="date" name="DateOfBirth" >
            </div>  

            <div class="w3-input">
                <label class="control-label col-sm-3">Blood Group*</label>
                <select name="bloodGroup">
                  <optgroup label="Please Select Group">
                    <option value=""></option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>

                  </optgroup>
                </select>
                
            </div>  

             <div class="w3-input">
                <label class="control-label col-sm-3">Religion*</label>
                <select name="religion">
                  <optgroup label="Please Select Religion">
                    <option value=""></option>
                    <option value="Islam">Islam</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Christan">Christan</option>
                    <option value="Buddish">Buddish-</option>
                    <option value="Others">Others</option>

                  </optgroup>
                </select>
            </div> 

            <div class="w3-input">
                        <label class="control-label col-sm-3">Adress</label>
                        <input type="text" name="address">
                    </div>

            <div class="w3-input">
                <label class="control-label col-sm-3">Email</label>
                <input type="email" name="email" >
            </div>   

            <div class="w3-input">
                <label class="control-label col-sm-3">Class*</label>
                <select name="class">
                  <optgroup label="Please Select Class">
                    <option value=""></option>
                    <option value="Play">Play</option>
                    <option value="Nursery">Nursery</option>
                    <option value="One">One</option>
                    <option value="Two">Two</option>
                    <option value="Three">Three</option>
                    <option value="Four">Four</option>
                    <option value="Five">Five</option>  

                  </optgroup>
                </select>
            </div> 
            <div class="w3-input">
                <label class="control-label col-sm-3">Section*</label>
                <select name="section">
                  <optgroup label="Please Select Section">
                    <option value=""></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>

                  </optgroup>
                </select>
            </div> 
            <div class="w3-input">
                <label class="control-label col-sm-3">Admission ID</label>
                <input type="number" name="admissionID" >
                
            </div>


            <div class="w3-input">
                <label for="password">Password </label>     
                <input type="password" name="password">   

            </div>
                    
                    
            <div class="w3-input">
                <label for="phoneNumber">Phone number </label>     
                <input type="phoneNumber" name="phoneNumber">            
            </div>
                    
            <button type="submit" class="btn" name= "submitButton" >Submit</button>       

        </div> 
            
    </div>
</form>

<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "SMS";
	
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	

	if (!$conn) {
	    die("select SMS connection failed: " . mysqli_connect_error());
    }
    


    $sql = "CREATE TABLE IF NOT EXISTS `student` (

        `first_name` VARCHAR(50) NOT NULL,
        `last_name` VARCHAR(50) NOT NULL,
        `gender` VARCHAR(10) NOT NULL,
        `date_of_birth` DATE NOT NULL,
        `roll` INT(10) NOT NULL,
        `blood_group` VARCHAR(2) NOT NULL,
        `religion` VARCHAR(15) NOT NULL,
        `address` VARCHAR(200) NOT NULL,
        `email` VARCHAR(50) NOT NULL,
        `class` VARCHAR(5) NOT NULL,
        `section` VARCHAR(50) NOT NULL,
        `admissionID` VARCHAR(50) NOT NULL,
        `password` VARCHAR(20) NOT NULL,
        `phone` VARCHAR(11) NOT NULL,
        
        PRIMARY KEY (`admissionID`))";

//   if(mysqli_query($conn, $sql)){
//       echo "Table accelaration created successfully<br>";
//   } else {
//       echo "Error creating accelaration table: " . mysqli_error($conn). "<br>";
//   }


	

  if (isset($_POST["submitButton"])) {
    echo "In button preess";

    $firstname = $_POST["firstName"];
    $lastname = $_POST["lastName"];
    $gender = $_POST["gender"];
    $dob = $_POST["DateOfBirth"];
    $roll = $_POST["roll"];
    $bloodgroup = $_POST["bloodGroup"];
    $religion = $_POST["religion"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $class = $_POST["class"];
    $section = $_POST["section"];
    $admissionID = $_POST["admissionID"];
    $password = $_POST["password"];
    $phone = $_POST["phoneNumber"];

    $s = "SELECT admissionID FROM student WHERE admissionID = '$admissionID'";
    $result = mysqli_query($conn, $s);
    $num = mysqli_num_rows($result);


    if($num == 0){
        $query = "INSERT INTO student (first_name, last_name, gender, date_of_birth,roll,blood_group, religion, address, email, class, section, admissionID, password, phone)
        VALUES
            ('$firstname','$lastname',' $gender','$dob','$roll','$bloodgroup',' $religion','$address','$email','$class',' $section','$admissionID','$password','$phone')";
                if(mysqli_query($conn, $query)){
                    echo "<script>
                    alert('Your account has been created');
                    </script>";
                } else{
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                }
    }
    else{
        echo "<script>
        alert('This email address already exists in database');
        </script>";
    }

}

	mysqli_close($conn);
?>


</body>

</php>