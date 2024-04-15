<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyber Platform</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body style="background: #e4f5ff;">

  <?php include('navbar.php') ?>

    
    
    <div class="container">
    
       <!-- form container -->
       <form action="#" class="border rounded p-md-3 p-2 mt-lg-5 mt-md-3 mt-1" style="background: white;">
            
        <div class="h4 font-weight-normal"> Complaint About Cyber Crime </div>

        <div class="row">

            <!-- username field -->
            <div class="col-lg-4 col-md-6 col-12 py-3 form-group">

                <input type="text" name="username" id="" placeholder="Your Good Name" class="form-control">

            </div>
            <!-- email field -->
            <div class="col-lg-4 col-md-6 col-12 py-3 form-group">

                <input type="email" name="email" id="" placeholder="Your Email Id" class="form-control">

            </div>
            
            <!-- content field -->
            <div class="col-12 py-3 form-group">

                <textarea name="content" id="" rows="10" placeholder="Share with us" class="form-control"></textarea>

            </div>
            <!-- button -->
            <div class="col-12 py-3">

                <input type="submit" value="Send Message" name="complaint_submit" class="btn btn-block btn-dark" style="font-size: small !important; background: #2d5a83;">

            </div>

        </div>

    </form>
      
    <?php

        if (isset($_REQUEST['complaint_submit']))
        {

            $username = $_REQUEST['username'];
            $email = $_REQUEST['email'];
            $number = $_REQUEST['number'];
            $content = $_REQUEST['content'];
            
            require('connection.php');
            
            /*
                $to = "recipient@example.com";
$subject = "Test Email";
$message = "This is a test email sent from PHP.";
$headers = "From: yourname@example.com";
            */
            
            
            mail($email, $content, $number, "exmaple@gmail.com");
        }
        
    ?>
      
      <!-- footer section -->

      <div id="footer" class="py-3">

        <h6 style="color: rgba(0,0,0,0.5); font-size: small !important;"> Copyright by CyberHub </h6>

      </div>
    
    </div>
        

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>


</body>
</html>
