<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "test";

    $connection = mysqli_connect($host,$username,$password,$database);

    /*
        mysqli_connect() : function return connection true
        take arguments :-
            1 : hostname {x}
            2 : username {x}
            3 : password
            4 : database
    */  
    
    if ($connection)
    {
        echo ("<script> console.log(`Connection Established :)`) </script>");
    }
    else
    {
        die (mysqli_connect_errno()." connection error : ".mysqli_connect_error());
    }

?>