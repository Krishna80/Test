<?php
require '../connect/connect.php';
if (isset($_POST['submit'])) {
	$date = new DateTime();
	$messageTable = new DatabaseTable($pdo,'message');
	unset($_POST['submit']);
	$_POST['messageDate'] = $date->format('Y-m-d');
	//$stmt->execute($_POST);
	$messageTable->save($_POST,'email');
	echo '<p>Message posted</p>';
}
$title = 'Add Message';
$content= loadTemplate('../template/addmessage-template.php',[]);