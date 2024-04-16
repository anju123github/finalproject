<!-- php works for submit the complaint data to the database -->
<?php


if(isset($_POST['complaint_submit'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $content=$_POST['content'];
    $result="insert into cyber_complaine values('$username','$email','$content');";
if(mysqli_query($connection,$result)){
    
    $error="your complaint send successfully";
    echo"<script>alert('$error');</script>";
    header("location:complaine.php");
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

  <?php include('navbar.php') ?>

    
    
    <div class="container" >
    
       <!-- form container -->
       <form action="" class="border rounded p-md-3 p-2 mt-lg-5 mt-md-3 mt-1" style="background: linear-gradient(hsl(34deg 100% 64%) 78%)"; method="post">
            
        <div class="h4 font-weight-normal text-white" > Complaint About Cyber Crime </div>

        <div class="row">

            <!-- username field -->
            <div class="col-lg-4 col-md-6 col-12 py-3 form-group">
            <span class="icon material-symbols-outlined text-white">person</span>
                <input type="text" name="username" id="" placeholder="Your Good Name" class="form-control">

            </div>
            <!-- email field -->
            <div class="col-lg-4 col-md-6 col-12 py-3 form-group">
            <span class="icon material-symbols-outlined text-white">passkey</span>
                <input type="email" name="email" id="" placeholder="Your Email Id" class="form-control">

            </div>
            
            <!-- content field -->
            <div class="col-8 py-3 form-group">

                <textarea name="content" id="" rows="10" placeholder="Share with us" class="form-control"></textarea>

            </div>
            <!-- button -->
           
        </div>

    </form>
      
   
      
      <!-- footer section -->

      <div id="footer" class="py-3">

        <h6 style="color: rgba(0,0,0,0.5); font-size: small !important;"> Copyright by CyberHub </h6>

      </div>
    
    </div>
        

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>


</body>
</html>
