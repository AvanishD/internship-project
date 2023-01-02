<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    //connect
    $conn = new mysqli($servername, $username, $password);

    //checking connectivity
    if ($conn->connect_error){
        die("Connection failure" .$conn->connect_error);
    }

    

?>