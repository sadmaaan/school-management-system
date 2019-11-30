<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login </title>

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One&display=swap" rel="stylesheet">

</head>

<body>

    <header>
        <div class="logo">
            <h1 class="logo-text">School Managment System</h1>
        </div>
        <i class="fa fa-bars menu-toggle"></i>
        <ul class="nav">
            <li><a href="#">Home</a></li>
        </ul>


    </header>

    <form method="post">
        <div class="login-box">
            <h1>Login</h1>

            <div class="textbox">
                <i class="fas fa-user"></i>
                <input type="text" name="username" placeholder="username">
            </div>

            <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password">
            </div>

            <button type="submit" class="btn" name="signIn">Sign in</button>
        </div>

    </form>



    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "SMS";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (isset($_POST["signIn"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $admin = "SELECT username FROM USER WHERE username = '$username' AND password = '$password'";
        $student = "SELECT admissionID FROM student WHERE admissionID  = '$username'AND admissionID = '$username'";

        //$teacher = "SELECT username FROM USER WHERE username = '$username' AND password = '$password'";
        $parent = "SELECT parent_id FROM parents WHERE parent_id = '$username' AND parent_id = '$password'";


        $result = mysqli_query($conn, $admin);
        $result1 = mysqli_query($conn, $student);
        $result2 = mysqli_query($conn, $parent);

        if (mysqli_num_rows($result1) == 1) {
            header('Location: student_s.php');
        } 
        else if (mysqli_num_rows($result) == 1) {
            header('Location: admin.php');
        }
        else if (mysqli_num_rows($result2) == 1){
            header('Location: parent_p.php');
        }
    }



    ?>






</body>

</html>