<?php

$pdo =new PDO('mysql:host=localhost;dbname=csy20208a','root','');
function insert($table,$record){
  global $pdo;
  //get the key of array
  $keys=array_keys($record);
  //key with comma
  $fieldList=implode(',',$keys);
  //key with colon
  $fieldcolon =implode(',:',$keys);
$stmt=$pdo->prepare("INSERT INTO $table($fieldList) VALUES(:$fieldcolon)");
$stmt->execute($record);

}
if(isset($_POST['save'])){
  unset($_POST['save']);
  insert('person',$_POST);


}


?>
<form method="POST" action="">
  <label>Firstname :</label>
    <input type="text" name="fname"><br><br>
  <label>Lastname :</label>
    <input type="text" name="lname"><br><br>
  <label>Birthdate:</label>
    <input type="date" name="BD">
  <input type="submit" name="save" value="save">
  </form
