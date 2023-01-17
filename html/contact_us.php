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

    
    //if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try{
        $fullname = ($_POST["name"]);
        $email = ($_POST["email"]);
        $phone = ($_POST["phone"]);
        $enquiry = ($_POST["enquiry"]);
        $stmt = "INSERT INTO contact ('fullname', 'email', 'phone', 'enquiry')  VALUES ('$fullname', '$email', $phone, '$enquiry')";
	    $conn->exec($stmt);

        header("location: home.html");
    } catch (PDOException $e){
        echo $stmt . "<br>" . $e->getMessage();
    }
    $conn = null;
    //}
    
?>
