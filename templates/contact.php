
<?php


$host = "localhost";
$username = "root";
$password = "";
$database = "admin";

$connection = mysqli_connect($host,$username,$password,$database);
if ($connection)
{
    echo ("<script> console.log(`Connection Established :)`) </script>");
}
else
{
    die (mysqli_connect_errno()." connection error : ".mysqli_connect_error());
}


if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
$number=$_POST['number'];
    $result="insert into admin_contact values('$username','$email','$number');";
if(mysqli_query($connection,$result)){

 header("location:contact.php");
}
else{
    echo"error in send the complaint";
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
     <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body style="background:black;">
  <?php include('navbar.php') ?>

    
    

  <div class="container border  rounded shadow my-5">
    <div class="row">
      <div class="col-6">
        
        <img src="cybercrime.png" class="my-5" alt="">

      </div>


      <div class="col-4">

      

      <div class="w-100 py-3 "></div>

      <form action="" method="post" class="border-top my-3 ">

        <div class="h3 py-3 text-white mx-5">Contact Us</div>
        <br>
        <!-- username -->
        <div class="input-box d-flex my-3">
        <span class="icon material-symbols-outlined text-white">person</span>
        <input type="text"  name="username"placeholder="username" class="form-control" required>

        </div>
        <!-- password  -->
        <div class="input-box d-flex my-3">
        <span class="icon material-symbols-outlined text-white">passkey</span>
        <input type="text" name="email" placeholder="email" class="form-control" required>

        </div>
        <div class="input-box d-flex my-3">
        <span class="material-symbols-outlined text-white">
call
</span>
        <input type="text" name="number" placeholder="number" class="form-control" required>

        </div>
        <input type="submit" value="submit" name="submit" class="btn btn-dark mx-4">
               </form>

      </div>

      <div class="col"></div>

    </div>
  </div>
      
    
      <!-- footer section -->

      <div id="footer" class="py-3">

        <h6 style="color: rgba(0,0,0,0.5); font-size: small !important;"> Copyright by CyberHub </h6>

      </div>
    
    </div>
        

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>


</body>
</html>
