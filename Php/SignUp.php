<?php

    include './dbConnection.php';
    // error_reporting(0);

    session_start();

    if (isset($_SESSION['email'])) {
    header("Location: SignUp.html");
}

    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $email =$_POST['email'];
    $password =md5($_POST['password']); // encrypt password using md5
    $conPassword = md5($_POST['conPassword']);

    $msg = "";

    //check password and con password
    if($password == $conPassword) { 

        // check email already in database
        $sql = "SELECT * FROM client where Email='$email' ";
        $result = mysqli_query($conn , $sql); // execute query

        // check result has a value or not if not execute this
        if (!$result -> num_rows > 0 ) {
            
            // query for the insert data into database 
            $sql = "INSERT INTO client( ClientPassword, Email,FirstName,LastName) values('$password','$email','$firstName','$lastName') ";

            // execute and store result returned result
            $result = mysqli_query($conn, $sql);
            // echo "<script>alert('done');</script>";

            // check if it execute without errors
            if($result) {
                // echo "<script>alert('success')</script>";
                $msg = "success";
                // set all attributes to null
                $firstName = "";
                $lastName = "";
                $email ="";
                $_POST['pwd'] = "" ;
                $_POST['conPwd'] = "" ;
                $pNumber ="";
            }
            else{
                // if query fail print error msg
                // echo "<script>alert('something wrong ')</script>";
                $msg = "something wrong";
            }
    }
    else {
        // if email already exist print error msg
        // echo "<script>alert('email already exist ')</script>";
        $msg = "email already exist";
    }
    }
    else {
        // this execute if password and con pw mismatched
        // echo "<script>alert('Password not matched ')</script>";
        $msg = "Password not matched ";
    }
  
    echo"<script type='text/javascript'>alert('$msg');  history.go(-1);</script>";
        
$conn -> close();
?>