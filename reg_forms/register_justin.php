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
            "mysql:host=$servername; dbname=register",   
            $username, $password
        );
        
    $conn->setAttribute(PDO::ATTR_ERRMODE,
                        PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    // $_SERVER["REQUEST_METHOD"] == "POST"
    try{
        $fullname = test_input($_POST["field1"]);
        $phoneno = test_input($_POST["field3"]);
        $email = test_input($_POST["field2"]);
        $age = test_input($_POST["field5"]);
        $consertname = test_input($_POST["field4"]);
        $stmt = "INSERT INTO register ('fullname', 'phoneno', 'email', 'age', 'consertname') VALUES ('$fullname',$phoneno,'$email',$age,'$consertname')";
        $conn -> exec($stmt);
        header("location : ../html/home.html");
    }
    catch(PDOException $e) {
        echo $stmt . "<br>" . $e->getMessage();
    }  
    $conn = null;
?>
