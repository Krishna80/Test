<?php
require '../connect/connect.php';

$stmt = $pdo->prepare('SELECT * FROM message');

$userQuery = $pdo->prepare('SELECT * FROM person WHERE id = :id');

$stmt->execute();

echo '<ul>';
foreach ($stmt as $row) {
	$criteria = [
		'id' => $row['userId']
	];

	$userQuery->execute($criteria);

	$user = $userQuery->fetch();

	$date = new DateTime($row['messageDate']);

	echo '<li>' . $row['messageText'] . ' posted by 
		<strong>' . $user['firstname'] . ' ' . $user['surname'] . '</strong> 
		on <em>' . $date->format('d/m/Y') . '</em>';

}
echo '</ul>';

?>
<a href="index.php?page=addmessage">Add a new message</a>