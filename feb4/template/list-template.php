<?php
require '../connect/connect.php';
$list=new DatabaseTable($pdo,'person');
require '../controller/user_list.php';
echo '<div>';
	echo '<table border="2" bordercolor="red">';
				echo '<tr>';
						echo'<th>Firstname</th>';
						echo'<th>Surname</th>';
						echo'<th>birthday</th>';
						echo'<th>Email</th>';
				echo '</tr>';
			foreach ($stmt as $row) {
				echo '<tr>';
					echo '<td>'.$row['firstname'].'</td>';
					echo '<td>'.$row['surname'].'</td>';
					echo '<td>'.$row['birthday'].'</td>';
					echo '<td>'.$row['email'].'</td>';
				}
			echo '</div>';
		?>
		<form action="" method="POST">
			<input type="text" name="search" />
			<select name="field">
				<option value="firstname">First name</option>
				<option value="surname">Surname</option>
				<option value="email">Email address</option>
			</select>
			<input type="submit" value="Search" name="submit" />
		</form>