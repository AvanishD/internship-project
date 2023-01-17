<?php
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    try {
        $servername = "localhost";
        $dbname = "register";                         
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

    // 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $fullname = test_input($_POST["name"]);
        $phoneno = test_input($_POST["phone"]);
        $email = test_input($_POST["emai;"]);
        $age = test_input($_POST["age"]);
        $concertname = test_input($_POST["cname"]);
        $stmt = "INSERT INTO register ('fullname', 'phoneno', 'email', 'age', 'concertname') VALUES ('$fullname',$phoneno,'$email',$age,'$concertname')";
        $conn -> exec($stmt);
        header("location : home.html");
    }
    // catch(PDOException $e) {
    //     echo $stmt . "<br>" . $e->getMessage();
    // }  
    $conn = null;
?>
