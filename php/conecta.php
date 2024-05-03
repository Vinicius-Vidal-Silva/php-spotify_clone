<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "spotify";

    //create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    //check connection
    if($conn->connect_error){
        die("Conneciton failed: " . $conn->connect_error);
    }else{
      echo "<script>console.log('Connected succesfuly');</script>";  
    }
    
?>