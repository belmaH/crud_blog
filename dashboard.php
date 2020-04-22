<?php
		session_start();
		include'include/connection.inc.php';
		if (!isset($_SESSION['username'])) {
			header("Location: login.php");
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
	<title> Admin panel | dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<nav>
		<div class="logout">
			<a href="logout.php">Logout</a>
		</div>
	</nav>
	<div class="container">
		<h4>Welcome <?php echo ucfirst($_SESSION['lastname'] .' '. $_SESSION['firstname']);?></h4>
		<br>
		<table>
			<tr>
				<th>Title</th>
				<th>Category</th>
				<th>Date Created</th>
				<th style="width: 178px;">Action</th>
			
			</tr>
			<?php while($row = mysqli_fetch_assoc($result)){ ?>
			<tr>
				<td><?php echo $row["title"]; ?></td>
				<td><?php echo ($row["category"] == 1) ? 'News' : (($row["category"] == 2) ? 'Blog' : 'Other'); ?></td>
				<td><?php echo $row["date_created"]; ?></td>
				<td>
					<a class="viewbutton" href="view_post.php?id=<?php echo $row['id']; ?>">View</a>
					<a class="editbutton" href="edit_post.php?id=<?php echo $row['id']; ?>">Edit</a>
					<a class="deletebutton" href="delete_post.php?id=<?php echo $row['id']; ?>">Delete</a>
				</td>
			</tr>
			<?php } ?>
			
		</table>
		
	</div>
</body>
</html>