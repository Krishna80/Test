<?php
function save($pdo, $table, $record, $pk){
    try{
        insert($pdo, $table, $record);
    }
catch(Exception $e)
{
        update($pdo, $table, $record, $pk);
    }
}


function insert($pdo, $table, $record) {
    $keys = array_keys($record);

    $values = implode(', ', $keys);
    $valuesWithColon = implode(', :', $keys);

    $query = 'INSERT INTO ' . $table . ' (' . $values . ') VALUES (:' . $valuesWithColon . ')';

    $stmt = $pdo->prepare($query);

    $stmt->execute($record);
}
function update($pdo, $table,$record,$pk){
$query= "update $table set ";
$parameters=[];

foreach ($record as $key => $value){
    $parameters[]=$key."= :".$key;

}
$query .=implode(', ',$parameters);
$query .= " WHERE $pk= :pk";
$record['pk'] = $record[$pk];
$stmt = $pdo->prepare($query);
$stmt->execute($record);

// echo $query; die();

}

function find($pdo, $table, $field, $value) {
        $stmt = $pdo->prepare('SELECT * FROM ' . $table . ' WHERE ' . $field . ' = :value');
        $criteria = [
                'value' => $value
        ];
        $stmt->execute($criteria);

        return $stmt;
}

function findAll($pdo, $table) {
        $stmt = $pdo->prepare('SELECT * FROM ' . $table );

        $stmt->execute();

        return $stmt;
}
