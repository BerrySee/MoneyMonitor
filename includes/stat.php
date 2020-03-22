<?php
include('dbconn/db.php');
$data = array();
$statExpense = new DB();
$expense = $statExpense->statExpense();
/*$justAnArray = array();
foreach ($data as $smth) {
array_push($justAnArray, $smth);
}*/
array_push($data,$expense);
$expense = null;

$statTotal = new DB();
$total = $statTotal->statTotal();
array_push($data,$total);
print json_encode($data);
$statTotal = null;


?>