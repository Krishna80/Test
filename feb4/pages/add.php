<?php
	require '../connect/connect.php';

//If the fomr has been submitted
if (isset($_POST['submit'])) {
	$personTable=new DatabaseTable($pdo,'person');
	$criteria = $_POST;

	$criteria['birthday'] = $_POST['year'] . '-' . $_POST['month'] . '-' . $_POST['day'];
	unset($criteria['day']);
	unset($criteria['month']);
	unset($criteria['year']);
	unset($criteria['submit']);
	$personTable->save($criteria);
	echo '<p>Record added</p>';
}
$title='Add person';
$content= loadTemplate('../template/add-template.php',[]);