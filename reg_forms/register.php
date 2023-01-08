<?php

    try {
        $servername = "localhost";
        $dbname = "internship";                         
        $username = "root";
        $password = "";
    
        $conn = new PDO(
            "mysql:host=$servername; dbname=internship",   
            $username, $password
        );
        
    $conn->setAttribute(PDO::ATTR_ERRMODE,
                        PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    
    try{
        $fullname = $_POST["field1"];
        $phoneno = $_POST["field3"];
        $email = $_POST["field2"];
        $age = $_POST["field5"];
        $consertname = $_POST["field4"];
        $stmt = "INSERT INTO register VALUES ('$fullname',$phoneno,'$email',$age,'$consertname')";
        $conn -> exec($stmt);
        header("location : home.html");
    }
    catch( PDOException $e){
        echo $stmt . "<br>" . $e->getMessage();
    }   
    $conn = null;
?>