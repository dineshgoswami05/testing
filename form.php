<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
    }

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "week4";

    $conn = mysqli_connect($host, $username, $password, $dbname);

    if(!$conn){
        die("Connection Failed! ". mysqli_connect_error());
    }

    $sql = "INSERT INTO customers(cus_name, cus_email, cus_message) VALUES('$name', '$email', '$message')";

    $result = mysqli_query($conn, $sql);

    if($result){
        echo "Entries added!";
        header("refresh:3; url=index.html");
        exit;
    }

    mysqli_close($conn);

?>