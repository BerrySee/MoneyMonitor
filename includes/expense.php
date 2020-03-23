<?php
require_once('dbconn/db.php'); 

if(ISSET($_POST['expenseMoney'])){
    $name = $_POST['name'];
    $type = $_POST['type'];
    $amount = $_POST['amount'];
    $date = $_POST['date'];
    $expense = new DB();
    $expense->expenseMoney($name, $type, $amount, $date);
   
    header('Location: ../actions.php');

}