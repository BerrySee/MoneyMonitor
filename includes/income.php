<?php
require_once('dbconn/db.php'); 

if(ISSET($_POST['incomeMoney'])){
    $name = $_POST['name'];
    $type = $_POST['type'];
    $amount = $_POST['amount'];
    $date = $_POST['date'];

    $income = new DB();
    $income->incomeMoney($name, $type, $amount, $date);
    
    header('Location: ../actions.php');

}