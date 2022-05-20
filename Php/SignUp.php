<?php

    include './dbConnection.php';

    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $email =$_POST['email'];
    $password = md5($_POST['password']); // encrypt password using md5
    $conPassword = md5($_POST['conPassword']);

    $msg = "";

    //check password and con password
    if($password == $conPassword) { 

        // check email already in database
        $sql = "SELECT * FROM client where Email='$email' ;";
        $result = mysqli_query($conn , $sql); // execute query

        // check result has a value or not if not execute this
        if ($result -> num_rows == 0 ) {
            
            // query for the insert data into database 
            $sql = "INSERT INTO client( ClientPassword, Email,FirstName,LastName) values('$password','$email','$firstName','$lastName') ";

            // execute and store result returned result
            $result = mysqli_query($conn, $sql);
            

            // check if it execute without errors
            if($result) {
                // echo "<script>alert('success')</script>";
                $msg = "success";

            }
            else{
                // if query fail print error msg
                $msg = "something went wrong";
            }
    }
    else {
        // if email already exist print error msg   
        $msg = "email already exist";
    }
    }
    else {
        // this execute if password and con pw mismatched
        $msg = "Password not matched ";
    }
  
    echo"<script type='text/javascript'>alert('$msg');
     window.history.back();
     location.reload();
     </script>";

$conn -> close();
?>