<!DOCTYPE php>
<php>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Parent</title>

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
                   Admin
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



        <head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 70%;
  margin-left:auto;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 4px;
}

tr:nth-child(even) {
  background-color: #87CEFA;
}
</style>
</head>

<body>


<table>
    <tr>

        <th>Name</th>
        <th>Gender</th>
        <th>Date of Birth</th>
        <th>Roll</th>
        <th>Blood Group</th>
        <th>Religion</th>
        <th>Address</th>
        <th>Email</th>
        <th>Class</th>
        <th>Section</th>
        <th>Admission ID</th>
        <th>Password</th>
        <th>Phone</th>


    </tr>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "SMS";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>'.$row['first_name']. " " .$row['last_name'].'</td>'; 
        echo '<td>'.$row['gender'].'</td>'; 
        echo '<td>'.$row['date_of_birth'].'</td>'; 
        echo '<td>'.$row['roll'].'</td>'; 
        echo '<td>'.$row['blood_group'].'</td>'; 
        echo '<td>'.$row['religion'].'</td>'; 
        echo '<td>'.$row['address'].'</td>';
        echo '<td>'.$row['email'].'</td>'; 
        echo '<td>'.$row['class'].'</td>'; 
        echo '<td>'.$row['section'].'</td>'; 
        echo '<td>'.$row['admissionID'].'</td>';  
        echo '<td>'.$row['password'].'</td>'; 
        echo '<td>'.$row['phone'].'</td>'; 
        echo '</tr>';
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</table>

</body>

    

</body>

</php>

