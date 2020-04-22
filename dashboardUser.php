<?php
		session_start();
		if (!isset($_SESSION['username'])) {
			header("Location: login.php");
		}	
		include'include/connection.inc.php';
		

		if(isset($_GET['filter'])){
			$category = $_GET['filter'];
			$sql = "SELECT * FROM posts WHERE category = $category";
			$result = mysqli_query($conn, $sql);
		}else{
			$sql = "SELECT * FROM posts";
			$result= mysqli_query($conn, $sql);
		}
		

?>



<!DOCTYPE html>
<html>
<head>
	<title> User panel | dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<nav>
		<div class="logout">
			<a href="logout.php">Logout</a>
		</div>
	</nav>
	<div class="container">
		
		<div class="left">
			<a class="addbutton" href="add_post_user.php">Add post</a>		
		</div>
		<div class="right">
			<form action="" method="get">
				<input type="submit" name="filter" class="addbutton" value="Filter">
				<select name="filter">
					<option value="1">News</option>
					<option value="2">Blog</option>
				</select>
			</form>
		</div>
		<table>
			<tr>
				<th>Title</th>
				<th>Category</th>
				<th>Date Created</th>
			
			</tr>
			<?php while($row = mysqli_fetch_assoc($result)){ ?>
			<tr>
				<td><?php echo $row["title"]; ?></td>
				<td><?php echo ($row["category"] == 1) ? 'News' : (($row["category"] == 2) ? 'Blog' : 'Other'); ?></td>
				<td><?php echo $row["date_created"]; ?></td>
			</tr>
			<?php } ?>
			
		</table>
		
	</div>
</body>
</html>