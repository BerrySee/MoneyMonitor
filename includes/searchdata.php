<?php

require_once('dbconn/db.php');
if(ISSET($_POST['search'])) {
    $from = $_POST['from'];
    $to = $_POST['to'];
    $search = new DB();
    $search->expenseMoney($from, $to);
    header('Location: ../actions.php');
}