<form action="" method="POST">
	<label>First name:</label>
	<input type="text" name="firstname" />
	<label>Surname:</label>
	<input type="text" name="surname" />
	<label>Email:</label>
	<input type="text" name="email" />
	<label>Birthday:</label>
	<select name="day">
		<?php
			for ($i = 1; $i < 32; $i++) {
				echo '<option value="' . $i . '">' . $i  . '</option>';
			}
		?>
	</select>
	
	<select name="month">
		<?php
			$months = ['', 'January', 'Feburary', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
			for ($i = 1; $i < 13; $i++) {
				if ($i < 10) {
						echo '<option value="0' . $i . '">' . $months[$i]  . '</option>';
				}
				else {
					echo '<option value="' . $i . '">' . $months[$i]  . '</option>';
							}
			}
		?>
	</select>
	<select name="year">
		<?php
			for ($i = 1900; $i < 2016; $i++) {
				echo '<option value="' . $i . '">' . $i  . '</option>';
			}
		?>
	</select>
	<input type="submit" value="submit" name="submit" />
</form>