<?php
    // $conn = mysqli_connect("localhost", "root", "");
    // $db = mysqli_select_db($conn, "internship");


    // if(isset($_POST['submit'])){
    //     $name = $_POST['name'];
    //     $email = $_POST['email'];
    //     $phone = $_POST['phone'];
    //     $enquiry = $_POST['enquiry'];

    //     if ($name != " " || $email != " "){
    //         $query = mysqli_query($conn , "insert into contact(fullname, email, phoneno, enquiry) values ('$name', '$email', '$phone', '$enquiry')");
    //         echo "<br/><br/><span>Data Inserted Successfully...!!</span>";
    //     }
    //     else{
    //         echo "<p>Insertion Failed <br/> Some Fields are blank....!!</p>";
    //     }
    // }

    // mysqli_close($conn);

    $servername = "localhost";
    $username = "root";
    $password = " ";
    $db = "internship";

    $conn = mysqli_connect($servername, $username, $password, $db);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $enquiry = $_POST['enquiry'];
    
        if ($name != " " || $email != " "){
            $query = mysqli_query($conn , "insert into contact(fullname, email, phoneno, enquiry) values ('$name', '$email', '$phone', '$enquiry')");
        }
        else{
            echo "<p>Insertion Failed <br/> Some Fields are blank....!!</p>";
        }

        if (mysqli_query($conn, $query)) {
            echo "New record created succesfully";
        } else {
            echo "Error : " . $query . "<br>" . mysqli_error($conn);
        }    
    }

    mysqli_close($conn)
?>