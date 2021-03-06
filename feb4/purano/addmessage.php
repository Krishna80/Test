<?php
require 'functions.php';
$server = '127.0.0.1';
$username = 'root';
$password = '';

//The name of the schema we created earlier in MySQL workbench
$schema = 'messages_demo';


$pdo = new PDO('mysql:dbname=' . $schema . ';host=' . $server, $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

if (isset($_POST['submit'])) {
	$date = new DateTime();

	
	unset($_POST['submit']);
	$_POST['messageDate'] = $date->format('Y-m-d');


	//$stmt->execute($_POST);
	save($pdo , 'message', $_POST,'email');

	echo '<p>Message posted</p>';
	echo '<a href="listmessages.php">Return to message list</a>';
}
else {
?>

<form action="addmessage.php"? method="POST">
	
	<label>Select user</label>
	<select name="userId">
		<?php
			$stmt = $pdo->prepare('SELECT * FROM person');
			$stmt->execute();

			foreach ($stmt as $row) {
				echo '<option value="' . $row['id'] . '">' . $row['firstname'] . ' ' . $row['surname'] . '</option>';
			}
		?>
	</select>

	<label>Message</label>
	<textarea name="messageText"></textarea>

	<input type="submit" name="submit" value="add message" />
</form>

<?php
}
?>
