<?php
$pdo =new PDO('mysql:host=localhost;dbname=csy20208a','root','');
function find($table,$field,$value){
  global $pdo;
  $stmt =$pdo->prepare("SELECT * FROM $table WHERE $field=:value");
  $criteria=[
    'value'=>$value
  ];
   $stmt-> execute($criteria);
   return $stmt;
}
//for person table
$stmt =find('person','id',1);
echo '<pre>';
$row=$stmt->fetch();
print_r($row);
//for detail table
$stmt=find('detail','id',1);
$row=$stmt->fetch();
echo '<pre>';//without using pre it will give the result in  row
 print_r($row);
 ?>
