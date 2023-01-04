<?php
    $conn = mysqli_connect("localhost", "root", "");
    $db = mysqli_select_db($conn, "internship");

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $enquiry = $_POST['enquiry'];

        if ($name != " " || $email != " "){
            $query = mysqli_query($conn, "INSERT INTO contact(fullname, email, phoneno, enquiry) VALUES ('$name', '$email', '$phone', '$enquiry')");
            echo "<br/><br/><span>Data Inserted Successfully...!!</span>";
        }
        else{
            echo "<p>Insertion Failed <br/> Some Fields are blank....!!</p>";
        }
    }

    mysqli_close($conn);

?>