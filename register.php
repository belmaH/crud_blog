<?php

    $letter_err = $username_exi = '';
    $pwd_err = $empty_err = '';
    $success = $username_exi = $pwd_err = $email_err='';
    
    if(isset($_POST['register'])){
        
        include_once 'include/connection.inc.php';
        
        
        
        $firstname = mysqli_real_escape_string($conn, $_POST['name']);
        $lastname = mysqli_real_escape_string($conn, $_POST['surname']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        
        if(empty($firstname) || empty($lastname) || empty($email) || empty($username) || empty($password)){
            
            $empty_err = "All fields are required";
            
        }elseif(strlen($password) <= 5){
            
            $pwd_err = "Password must be higher than 5 characters";
            
        }elseif(!preg_match("/^[a-zA-Z]*$/", $firstname) || !preg_match("/^[a-zA-Z]*$/", $lastname)){
            
            $letter_err = "Name or surname only have to contain letters!";
            
        }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $email_err = "Invalid email format"; 

        }else{
            
            $sql = "SELECT * FROM users WHERE username = '$username'";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            
            if($resultCheck > 0){
                
                $username_exi = "Username already exists";
                
            }else{
                //Hashing the password
                $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                
                //Insert User into the db
                $sql = "INSERT INTO users (name, surname, email, username, password) VALUES ('$firstname', '$lastname', '$email', '$username', '$hashedPwd')";

                $result = mysqli_query($conn, $sql);
                
                $success = "Account successfully created";
                header("refresh:3; url=login.php");
            }
            
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="css/style.css" > 
    <title> Register | page</title>
</head>
<body>
    <div class="login-form">

    	<div class="login-header">
        	<h2 style="text-align: center">Register </h2>
        </div>
        <p class="success"><?php echo $success; ?></p>
        <p class="error"><?php echo $empty_err .' '. $pwd_err .''.$letter_err .''. $username_exi.''.$email_err; ?></p>
        <form action="" method="POST" target="">
            <div class="form-group">
                <label class="loginlabel">Name</label><input type="text" name="name" />
            </div>
            <div class="form-group">
                <label class="loginlabel">Surname</label><input type="text" name="surname" />
            </div>
            <div class="form-group">
                <label class="loginlabel">Email</label><input type="text" name="email" />
            </div>
            <div class="form-group">
                <label class="loginlabel">Username</label><input type="text" name="username" />
            </div>
            <div class="form-group">
                <label class="loginlabel">Password</label><input type="password" name="password" />
            </div>
            <div class="form-group>">
                <input type="submit" name="register" class="login-button" value="Register">
                
            </div>
            <p>Already have account? <a href="login.php" style="text-decoration: none;">Login</a></p>
            
           
        </form>
    </div>
</body>
</html>