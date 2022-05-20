<?php

  include '../Php/dbConnection.php';
  session_start();
  $email = $_SESSION['email'];

  $sql = "SELECT * FROM client where email = '$email'";
  $result = mysqli_query($conn , $sql);

  $row = mysqli_fetch_assoc($result); // take result as a associate array

  $fName = $row['FirstName'];
  $lName = $row['LastName']; 
  $gTag = $row['GamerTag'];
  $cType = $row['ClientType'];
  $cId = $row['ClientID'];
  $cImage = $row['UserImage'];

  if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $gTag = $_POST['gTag'];
    $cType = $_POST['accType'];

    $name = $_FILES['imgFile']['name'];
    $target_dir = "../Images/User Images/";
    $target_file = $target_dir . basename($_FILES["imgFile"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $extensions_arr = array("jpg","jpeg","png");

    in_array($imageFileType,$extensions_arr);

    move_uploaded_file($_FILES['imgFile']['tmp_name'],$target_dir.$name);
    
    if(!empty($name)){
      $cImage=$_FILES['imgFile']['name'];
    }else{ 
      $cImage = $row['UserImage'];
    }

    // $sql = "INSERT INTO client (ClientType,GamerTag,Email,FirstName,LastName,UserImage)values('$cType','$gTag','$email','$fName','$lName','$name')";

    echo "<script>alert('$cId')</script>";
    $sql ="UPDATE client SET ClientType='$cType',GamerTag='$gTag',Email='$email',FirstName='$fName',LastName='$lName',UserImage ='$cImage' where ClientID='$cId'";

    $result = mysqli_query($conn , $sql);

    if($result){
      echo "<script>alert('Successfully updated data')</script>";
      header("Location: ./MyAccount.php");
    }else{ 
      echo "<script>alert('Failed to update data. Try again')</script>";
    }
  }
 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="../Styles/MyAccountEdit.css" />
    <meta charset="UTF-8" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap"
      rel="stylesheet"
    />
    <link rel="icon" type="favicon" href="../Images/favicon.png" />
    <title>My Account</title>
  </head>
  <body>
    <video autoplay muted loop class="bgmvideo">
      <source src="../Videos/BG_signup.mp4" type=video/ogg>
    </video>
    <!-- Web site navigation bar -->
    <header>
      <ul id="Nav-bar-id" class="Nav-bar">
        <img src="../images/Logo/final.png" id="logo" />
        <a href="Logout.php" class="Nav-button"><li>Logout</li></a>
        <a href="MyAccount.php" class="Nav-button"><li>My Account</li></a>
        <a href="Contact.html" class="Nav-button"><li>Contact</li></a>
            <a href="Friends.html" class="Nav-button"><li>Friends</li></a>
            <a href="About.html" class="Nav-button"><li>About</li></a>
            <a href="Games.php" class="Nav-button"><li>Games</li></a>
            <a href="index.php" class="Nav-button"><li>Home</li></a>
      </ul>
    </header>
    <br />
    <br />
    <br /><br />
    <div class="content">
      <br />
      <form action="" method="post" enctype='multipart/form-data'>
        <button class="btnDelete">Delete Account</button>
        <div class="img">
          <img src="../Images/User Images/<?php echo $cImage; ?>" />
          <input type="file" id="imgUpload" value="../Images/User Images/<?php echo $cImage; ?>" name="imgFile" />
        </div>
        <div class="info" id="info">
          <label for="">First Name</label><br />
          <input name="fName" id="input" value="<?php echo $fName; ?>"/>
          <br />
          <label for="">Last Name</label><br />
          <input name="lName" id="input" value="<?php echo $lName; ?>" />
          <br />
          <label for="">Gamer Tag</label><br />
          <input name="gTag" id="input" value="<?php echo $gTag; ?>"/>
          <br />
          <label for="">Email</label><br />
          <input name="email" id="input" value="<?php echo $email; ?>"/>
          <br />
          <label for="">Account Type</label><br />
          <input name="accType" id="input" readonly value="<?php echo $cType; ?>" />
          <br />
          <button class="btnChangePw">Change Password</button>
          <button class="btnEdit" name="submit"  >Save</button>
        </div>
      </form>
    </div>
    <br />
    <footer>
      <img src="../images/Logo/Facebook.png" class="flogo" />
      <img src="../images/Logo/Instergram.png" class="flogo" />
      <img src="../images/Logo/Twitter.png" class="flogo" />
    </footer>
    <script src="../Js/MyAccount.js"></script>
    <script src="../Js/Main.js"></script>
  </body>
</html>
