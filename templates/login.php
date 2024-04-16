


<?php
session_start();

$con=mysqli_connect("localhost","root","","user");
if (!$con)
{
    die("Connection failed: " . mysqli_connect_error());
}

// making connection to the database

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM user_data2  WHERE username = '$username' and  password = '$password'";
    
    $result = mysqli_query($con, $sql);

    // Check if user exists
    if (mysqli_num_rows($result) > 0) {
        
      header("Location: home.php"); // Redirect to dashboard
    } 
    else {
    
      $error_message = "Incorrect username or password.if we don,t sinup so please go sinup page";

      // Display an alert box using JavaScript
      echo "<script>alert('$error_message');</script>";
    }
}

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyber Platform</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anta&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
     <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body style="background-image: linear-gradient(
  45deg,
  hsl(240deg 37% 62%) 0%,
  hsl(274deg 42% 63%) 11%,
  hsl(308deg 49% 64%) 22%,
  hsl(330deg 90% 72%) 33%,
  hsl(341deg 100% 73%) 44%,
  hsl(358deg 100% 75%) 56%,
  hsl(18deg 100% 70%) 67%,
  hsl(34deg 100% 64%) 78%,
  hsl(46deg 100% 57%) 89%,
  hsl(55deg 100% 50%) 100%
);">
<div class='navbar navbar-expand-md bg-body-tertiary border' style='background:black;'>
      <div class='container'>
        <!-- ( brandname ) -->
        <a class='navbar-brand' href='#'>CyberHub</a>
        <!-- ( toggle button ) -->
        <div class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNavAltMarkup' aria-controls='navbarNavAltMarkup' aria-expanded='false' aria-label='Toggle navigation'>
          <span class='navbar-toggler-icon'></span>
        </div>
        <!-- (navbar) -->
        <div class='collapse navbar-collapse' style='justify-content: flex-end;' id='navbarNavAltMarkup'>
          <div class='navbar-nav' style='gap: 0.5rem'>
          
            <a class='nav-link active' style='font-size: small !important;' aria-current='page' href='index.php'>Home</a>
          
            <div class='navbar navbar-expand-md bg-body-tertiary border' style='background:black;'>
      <div class='container'>
        <!-- ( brandname ) -->

        <!-- ( toggle button ) -->
        <div class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNavAltMarkup' aria-controls='navbarNavAltMarkup' aria-expanded='false' aria-label='Toggle navigation'>
          <span class='navbar-toggler-icon'></span>
        </div>
        <!-- (navbar) -->
        <div class='collapse navbar-collapse' style='justify-content: flex-end;' id='navbarNavAltMarkup'>
          <div class='navbar-nav' style='gap: 0.5rem'>
<!--           
            <a class='nav-link active' style='font-size: small !important;' aria-current='page' href='index.php'>Home</a> -->
          
            <!-- <a class='nav-link' style='font-size: small !important;' href='signup.php'>Signup</a> -->
            
          </div>
        </div>
      
      </div>
    </div>  
          </div>
        </div>
      
      </div>
    </div>
    
    

  <div class="container border  rounded shadow my-5">
    <div class="row">
      <div class="col-6">
        
        <img src="cybercrime.png" class="my-5" alt="">

      </div>


      <div class="col-4">

      <form action="" method="post" class="my-3 ">

        <div class="h1 py-5 mx-3 text-white" >Login Form </div>
        

        <!-- username -->
        <div class="input-box d-flex my-3">
        <span class="icon material-symbols-outlined text-white">person</span>
        <input type="text"  name="username" placeholder="username" class="form-control" required>

        </div>
        <!-- password -->
        <div class="input-box d-flex my-3 text-white">
        <span class="icon material-symbols-outlined">passkey</span>
        <input type="password" name="password" placeholder="password" class="form-control" required>

        </div>
       <input type="submit" value="login" name="login" class="btn btn-outline-dark mx-4">
       <a href="signup.php" class="btn btn-outline-dark "style="margin-left:1px;">signup</a>
     

          </div>
        </form>


      </div>

      <div class="col"></div>

    </div>
  </div>
      
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>


</body>
</html>
