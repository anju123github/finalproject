
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
.navbar-nav .nav-link {
    transition: color 0.3s ease;
}

.navbar-nav .nav-link:hover {
    color: #007bff; /* Change color to your desired hover color */
}
</style>

</head>
<body>
<?php

echo("<div class='navbar navbar-expand-md bg-body-tertiary border' style='background:black;'>
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
          
            <a class='nav-link active' style='font-size: small !important;' aria-current='page' href='home.php'>Home</a>
          
            <a class='nav-link' style='font-size: small !important;' href='complaine.php'>Complaint</a>
          
            <a class='nav-link' style='font-size: small !important;' href='awerness.php'>Awareness</a>

            <a class='nav-link' style='font-size: small !important;' href='query.php'>Query</a>

            <a class='nav-link' style='font-size: small !important;' href='contact.php'>Contact</a>
            
          </div>
        </div>
      
      </div>
    </div>");

?>  
</body>
</html>