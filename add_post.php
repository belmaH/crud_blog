<?php
    
    $err = '';
    $errsu = '';
    if(isset($_POST['add'])){
        include'include/connection.inc.php';
        $title = $_POST['title'];
        $category =  $_POST['category'];
        $date =  $_POST['date'];
        $image =  $_POST['image'];
        $content = mysqli_real_escape_string($conn, $_POST['content']);

        if(!empty($title) && !empty($category) && !empty($date) && !empty($image) &&!empty($content)){
            
            $sql = "INSERT INTO posts (title, category, date_created, image, content) VALUES ('$title', '$category', '$date', '$image', '$content')";
            $result = mysqli_query($conn, $sql);
            if($result){
                $errsu = "Post successfully added.";
            }
        }else{
            $err = "All fields are required!";
        }

    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add post | Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<nav>
		<div class="logout">
			<a href="logout.php">Logout</a>
		</div>
	</nav>
	<div class="container">
		<h2>Add post</h2>
		<hr>
        <form action="" method="POST">
        	<p class="add-success"><?php echo $errsu; ?></p>
        	<p class="post-error"><?php echo $err; ?></p>
            <div class="form-group">
                <label class="label-post">Title</label><input type="text" name="title" />
            </div>
            <div class="form-group">
                <label class="label-post">Category</label><select name="category">
					<option value="News">News</option>
					<option value="Blog">Blog</option>
					<option value="Other">Other</option>
				</select>
            </div>
            <div class="form-group">
                <label class="label-post">Path to image</label><input type="text" name="image" />
            </div>
            <div class="form-group">
                <label class="label-post">Date</label><input type="date" name="date" />
            </div>
            <div class="form-group">
                <label class="label-post" style="vertical-align: top;">Content</label><textarea type="text" name="content" rows="10" cols="80"></textarea>
            </div>
            <div class="form-group>">
                <input type="submit" name="add" class="login-button add-post" value="Insert">
            </div>
            <p>Back to <a href="dashboard.php" style="text-decoration: none;">Dashboard</a></p>
        </form>
    </div>
</body>
</html>