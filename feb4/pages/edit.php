<?php
require '../connect/connect.php';

if (isset($_GET['person'])) {
	$editrecord= new DatabaseTable($pdo,'person');

$stmt = $editrecord->save('email',$_GET['person']);
	$row = $stmt->fetch();

	$personsBirthday = new DateTime($row['birthday']);


	$criteria = [
		'id' =>  $_POST['id'],
		'firstname' => $_POST['firstname'],
		'surname' => $_POST['surname'],
		'email' => $_POST['email'],
		'birthday' => $_POST['year'] . '-' . $_POST['month'] . '-' . $_POST['day']
	];

	
	$editrecord->save($criteria, 'id' );
	echo '<p>Record updated</p>';
}
$title='Edit the Record';
$content=loadTemplate('../template/edit-template.php',[]);