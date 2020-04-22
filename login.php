<?php

    session_start();
    $err = '';

    if(isset($_POST['login'])){
        include 'include/connection.inc.php';
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        if(empty($username) || empty($password)){
            $err = "Username or password can't be empty!";
        }else{
            $sql = "SELECT * FROM users WHERE username = '$username'";
            $result = mysqli_query($conn, $sql);

            $row = mysqli_fetch_assoc($result);
            if($username == 'admin'){
                $hashedPwdCheck = password_verify($password, $row['password']);
                if($hashedPwdCheck){
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['firstname'] = $row['name'];
                    $_SESSION['lastname'] = $row['surname'];
                    header('Location: dashboard.php');
                }else{
                    $err = "Username or password incorrect";
                }
            }else{
                $hashedPwdCheck = password_verify($password, $row['password']);
                if($hashedPwdCheck){
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['firstname'] = $row['name'];
                    $_SESSION['lastname'] = $row['surname'];
                header('Location: dashboardUser.php');
                }else{
                    $err = "Username or password incorrect";
                }
            }
           
        }



    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="css/style.css" > 
    <title> Login | page</title>
</head>
<body>
    <div class="login-form">
    	<div class="login-header">
        	<h2 style="text-align: center">Login</h2>
        </div>
        <p class="error"><?php echo $err;?></p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="form-group">
                <label class="loginlabel">Username</label><input type="text" name="username" />
            </div>
            <div class="form-group">
                <label class="loginlabel">Password</label><input type="password" name="password" />
            </div>
            <div class="form-group>">
                <input type="submit" name="login" class="login-button" value="Login">
                
            </div>
            
            <p>Don't have account? <a href="register.php" style="text-decoration: none;">Register now</a></p>
        </form>
    </div>
</body>
</html>