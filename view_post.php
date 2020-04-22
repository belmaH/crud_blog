<?php
	session_start();

	if (!isset($_SESSION['username'])) {
		header("Location: login.php");
	}

	include_once 'include/connection.inc.php';

	$id = $_GET['id'];
	$sql = "SELECT * FROM posts WHERE id=$id";
	$res = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>View post | Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<nav>
		<div class="logout">
			<a href="logout.php">Logout</a>
		</div>
	</nav>
	
	<div class="container">
		<?php
			while($red = mysqli_fetch_assoc($res)){
				echo '<h1>'.$red['title'].'</h1>';
				echo '<img class="header-img" src="'.$red['image'].'">';
				echo '<p><b>Published: </b>'. $red['date_created'].'</p>';
				echo '<p class = "content">'.$red['content'].'</p>';
				
			}
		?>
		
		<p>Back to <a href="dashboard.php" style="text-decoration: none;">Dashboard</a></p>
		
	</div>
</body>
</html>