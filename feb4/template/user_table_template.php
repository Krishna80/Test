<?php
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


?>