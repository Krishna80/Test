<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $title;?></title>
		<link rel="stylesheet" type="text/css" href="../css/main.css">
	</head>
	<body>
		<header><h2>My Website</h2></header>
		<nav>
			<ul>
				<li><a href="index.php?page=home">Home</a></li>
				<li><a href="index.php?page=aboutme">About</a></li>
				<li><a href="index.php?page=contact">Contact</a></li>
				<li><a href="index.php?page=add">Add person</a></li>
				<li><a href="index.php?page=addmessage">Add Message</a></li>
				<li><a href="index.php?page=listmessage">List of Message</a></li>
				<li><a href="index.php?page=edit">Edit Records</a></li>
				<li><a href="index.php?page=list">List</a></li>

			</ul>
		</nav>
		<section>
			<div class="sidebar">
				<ul>
					<li>My name is Krishna</li>
					<li>Do you know?</li>
				</ul>
			</div>
			<div class="main">
				<?php echo $content;?>
			</div>
		</section>
		<footer>
			This is last part
		</footer>
	</body>
</html>