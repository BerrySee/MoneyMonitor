<?php
require_once('dbconn/db.php');
if(ISSET($_POST['delete'])) {
    $id = $_POST['id'];
    $constant = $_POST['constant'];
    $delete = new DB();
    $delete->deleteRow($id, $constant);
    $delete= null;
    header('Location: ../wallet.php');
}