<?php

function insert($pdo,$table,$record){
	$keys =array_keys($record);
	$values = implode(',', $keys);
	$valuesWithColon = implode(', :',$keys);
	$query = 'INSERT INTO '.$table.'('.$values.')VALUES(:'.$valuesWithColon.')';
	$stmt=$pdo->prepare($query);
	$stmt->execute($record);
}

function update($pdo,$table,$records,$id){

	$query = 'UPDATE'.$table.'SET';
	$parameters=[];
	foreach ($records as $key => $value) {
		$parameters[]=$key.'=:'.$key;
	}
	$query.=implode(',',$parameters);
	$query.='WHERE'.$id.'=:id';
	$records['id']=$records[$id];
	$stmt=$pdo->prepare($query);
	$stmt->execute($records);

}
function save($pdo,$table,$record,$primaryKey){
try{
	insert($pdo,'person',$person2);
}
catch(Exception $e){
	update($pdo,'person',$person2,'id');
}
}
?>