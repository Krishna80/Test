<?php 
$pdo =new PDO('mysql:host=localhost;dbname=csy20208a','root','');
include 'function.php';
/*
$person1=[
	'firstname'=>'Krishna',
	'surname'=>'karki',
	'birthday'=>'1996-09-24'
];
insert($pdo,'person',$person1);
*/

$person2=[
	'id'=>'2',
	'firstname'=>'Samikshya',
	'surname'=>'bohora',
	'birthday'=>'1996-07-20'	
];
save($pdo,'person',$person2,'id');
?>