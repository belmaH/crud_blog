<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "crud_blog";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if($conn != TRUE){
        echo "Error";
    }


?>