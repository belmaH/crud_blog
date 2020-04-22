<?php
	$msg = $msg_error = '';
	session_start();

	
		include_once 'include/connection.inc.php';
		
		$id = $_GET['id'];
		$sql = "SELECT * FROM posts WHERE id=$id";
		$rez = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($rez);

		if (isset($_POST['update'])) {
			
			$title = $_POST['title'];
			$category = $_POST['category'];
			$image = $_POST['image'];
			$date = $_POST['date'];
			$content = mysqli_real_escape_string($conn,$_POST['content']);

			if(!empty($title) && !empty($image) && !empty($date) && !empty($content)){
				
				$sql = "UPDATE posts SET title='$title', category='$category', image='$image', date_created='$date', content='$content' WHERE id=$id";
				$result = mysqli_query($conn, $sql);
				if ($result) {
					
					$msg = 'Post successfully updated.';
					$sql = "SELECT * FROM posts WHERE id=$id";
					$rez = mysqli_query($conn, $sql);
					$row = mysqli_fetch_assoc($rez);
				}
				
			}else{
				
				$msg_error = "All fields are required!";
				
			}
		}
		
	

?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit post | Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<nav>
		<div class="logout">
			<a href="logout.php">Logout</a>
		</div>
	</nav>
	<div class="container">
		<h2>Edit post</h2>
		<hr>
        <form action="" method="POST">
        	<p class="add-success"><?php echo $msg; ?></p>
        	<p class="post-error"><?php echo $msg_error; ?></p>
            <div class="form-group">
                <label class="label-post">Title</label><input type="text" name="title" value="<?php echo $row['title']; ?>"/>
            </div>
            <div class="form-group">
                <label class="label-post">Category</label><select name="category">
					<option value="1" <?php echo ($row['category'] == 1) ? 'selected' : ''; ?>>News</option>
					<option value="2" <?php echo ($row['category'] == 2) ? 'selected' : ''; ?>>Blog</option>
					<option value="3" <?php echo ($row['category'] == 3) ? 'selected' : ''; ?>>Other</option>
				</select>
            </div>
            <div class="form-group">
                <label class="label-post">Path to image</label><input type="text" name="image" value="<?php echo $row['image']; ?>"/>
            </div>
            <div class="form-group">
                <label class="label-post">Date</label><input type="date" name="date" value="<?php echo $row['date_created']; ?>"/>
            </div>
            <div class="form-group">
                <label class="label-post" style="vertical-align: top;">Content</label><textarea type="text" name="content" rows="10" cols="80"><?php echo $row['content']; ?></textarea>
            </div>
            <div class="form-group>">
                <input type="submit" name="update" class="login-button add-post" value="Update post">
            </div>
            <p>Back to <a href="dashboard.php" style="text-decoration: none;" >Dashboard</a></p>
        </form>
    </div>
</body>
</html>