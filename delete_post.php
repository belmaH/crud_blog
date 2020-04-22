<?php
    include'include/connection.inc.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM posts WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);
    header('Location: dashboard.php');
}


?>