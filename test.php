<?php
include 'classes/qa.php' ;

$conn1=DbConnection::connect();
$qa = $conn1->prepare('SELECT * FROM qa');
$qa->execute();
$result = $qa->fetchAll(PDO::FETCH_ASSOC);


$data = array();

foreach( $result as $row){
    $data[] = $row ;
}


 echo json_encode($data);

//var_dump($result);