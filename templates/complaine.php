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

<body>

  <?php include('navbar.php') ?>

    
    
    <div class="container">
    
       <!-- form container -->
       <form action="#" class="border rounded p-md-3 p-2 mt-lg-5 mt-md-3 mt-1">
            
        <div class="h4 font-weight-normal"> Complaine About Cyber Crime </div>

        <div class="row">

            <!-- username field -->
            <div class="col-lg-4 col-md-6 col-12 py-3 form-group">

                <input type="text" name="username" id="" placeholder="Your Good Name" class="form-control">

            </div>
            <!-- email field -->
            <div class="col-lg-4 col-md-6 col-12 py-3 form-group">

                <input type="email" name="email" id="" placeholder="Your Email Id" class="form-control">

            </div>
            <!-- number field -->
            <div class="col-lg-4 col-12 py-3 form-group">

                <input type="tel" name="number" id="" placeholder="Number" class="form-control">

            </div>
            <!-- content field -->
            <div class="col-12 py-3 form-group">

                <textarea name="content" id="" rows="10" placeholder="Share with us" class="form-control"></textarea>

            </div>
            <!-- button -->
            <div class="col-12 py-3">

                <input type="submit" value="Send Message" name="complaine_submit" class="btn btn-block btn-dark">

            </div>

        </div>

    </form>
      
    <?php

        if (isset($_REQUEST['complaine_submit']))
        {

            $username = $_REQUEST['username'];
            $email = $_REQUEST['email'];
            $number = $_REQUEST['number'];
            $content = $_REQUEST['content'];
            
            require('connection.php');
            
            /*
                mysqli_query(); : function return response of mysqli 
                take arguments :-
                    1 :  connection     {x}
                    2 :  query          {x}
            */
            
            $query = "insert into complent values(${username},${email},${number},${content})";
    
            $result = mysqli_query($connection,$query);
        }
        
    ?>
      
      <!-- footer section -->

      <div id="footer" class="py-3">

        <h6> Copyright by CyberHub </h6>

      </div>
    
    </div>
        

    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>


</body>
</html>
