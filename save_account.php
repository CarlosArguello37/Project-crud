<?php

include("db.php");

if (isset($_POST['save_account'])){
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO register(name, last_name, email, password) VALUES ('$name', '$last_name', '$email', '$password')";
    $result = mysqli_query($conn, $query);
    if (!$result){
        die("QUERY FAILED");

    }


    header("Location: index.php");

}

?>